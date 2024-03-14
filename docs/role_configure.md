# Ansible role Dolibarr configure

An Ansible role dedicated to configure Dolibarr installed (see install
role) on Debian 12.

The idea behind this role is to run the steps required to configure
Dolibarr after source code install (see specific role if required).

## Role Variables

    dolibarr_version: 12.0

Version of Dolibarr we want to configure.

    dolibarr_http_rootdir: /var/www/

Root directory where we store our Dolibarr instance. Our role will use
that path to locate and execute PHP script to (re-)configure Dolibarr.

    dolibarr_domain: dolibarr.example.com

FQDN under which we will use this Dolibarr instance.

    dolibarr_http_user: www-data

Unix/Linux owning the Dolibarr instance directory (should probably equal
to the user running your webserver or php-fpm process).

    dolibarr_http_group: www-data

Unix/Linux group for the Dolibarr instance directory (should probably
equal to the "group running" your webserver or php-fpm process).

## Dependencies

This role is part of a collection to install and manage your Dolibarr
instance. The configure role **do not** download and install the source
of Dolibarr, for that specific part you can use the install
(dolibarr.install) role of this collection.
