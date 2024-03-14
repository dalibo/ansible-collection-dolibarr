# Testing

We use molecule with docker test our collection, those tests are
automatically executed on the sr.ht CI. You can view the configuration
under the .build directory.

## Dependencies

If you want to use Molecule, you should install those dependencies:

-   Ansible
-   Molecule
-   Docker driver for molecule

You can install them by running those commands :

``` shell
pip install ansible
pip install molecule
pip install 'molecule-driver'
```

## Running the tests locally

You can also run those tests locally with molecule:

``` console
$ molecule test
```

You can also run those test and keep the container up after executing
the tests, for that you should add the flag `--destroy` to `never`.

Or run (almost) each steps by hand:

-   Create the container

    ``` console
    $ molecule create
    ```

-   Apply converge playbook (Basically install Dolibarr dependencies and
    Dolibarr itself) :

    ``` console
    $ molecule converge -s install
    ```

-   Then get a shell within the created container :

    ``` shell
    molecule login -s install
    ```

-   And finally debug :-)
