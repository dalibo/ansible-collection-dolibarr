# Ansible role Dolibarr install

An Ansible Role that installs Dolibarr on Debian 10 and 11.

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
  - the web  servers
  - the database servers
  - PHP

If you want to fully automate your Dolibarr install you must write / find some 
specific roles for those components.

You also probably need to install and configure a git client on the managed
host (required to clone the Dolibarr code from github).
