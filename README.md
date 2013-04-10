magicpath
=========

PHP function to forget about absolute paths, both on Linux and Windows servers.
Two versions are provided, which differ only in the characters needed to be written.

Usage
-----

Drop it where you want inside your project!

Simple use case: Library is dropped at the root of the project, you can use either
```php
$path=magicpath();
```
or
```php
$path=mp();
```
The library is dropped inside a '/common' folder (literally, a folder named common in the root of the project).

```php
$path=magicpath('/common/');
```
or
```php
$path=mp('common');
```
Here's the difference, in magicpath() you have to use slashes both at string start and end.

There's a second optional parameter, $partial, if it's true makes the returned path without the host part.
