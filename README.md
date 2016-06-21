# Interaces
> Most common interfaces I use in apps. Mostly for teaching OOP.

[![Build Status][travis-image]][travis-url]

You can use this library in your app to create your classes designed by contract.

## Installation

After you go into the app directory, you should execute following commands.
OS X & Linux:

```sh
composer require midorikocak/interfaces
```

## Usage example

You should use the interfaces, and your class should implement the interface you want to use.
An interface has only public methods. I use php 7 in this lib, so that all methods should have
exact parameter and return types, defined in the interfaces.

## Development setup

To run all tests of the app, execute these commands in the app directory.

```sh
composer install
phpunit
```

## Release History

* 0.0.1
    * Work in progress
    * added new interfaces
    * packagist auto update

## Meta

Midori Kocak – [@midorikocak](https://twitter.com/midorikocak) – midori@mynameismidori.com

Distributed under the MIT license. See ``LICENSE`` for more information.

[https://github.com/midorikocak/prezis](https://github.com/prezis/)

[travis-image]: https://img.shields.io/travis/dbader/node-datadog-metrics/master.svg?style=flat-square
[travis-url]: https://travis-ci.org/dbader/node-datadog-metrics