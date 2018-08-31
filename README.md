# SpeakingURL

Port of JavaScript library [SpeakingURL](https://pid.github.io/speakingurl) library for PHP.

**getSlug()** implementation is provided through static *SpeakingUrl::getSlug()* and accepts same arguments as the original one.

## Requirements

* PHP 7.0 or newer with multi-byte (**mb_***) functions enabled

## Synopsis

```php
SpeakingUrl\SpeakingUrl::getSlug(string $input, [array $options]): string;
```
Parameters description:

**$input** - Input slug to prettify

**$options** - An associative array of options to invoke method with. See https://github.com/pid/speakingurl#getsluginput-options for more information about supported options.
