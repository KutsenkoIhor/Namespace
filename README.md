--- NAMESPACES ---

Installation:
1. clone the repository
2. do ```composer install``` command

What needs to be done?

1. In order to understand the namespaces of classes, you should write your own implementation of DateTime class,
   in \Quantox\Intership\Own namespace. Please, write only constructor in new class that should print
   information "I AM CUSTOM DATETIME CLASS".

2. In order to understand namespaces of functions, you should write your own implementation of array_walk function,
   in \Quantox\Intership\Own\Functions namespace. When we will call the new function, the function should print "I AM CUSTOM array_walk FUNCTION"

See index.php and composer.json.
After each manipulation with files do the command
```composer dump-autload```

