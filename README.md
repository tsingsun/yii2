Yii PHP Framework Version 2
===========================

This is the core framework code of [Yii 2](https://github.com/yiisoft/yii2#readme).

This repository is a read-only git subsplit of <https://github.com/yiisoft/yii2>.
Please submit issue reports and pull requests to the main repository.
For license information check the [LICENSE](LICENSE.md)-file.

Installation
------------

The preferred way to install the Yii framework is through [composer](http://getcomposer.org/download/).

Either run

```
composer global require "fxp/composer-asset-plugin:^1.3.1"
```

then set repository in composer.json
```json
"repositories":[
  {
    "type":"git",
    "url":"https://github.com/tsingsun/yii2-framework.git"
  }
]
```

or add

```json
"yiisoft/yii2": "~2.0.0",
```

to the require section of your composer.json.
