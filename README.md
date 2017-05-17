# CakePHP Application Tutorial

## 目的
LCチームで多く用いられているCakePHPを学習し、業務に還元していく

- [cakephp/cakephp](https://github.com/cakephp/cakephp).

## 環境構築
*前提*
Docker実行環境が整備されていること

[Docker Official](https://docs.docker.com/)

1. Run `docker-compose up`
1. Run `ocker-compose run web composer install`
1. Run `docker-compose run web bin/cake migrations migrate`.
1. Run `docker-compose run web bin/cake migrations seed`.

