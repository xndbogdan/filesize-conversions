# Changelog

All notable changes to `filesize-conversions` will be documented in this file.

## V1.1 - 2022-08-16

I have added a quick convert method that allows you to write more condensed code.
Here's an example:

```php
FileSizeConversions::quickConvert('megabytes', 'kilobytes', 15);

```
## v1.0.2 - 2022-08-16

Removed offending tests

## V1.0.1 - 2022-08-16

Added file and folder helpers.

```php
FilesizeConversions::fromFile($yourFilePath)->toKilobytesHuman();



```
Have fun with it.

## V1.0.0 - 2022-08-16

Initial release of the package

## 1.0.0 - 2021-11-03

- initial release
