#PHP Sqllite, Silex framework, twig templating, and Angular front end boilerplate
---
###Steps to build
1. Install Composer dependencies with ```composer install```
2. Start php server ```php -S localhost:3000```
3. Point your browser to localhost:3000 and you are up and running.

####This boilerplate contains the following
* Sliex - a Symphony microframework
* Twig template system
* A Sqllite database and a class using PHP:PDO class thanks to: [http://culttt.com/2012/10/01/roll-your-own-pdo-php-class/](http://culttt.com/2012/10/01/roll-your-own-pdo-php-class/)
* Angular.js 1.X


####Things to note.
* To interpolate twig and Angular without conflict, place {% verbatim %}{% endverbatim %} tags for Angular only interpretation of {{curly_braces}} in the twig templates 

####References
1. PHP PDO class querying: http://culttt.com/2012/10/01/roll-your-own-pdo-php-class/
2. Silex references: [https://www.jonathan-petitcolas.com/2013/11/20/building-static-website-with-silex.html](https://www.jonathan-petitcolas.com/2013/11/20/building-static-website-with-silex.html) [http://silex.sensiolabs.org/doc/master/usage.html](http://silex.sensiolabs.org/doc/master/usage.html)
4. Twig reference: [http://silex.sensiolabs.org/doc/master/usage.html](http://silex.sensiolabs.org/doc/master/usage.html)
