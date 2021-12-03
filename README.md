# 介绍

淘宝联盟、京东联盟SDK封装，该项目长期维护，如发现问题，请发送邮件。

仅支持laravel5-laravel8，这不是可以直接拿来用的返利系统。

不要问我什么是SDK，如果你不懂，说明这个扩展不适合你。


# 联系方式

邮箱：hauser_k@163.com

QQ：610812903


# 安装
1、安装扩展包，该扩展包只支持laravel

```bash
composer require hauser/discountset
```


2、执行下面的命令，然后修改config/discountset.php

```bash
php artisan vendor:publish --provider "Hauser\DiscountSet\ServiceProvider"
```

# 初始化SDK
每个平台SDK的具体调用方法参考各平台的文档

1、淘宝SDK初始化

```php
<?php
use Hauser\DiscountSet\Factory;
use Hauser\DiscountSet\taobao\request\TbkItemInfoGetRequest;

$client = Factory::taobao ();
$req = new TbkItemInfoGetRequest();
$req->setNumIids ($numIids);
return $client->execute ($req);
```

2、京东SDK初始化

```php
<?php
use Hauser\DiscountSet\Factory;
use Hauser\DiscountSet\jingdong\request\JdUnionGoodsPromotiongoodsinfoQueryRequest;

$jd = Factory::jingdong();
$req = new JdUnionGoodsPromotiongoodsinfoQueryRequest();
$req->setSkuIds("$itemid");
return $jd->execute($req);
```
