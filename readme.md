##Few things to know##
 
Using composer we have installed php-cs-fixer from ccs.sensiolab.org in order to check our code for PSR1 & PSR2 matching standards.

$ composer global require friendsofphp/php-cs-fixer

$ php php-cs-fixer.phar fix /path/to/dir
OR
$ php php-cs-fixer.phar fix /path/to/file

And for only PSR2
$ php php-cs-fixer.phar fix /path/to/project --rules=@PSR2

Dedicated plugins exist for:

Atom
NetBeans
PhpStorm
Sublime Text
Vim

