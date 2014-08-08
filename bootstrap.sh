#!/usr/bin/env bash

export DEBIAN_FRONTEND=noninteractive

# Generate needed german locale
locale-gen de_DE.UTF-8

apt-get update
apt-get install -y nginx php5-fpm curl mysql-server \
                   php5-dev php-pear php5-curl php5-xdebug php-apc php5-intl php5-sqlite php5-memcached php5-gd php5-xsl \
                   phpmyadmin git-core build-essential ant \
                   default-jre vim unzip

mysqladmin -u root password secret

# fpm config
unlink /etc/php5/fpm/pool.d/www.conf
ln -s /vagrant/etc/php5/fpm/pool.d/www.conf /etc/php5/fpm/pool.d/www.conf

unlink /etc/php5/fpm/php.ini
ln -s /vagrant/etc/php5/fpm/php.ini /etc/php5/fpm/php.ini

unlink /etc/php5/mods-available/xdebug.ini
ln -s /vagrant/etc/php5/mods-available/xdebug.ini /etc/php5/mods-available/xdebug.ini

unlink /etc/php5/mods-available/apcu.ini
ln -s /vagrant/etc/php5/mods-available/apcu.ini /etc/php5/mods-available/apcu.ini

unlink /etc/php5/mods-available/opcache.ini
ln -s /vagrant/etc/php5/mods-available/opcache.ini /etc/php5/mods-available/opcache.ini

service php5-fpm restart

# nginx config
unlink /etc/nginx/nginx.conf
ln -s /vagrant/etc/nginx/nginx.conf /etc/nginx/nginx.conf

unlink /etc/nginx/sites-enabled/default

ln -s /vagrant/etc/nginx/sites-available/app.phpdev.local /etc/nginx/sites-available/app.phpdev.local
ln -s /etc/nginx/sites-available/app.phpdev.local /etc/nginx/sites-enabled/app.phpdev.local

ln -s /vagrant/etc/nginx/sites-available/phpmyadmin /etc/nginx/sites-available/phpmyadmin
ln -s /etc/nginx/sites-available/phpmyadmin /etc/nginx/sites-enabled/phpmyadmin

service nginx restart

# install composer
if [ ! -f /usr/local/bin/composer ]; then
    cd /tmp && curl -sS https://getcomposer.org/installer | /usr/bin/php
    mv /tmp/composer.phar /usr/local/bin/composer
fi

# install symfony2 se
if [ ! -d /vagrant/www/app.phpdev.local/web ]; then
    /usr/local/bin/composer create-project symfony/framework-standard-edition /vagrant/www/app.phpdev.local "2.5.*"
fi
