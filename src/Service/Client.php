<?php
/**
 * Class Client
 *
 * @package DigitalVirgo\MTSubscriptions\Service
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSubscriptions\Service;

use DigitalVirgo\MTSubscriptions\Model\GetOrderStatusResponse;
use DigitalVirgo\MTSubscriptions\Model\MtResponse;
use DigitalVirgo\MTSubscriptions\Model\DeactivationForm;
use DigitalVirgo\MTSubscriptions\Model\InitSubscriptionRequest;
use DigitalVirgo\MTSubscriptions\Model\InitSubscriptionResponse;
use DigitalVirgo\MTSubscriptions\Model\ModelAbstractTraitInterface;
use DigitalVirgo\MTSubscriptions\Model\NotifySubscriptionRequest;
use DigitalVirgo\MTSubscriptions\Service\Client\Exception\BadRequestException;
use DigitalVirgo\MTSubscriptions\Service\Client\Exception\ForbiddenException;
use DigitalVirgo\MTSubscriptions\Service\Client\Exception\MethodNotAllowedException;
use DigitalVirgo\MTSubscriptions\Service\Client\Exception\NotFoundException;
use DigitalVirgo\MTSubscriptions\Service\Client\Exception\UnauthorizedException;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Message\ResponseInterface;
use GuzzleHttp\Stream\Stream;

/**
 * Class Client - Provice api methods
 */
class Client extends GuzzleClient
{
    const API_URL = 'https://subscription-justpay.digitalvirgo.pl/mtsubscriber/';


    /**
     * Instance for singleton
     *
     * @var Client
     */
    private static $_instance = null;

    /**
     * Get new instance of client
     *
     * @return Client
     */
    public static function getInstance($apiUrl = null)
    {
        if (null === static::$_instance) {
            static::$_instance = new static(array(
                'base_url' => $apiUrl ?: self::API_URL,
            ));
        }
        return static::$_instance;
    }

    /**
     * Set authorization data
     *
     * @param string $login login
     * @param string $password password
     */
    public function setAuth($login, $password)
    {
        $this->setDefaultOption('auth', [
            $login, $password
        ]);
    }

    /**
     * Send http request
     *
     * @param string $url Request path
     * @param string $method Http method
     * @param mixed $payload Data to send with request
     * @param array $options Request addtional options
     * @return ResponseInterface Body string response
     * @throws BadRequestException
     * @throws MethodNotAllowedException
     * @throws NotFoundException
     * @throws UnauthorizedException
     * @throws \Exception
     */
    protected function _request($url, $method = 'GET', $payload = null, $options = [])
    {
        switch ($method) {
            case 'GET':
                if (is_array($payload)) {
                    $options['query'] = [$payload];
                } else {
                    $options['query'] = $payload;
                }
                break;
            case 'POST':
            case 'PUT':
                if ($payload instanceof ModelAbstractTraitInterface) {
                    $options['body'] = Stream::factory($payload->toXml());
                    $options['headers']['Content-type'] = 'application/xml';
                } else {
                    $options['body'] = Stream::factory($payload);
                }
                break;
        }
        try {
            $response = $this->send(
                $this
                    ->createRequest($method, $url, $options)
            );
        } catch (ClientException $e) {
            switch ($e->getResponse()->getStatusCode()) {
                case 400:
                    throw new BadRequestException((string)$e->getResponse()->getBody());
                    break;
                case 401:
                    throw new UnauthorizedException();
                    break;
                case 403:
                    throw new ForbiddenException();
                    break;
                case 404:
                    throw new NotFoundException();
                    break;
                case 405:
                    throw new MethodNotAllowedException();
                    break;
                default:
                    throw new \Exception((string)$e->getResponse()->getBody());
                    break;
            }
        }

        return $response;
    }

    /**
     * Create new subscription order
     *
     * @param InitSubscriptionRequest|array $request Order data
     * @param bool $raw return raw xml output
     * @return InitSubscriptionResponse|string
     */
    public function initSubscription($request, $raw = false)
    {
        if (is_array($request)) {
            $request = new InitSubscriptionRequest($request);
        }

        $response = (string) $this->_request("rwdsubscriptions/initSubscription", "POST", $request)->getBody();

        if ($raw) {
            return $response;
        }


        return (new InitSubscriptionResponse())->fromXml($response);
    }

    /**
     * Deactivate subscriptions order
     *
     * @param string $transactionIdOrDeactivationForm Transaction UID of subscription order
     * @param bool $raw return raw xml output
     * @return MtResponse|string
     */
    public function deactivate($transactionIdOrDeactivationForm, $raw = false)
    {
        $request = $transactionIdOrDeactivationForm;

        if (is_array($transactionIdOrDeactivationForm)) {
            $request = new DeactivationForm($transactionIdOrDeactivationForm);
        } elseif (is_string($transactionIdOrDeactivationForm)) {
            $request = new DeactivationForm([
                'transactionId' => $transactionIdOrDeactivationForm
            ]);
        }

        $response = (string) $this->_request("client2/deactivation/xml", "POST", $request)->getBody();

        if ($raw) {
            return $response;
        }

        return (new MtResponse())->fromXml($response);
    }

    /**
     * Get current status of subscription order
     *
     * @param string $transactionId Transaction UID of subscription order
     * @param bool $raw return raw json output
     */
    public function getStatus($transactionId, $raw = false)
    {
        $request = [
            'transactionId' => $transactionId
        ];

        $response = $this->_request("rwdsubscriptions/getOrderStatus", "POST", json_encode($request), [
            'headers' => [
                'Content-type' => 'application/json'
            ]
        ]);

        if ($raw) {
            return (string) $response->getBody();
        }

        return new GetOrderStatusResponse($response->json()['data']);
    }

    /**
     * Parse notification about subscriber registration in service
     * @return  NotifySubscriptionRequest
     * @throws \Exception
     */
    public function getNotifySubscriptionRequest()
    {
        $postData = file_get_contents("php://input");
        $requestObj = new NotifySubscriptionRequest();
        return $requestObj->fromXml($postData);
    }
}
