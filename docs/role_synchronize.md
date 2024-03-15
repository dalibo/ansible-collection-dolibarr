# Ansible role Dolibarr synchornize

A basic role to synchronize the source code of an installed Dolibarr
from one directory to another.

## Requirements

rsync must be installed on target node (this role use the rsync Ansible
module to synchronize dolibarr directories).

## Role Variables

``` yaml
dolibarr_sync_directory_src
```

Path where the Dolibarr instance we want to duplicate is installed.

``` yaml
dolibarr_sync_directory_dest
```

Path where the Dolibarr instance will be cloned.

``` yaml
dolibarr_sync_directory_rsync_options
```

List of rsync options to use on synchronization (Eg:
`["--exclude='*.pdf'", "--exclude='*.cache'"]` to ignore pdf and cache
files.)

``` yaml
dolibarr_sync_src_host
```

This variable can define from which host dolibarr should be
synchronized. Eg: If we want to synchronize our production instance of
Dolibarr to a staging server, we can set this variable to the
inventory_hostname of the production server.

## Example Playbook

Here is an example about how to use this role to synchronize a
production instance (running on prod) to a labo without any pdf or
.cache files.

``` yaml
- hosts: labo
  become: true
  vars:
    dolibarr_sync_directory_src: /var/www/dolibarr
    dolibarr_sync_directory_dest: /var/www/dolibarr_synced
    dolibarr_sync_directory_rsync_options:
      - "--exclude='*.pdf'"
      - "--exclude='*.cache'"
    dolibarr_sync_srv_host: prod
  roles:
    - l00ptr.dolibarr.synchronize
```

## License

BSD
