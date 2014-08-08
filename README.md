vagrant-trusty64-symfony2
================

This is a K.I.S.S. sample Vagrant box for Symfony2 development based on an Ubuntu Trusty 64-bit Linux.
The following services and components will be provisioned by shellscript (`bootstrap.sh`):

- Nginx + PHP-FPM
- MySQL
- PHP5.5
- Symfony2
- Composer
- PhpMyAdmin

THIS IS DEV-ONLY! NEVER USE THIS SETUP FOR PRODUCTION ENVIRONMENT!!!

# Getting started

Just checkout this repository and run `vagrant up`. To access the VM by DNS it is recommended to add
the following entry to your `hosts` file (Windows `\Windows\System32\drivers\etc\hosts` or Linux `/etc/hosts`):

`192.168.111.11      app.phpdev.local pma.phpdev.local`

SSH:

- Host: `192.168.111.11`
- User: `vagrant`
- Password: `vagrant`

Symfony2:

- DEV: http://app.phpdev.local/app_dev.php
- PROD: http://app.phpdev.local/

PhpMyAdmin:

- http://pma.phpdev.local/
- User: `root`
- Password: `secret`

The Symfony2 installation is located under `/vagrant/www/app.phpdev.local/`

Have fun!





