# Ansible role Dolibarr configure

An Ansible role dedicated to configure Dolibarr installed (see install
role) on Debian 12.

By configuring Dolibarr, we mean:

-   generating a valid Dolibarr config file
-   creating / migrating the database (using dedicated PHP script)
-   Lock the Dolibarr install to prevent further modifications (dropping
    an install.lock within the data root)

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

## Tags

Because in some situation we only want to (re)generate the Dolibarr
configuration file, we have a specific tag
`dolibarr_enforce_generate_configuration` to only run tasks to enforce
its creation.

When using that role within a configuration playbook we can call Ansible
with that tag and we will only generate the conf.php.

## Dependencies

This role is part of a collection to install and manage your Dolibarr
instance. The configure role **do not** download and install the source
of Dolibarr, for that specific part you can use the install
(dolibarr.install) role of this collection.
