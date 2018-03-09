**Few things to know**
 
Using composer we have installed php-cs-fixer from ccs.sensiolab.org in order to check our code for PSR1 & PSR2 matching standards.

$ composer global require friendsofphp/php-cs-fixer
$ export PATH="$PATH:$HOME/.composer/vendor/bin"

Without composer, you must download the phar file then :
$ php php-cs-fixer-v2.phar fix /path/to/dir
OR
$ php php-cs-fixer-v2.phar fix /path/to/file

And for only PSR2
$ php php-cs-fixer-v2.phar fix /path/to/project --rules=@PSR2

To display everything
$ php lib/php-cs-fixer-v2.phar fix /path/to/project --verbose --diff


Dedicated plugins exist for:

Atom
NetBeans
PhpStorm
Sublime Text
Vim

