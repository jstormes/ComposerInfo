Composer Info
================

This package will let you dump the `composer.lock` and `composer.json` to 
verify what was installed on the server/container.

This package has no security around it, so you should only use it on intranet services.

Usage
-----

It only supports the Restful getList call.

Ending the base URL with `/composer/lock` will dump the `composer.lock` file.
Ending the base URL with `/composer/json` will dump the `composer.json` file.