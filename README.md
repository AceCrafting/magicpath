magicpath
=========

PHP function to forget about absolute paths, both on Linux and Windows servers.
Two versions are provided, which differ only in the characters needed to be written.

Usage
-----

Drop it where you want inside your project!

```php
$path=magicpath();
```
or
```php
$path=mp();
```


There's an optional parameter, $partial, if it's true makes the returned path without the host part.
