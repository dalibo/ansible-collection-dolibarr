# Ansible role dolibarr install

An Ansible role dedicated to configure Dolibarr installed on Debian 9 an 10. 

The idea behind this role is to run the steps required to build a running 
instance of Dolibarr after installing the source code.

## Role Variables

    dolibarr_version: 12.0

Version of Dolibarr we want to install on our managed remote host.

    dolibarr_http_rootdir: /var/www/

Root directory where we will store our Dolibarr instance. Our role will create
a directory based on the dolibarr_domain under this dolibarr_http_rootdir. So 
by default we create the /var/www/dolibarr.example.com directory and use it to
store our Dolibarr instance.

    dolibarr_domain: dolibarr.example.com

FQDN under which we will use this Dolibarr instance.

    dolibarr_http_user: www-data

Unix/Linux owning the Dolibarr instance directory (should probably equal to the
user running your webserver or php-fpm process).

    dolibarr_http_group: www-data

Unix/Linux group for the Dolibarr instance directory (should probably equal to 
the "group running" your webserver or php-fpm process).

## Dependencies
This role is part of a collection to install and manage your Dolibarr instance,
this collection **doesn't** install and configure :
  - The web  servers
  - The database servers
  - PHP

If you want to fully automate your Dolibarr install you must write / find some 
specific roles for those components.

You also probably need to install and configure a git client on the managed
host (required to clone the Dolibarr code from github).
