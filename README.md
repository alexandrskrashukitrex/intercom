![CompactCode](https://compactcode.eu/pub/media/logo/stores/1/CompactCode_Logo.png)

# Magento 2 Intercom integration

# Documentation

**You will need an intercom account in order to use this module.**

All documentation and pictures can be found on https://compactcode.eu/intercom

# Alert

We try to keep the github project up-to-date but to ensure you have the latest version you can install the module trough our website.


# Information

![CompactCode Intercom](https://compactcode.eu/pub/media/catalog/product/cache/3fe9a87e27d9fa1710491a7d32c4e511/i/n/intercom-01.jpg)

This free module for Magento 2© provides a intercom chat function integration. Intercom is a great communication platform for you and your customers. When customers are logged in every chat will be handled with their account so you can track their questions. It is possible to expand the functionality that we have with your own code or ask for custom development since this module already uses the Intercom JS API!

 
A chat function on your website is a must have these days. This free module will provide just that with the help of Intercom.

## Installation

Create a folder named **CompactCode/Intercom** under your app/code folder within your Magento Root directory and place all provided files within the src directory under that.

You need to perform the following commands after that *(within your magento root directory via ssh)*:

  * `php bin/magento cache:clean`

  * `php bin/magento setup:upgrade`

  * `php bin/magento setup:di:compile`

  * `php bin/magento setup:static-content:deploy`

## Composer Install Instructions
  * `composer config repositories.compactcode-base git git@github.com:CompactCodeEU/base.git && composer config repositories.compactcode-intercom git git@github.com:CompactCodeEU/intercom.git`

  * `composer require "compactcode/intercom:dev-master"`

  * `php bin/magento setup:upgrade`
