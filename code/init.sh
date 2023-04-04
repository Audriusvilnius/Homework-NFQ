#!/bin/bash

composer install --no-interaction

bin/console doctrine:database:create --no-interaction
bin/console doctrine:migrations:migrate --no-interaction
bin/console doctrine:fixtures:load --no-interaction
