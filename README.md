magicpath
=========

PHP function to forget about absolute paths, both on Linux and Windows servers.
Two versions are provided, which differ only in the characters needed to be written.

Usage
-----

Drop it where you want inside your project!
Need to pass the dimension of relative path to the root from the function.

Example:
-if you drop the function in the root of your website, you obtain the absolute url via
```php
$host=magicpath(0);
```
If it' one level down from the root
```php
$host=magicpath(1);
```
Same if you call it from lower scripts (related to the file tree structure).

It's provided a simple mp(); which equals magicpath(0); 
