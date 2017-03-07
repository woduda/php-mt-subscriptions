<?php
/**
 * Class Client
 *
 * @package DigitalVirgo\MTSubscriptions\Service
 * @author Adam Jurek <adam.jurek@digitalvirgo.pl>
 */
namespace DigitalVirgo\MTSubscriptions\Service;

use DigitalVirgo\MTSubscriptions\Model\InitSubscriptionRequest;
use DigitalVirgo\MTSubscriptions\Model\InitSubscriptionResponse;
use DigitalVirgo\MTSubscriptions\Model\ModelAbstractTraitInterface;
use DigitalVirgo\MTSubscriptions\Service\Client\Exception\BadRequestException;
use DigitalVirgo\MTSubscriptions\Service\Client\Exception\ForbiddenException;
use DigitalVirgo\MTSubscriptions\Service\Client\Exception\MethodNotAllowedException;
use DigitalVirgo\MTSubscriptions\Service\Client\Exception\NotFoundException;
use DigitalVirgo\MTSubscriptions\Service\Client\Exception\UnauthorizedException;
use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Stream\Stream;

/**
 * Class Client - Provice api methods
 */
class Client extends GuzzleClient
{
//    const API_URL = 'http://mtservice.services.avantis.pl/mtsubscriber/'';
    const API_URL = 'http://testsrv.avantis.pl/mtsubscriber/';

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
    public static function getInstance()
    {
        if (null === static::$_instance) {
            static::$_instance = new static(array(
                'base_url' => self::API_URL,
            ));
        }
        return static::$_instance;
    }


    /**
     * Send http request
     *
     * @param string $url Request path
     * @param string $method Http method
     * @param mixed $payload Data to send with request
     * @return string Body string response
     * @throws BadRequestException
     * @throws MethodNotAllowedException
     * @throws NotFoundException
     * @throws UnauthorizedException
     * @throws \Exception
     */
    protected function _request($url, $method = 'GET', $payload = null)
    {
        $options = [];
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
                $this->createRequest($method, $url, $options)
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
        /** @var \GuzzleHttp\Stream\Stream $body */
        $body = $response->getBody();
        return (string)$body;
    }

    /**
     * Create new subscription order
     *
     * @param InitSubscriptionRequest|array $request Order data
     * @param bool $raw return raw xml output
     */
    public function initSubscription($request, $raw = false)
    {
        if (is_array($request)) {
            $request = new InitSubscriptionRequest($request);
        }

        $response = $this->_request("rwdsubscriptions/initSubscription", "POST", $request);

        if ($raw) {
            return $response;
        }


        return (new InitSubscriptionResponse())->fromXml($response);

    }

    /**
     * Deactivate subscriptions order
     *
     * @param string $transactionId Transaction UID of subscription order
     * @param bool $raw return raw xml output
     */
    public function deactivate($transactionId, $raw = false)
    {
        //@todo
    }

    /**
     * Get current status of subscription order
     *
     * @param string $transactionId Transaction UID of subscription order
     * @param bool $raw return raw json output
     */
    public function getStatus($transactionId, $raw = false)
    {
        //@todo
    }

}