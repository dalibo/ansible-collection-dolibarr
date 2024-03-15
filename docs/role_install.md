# Ansible role Dolibarr install

An Ansible Role to install Dolibarr on Debian 12.

## Role Variables

    dolibarr_version: 12.0

Version of Dolibarr we want to install.

    dolibarr_http_rootdir: /var/www/

Root directory where we will store Dolibarr code. This role take care of
creating a directory based on the `dolibarr_domain` under
`dolibarr_http_rootdir`. With the default values we create this
directory: `/var/www/dolibarr.example.com` and use it to store our
Dolibarr instance.

    dolibarr_domain: dolibarr.example.com

FQDN under which we will configure and use Dolibarr.

    dolibarr_http_user: www-data

Unix/Linux user owning the Dolibarr files (should probably be equal to
the user running your web server or php-fpm process).

    dolibarr_http_group: www-data

Unix/Linux group for the Dolibarr instance directory (should probably be
equal to the "group running" your web server or php-fpm process).

    dolibarr_http_proto: https

The protocol (http or https) used to expose your instance. That value is
only used to configure and tell Dolibarr what protocol it should use
(Eg: when dolibarr is behind a reverse proxy).

    dolibarr_main_db_type: mysqli

The database type we should use to store data. By default we use MySQL
(or MariaDB) because it's (almost) the default for Dolibarr, but you can
also use (and we encourage it) `postgres`.

## Dependencies

This role is part of a collection to install and manage your Dolibarr
instance. It **does not** install:

-   The web server (and at this time, we only support/test with Apache)
-   The database server
-   PHP module for Apache nor php-fpm, but we install php packages
    required by Dolibarr.

If you want to fully automate your Dolibarr install you must write or
find specific roles for those components.

You also probably need to install and configure a git client on your
target node (required to clone the Dolibarr code from GitHub).
