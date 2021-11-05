# Testing 
## Running the tests 
We use molecule with the docker driver to test our collection. Currently those
tests are run by hand (next step is to automate this step with some CI). 

Basicly you can run those tests with the following command :

```
molecule test
```

Debugging can be done with those process :
  - Create the container
  ```shell
  molecule create
  ```

- Apply converge playbook (Basically install Dolibarr dependencies and Dolibarr 
  itself) : 
  ```shell
  molecule converge
  ```

- Then get a shell within the container :
  ```shell
  molecule login
  ```
- And finally debug :-) 

## Dependencies
Running those test requires a few dependecies :
  - Ansible
  - Molecule
  - Docker driver for molecule

You can install them by running those commands :
  ```shell
  pip install ansible 
  pip install molecule
  pip install 'molecule[docker]'
  ```
