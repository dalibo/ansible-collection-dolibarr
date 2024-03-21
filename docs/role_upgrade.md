# Ansible role Dolibarr upgrade

An Ansible role that upgrades Dolibarr from a version to a newer one.

This role take care of:

-   Upgrading the code
-   Upgrading the database (it applies the migration script)
-   Unlock and lock the installation script

Currently out of scope:

-   Backup of the database
-   Backup of the code
-   Rescuing in case of upgrade failure

## Role variables

    dolibarr_current_installed_version: 17.0

Version of Dolibarr we upgrade from (old version in place).

    dolibarr_version: 18.0

Version of Dolibarr we upgrade to (new version).
