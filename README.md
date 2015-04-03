# jade-phalcon
Jade Template Engine for Phalcon

To use Jade with your Phalcon application, just add to composer.json, in the require section:

```json
"kylekatarnls/jade-phalcon": "dev-master"
```

Then register the template:

```php
require '../vendor/autoload.php';

// ...
$di = new FactoryDefault();

// Setting up the view component
$di['view'] = function() {
    $view = new View();
    $view->setViewsDir('../app/views/');
    $view->registerEngines(array(
        ".jade" => function($view, $di) {
            return new Jade($view, $di);
        }
    ));
    return $view;
};
```

Now you can add jade files in the views directory:

app/views/index.jade:

```jade
doctype html
html
  head
    title jade-phalcon
  body
    p Generetad with jade-phalcon
```
