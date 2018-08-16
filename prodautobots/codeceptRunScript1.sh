#!/bin/sh

cd /home/bliu/automationtests/prodautobots/userAcceptTest/

codecept run --steps --html

codecept run tests/acceptance/ProdTestCest.php --steps --html

codecept run tests/acceptance/ProdTestCest.php:individualtest --steps --html
