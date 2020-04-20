# Bycod Microframework 
Micro framework derived from Ksike Framework Elephant. The first version of Bycod framework was released in 2012. Bycod is an attempt to take all the advantages of Ksike Elephant and Apayus Framewok, but providing greater flexibility to the core. The core of Bycod is based on the operation of workflow, establishing its behavior in general for whole framework.

```php
$config['bycod']['engine']['links']['onStart'][] = 'mylib';
$config['bycod']['engine']['links']['onStop'][] = 'mylib';
$config['bycod']['engine']['links']['onError'][] = 'mylib';
$config['bycod']['engine']['links']['onException'][] = 'mylib';
$config['bycod']['engine']['links']['onConfig'][] = 'loader';
$config['bycod']['engine']['links']['onConfig'][] = 'rbac';
$config['bycod']['engine']['links']['onRequest'][] = 'request';
$config['bycod']['engine']['links']['onDispatch'][] = 'front';
$config['bycod']['engine']['links']['onRender'][] = 'view';
$config['bycod']['engine']['links']['onResponse'][] = 'response';

$config['bycod']['engine']['workflow'][] = 'onStart';
$config['bycod']['engine']['workflow'][] = 'onRequest';
$config['bycod']['engine']['workflow'][] = 'onAccess';
$config['bycod']['engine']['workflow'][] = 'onDispatch';
$config['bycod']['engine']['workflow'][] = 'onRender';
$config['bycod']['engine']['workflow'][] = 'onResponse';
$config['bycod']['engine']['workflow'][] = 'onStop';
```

The code above is a snippet from the Bycod Framework general configuration file in a common application. Note how ['bycod'] ['engine'] ['workflow'] describes an ordered sequence of configurable events like a workflow. On the other hand, in ['bycod'] ['engine'] ['links'] it is possible to link to each one of these events that will occur in time with the corresponding controllers that you want to execute. This allows the operation of the framework in general to be very dynamic and flexible. The general workflow can be changed for different applications, as well as the drivers that implement it.


### Similar projects 
+ [Zeotool: Microframework developed to create CLI applications in PHP language](https://github.com/ameksike/zeotool)
+ [Apayus: PHP Microframework implemented to develop custom web applications](https://github.com/ameksike/apayus)
+ [Bhike: Integrated Development Environment (IDE) for Ksike Framewok](https://github.com/ameksike/bhike)
+ [Ksike Framework: Larva - focus on rich internet application development also known as RIA](https://github.com/ameksike/ksike.larva)
+ [Ksike Framework: Elephant - focus on PHP](https://github.com/ameksike/ksike.elephant)



### Libs
In general, each of the libraries that compose the framework have their own independent development, which allows them to be used in other projects as well, some of it are listed below:

+ [LQL:  Light Query Language it is a query generator independent of data access layer](https://github.com/ameksike/ksike.elephant.lql) 
+ [Secretary: Lightweight library for data access abstraction](https://github.com/ameksike/ksike.elephant.secretary)
+ [Carrier: Dynamic class loading through a list of previously defined namespaces](https://github.com/ameksike/ksike.rhino.ui)
+ [Notary: Simple and light template engine for php and html support](https://github.com/ameksike/ksike.elephant.notary)
