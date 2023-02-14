# Docker PHP App

This give you a most basic setup to start working on a **basic** PHP application. This deliberately does not have any framework components but it does add some helpful tools/libraries like xdebug, phpunit, mockery, phpcs, phpstan which are helpful for a good app development.

**NB: I do not like sphagheti setup, so here you will find the app and the docker stuff as separate things.**

## How to get started

1. Clone the repo
2. Navigate to docker-compose
3. Run

        docker compose up 

## Using a different version of PHP

It's super easy to change the PHP version. Update `PHP_VERSION` in `./docker-compose/docker-compose.yml` to desired version and *that's really it.*

## How to test

1. Navigate to docker-compose
2. Run

        docker compose run composer test 
