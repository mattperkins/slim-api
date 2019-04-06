# SCAFFOLD
```
composer require slim/slim "^3.0"
composer require slim/twig-view
```

### run after making changes to composer.json (-o = optimise)
```
composer dump-autoload -o
```


### ENDPOINTS : Web
```
http://slim-api/
http://slim-api/users
http://slim-api/contact
http://slim-api/topics
http://slim-api/products (var_dump)
http://slim-api/product/1
```
### ENDPOINTS : API
```
http://slim-api/api/customers
http://slim-api/api/deals
```
```
http://slim-api/hello/wildcard
```