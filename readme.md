# [zahradka.echo-msz.eu](http://zahradka.echo-msz.eu)

## Nette & Vue project of webside zahradka.echo-msz.eu

This is [Nette](https://nette.org) & [Vue.js](https://vuejs.org/) project of webside [zahradka.echo-msz.eu](http://zahradka.echo-msz.eu). 

## Nette projekt stránky www.bwfoto.sk

Toto je [Nette](https://nette.org) a [Vue.js](https://vuejs.org/) projekt web-stránky [zahradka.echo-msz.eu](http://zahradka.echo-msz.eu).

## Install

-   spusť príkaz `git clone https://github.com/petak23/bwfoto.git`
-   presuň sa do adresára `cd bwfoto`
-   vytvor podadresáre `temp` a `log` (`mkdir log temp`)
-   na linuxe spusť: `chmod -R a+rw temp log` viď aj: [Nette - Nastavení práv adresářů](https://doc.nette.org/cs/troubleshooting#toc-nastaveni-prav-adresaru)
-   vytvor databázu `bwfoto_new` a importuj do nej súbor `sql\bwfoto_new.sql`
-   spusť `composer install`
-   spusť `npm install`
-   premenuj `app\cofig\config.local.neon.temp` a `app\cofig\database.neon.temp` odstránením koncovky `.temp` a vyplň v nich potrebné údaje

## Webpack

-   `npm run start` - generates development bundles
-   `npm run watch` - watch changes in development bundles
-   `npm run serve` - starts webpack development server
-   `npm run build` - generates production bundles

## Deployment

-   `php ../ftp-deployment/deployment deployment.ini`

## Komponenty tretích strán

- ...

## github personal token:

-   pregeneruj token na: (https://github.com/settings/tokens)
-   použi príkaz: `git remote set-url origin https://petak23:!!!TOKEN!!!@github.com/petak23/zahradka.git`
