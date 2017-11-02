https://knpuniversity.com/screencast/symfony/routing-wildcards#play


# Installing & Setting up the Symfony Framework

https://symfony.com/doc/current/setup.html


# Use PHP's built-in Web Server
https://symfony.com/doc/current/setup/built_in_web_server.html

http://localhost:8000/config.php
sudo apt-get install php7.0-intl

#()data upgrade the ICU system package and the intl PHP extension

# Install PDO drivers (mandatory for Doctrine) unix 16.04
sudo apt install php7.0-sqlite3


curl -sS -o /tmp/icu.tar.gz -L http://download.icu-project.org/files/icu4c/57.1/icu4c-57_1-src.tgz && tar -zxf /tmp/icu.tar.gz -C /tmp && cd /tmp/icu/source && ./configure --prefix=/usr/local && make && make install   



check security
php bin/console security:check


# run the project
php bin/console server:run
