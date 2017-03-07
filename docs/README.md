## Usage

### Available methods
1. [Initialize subscription](1-init-subscription.md)
2. [Deactivate subscription](2-deactivate-subscription.md)
3. [Get status](3-get-status.md)

### Class documentation

[PHPDOC](phpdoc/README.md)

#### Doc's generating
```sh
rm -rf ./out/*
rm -rf ./docs/phpdoc/*

cd vendor/bin
./phpdoc -d ./../../src/ -t ./../../out --template="xml"
./phpdocmd ../../out/structure.xml ./../../docs/phpdoc --index README.md
```