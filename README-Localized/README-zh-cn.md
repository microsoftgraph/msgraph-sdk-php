# 适用于 PHP 的 Microsoft Graph SDK 入门

[![构建状态](https://travis-ci.org/microsoftgraph/msgraph-sdk-php.svg?branch=master)](https://travis-ci.org/microsoftgraph/msgraph-sdk-php)
[![最新稳定版本](https://poser.pugx.org/microsoft/microsoft-graph/version)](https://packagist.org/packages/microsoft/microsoft-graph)

## PHP Connect 示例入门
如果你想要使用 PHP 库，可以使用 [PHP Connect 示例](https://github.com/microsoftgraph/php-connect-sample)快速启动并运行。本示例将从一个小的 Laravel 项目开始，它可帮助你注册、验证身份并对服务进行简单调用。

## 安装 SDK
你可以使用编辑器 安装 PHP SDK，或者运行 `composer require microsoft/microsoft-graph`，或编辑 `composer.json` 文件：
```
{
    "require": {
        "microsoft/microsoft-graph": "^1.5"
    }
}
```
## Microsoft Graph 入门

### 注册应用程序

使用下列支持的身份验证门户之一注册应用程序，
以使用 Microsoft Graph API：

* [Microsoft 应用程序注册门户](https://apps.dev.microsoft.com)（**推荐**）：
注册一个使用 v2.0 身份验证终结点进行身份验证的新应用程序。此终结点将对个人 (Microsoft) 和工作或学校 (Azure Active Directory)
帐户进行身份验证。
* [Microsoft Azure Active Directory](https://manage.windowsazure.com)：
在租户 Active Directory 中注册新应用程序，以支持租户或多租户的工作或学校用户。

### 使用 Microsoft Graph 服务进行身份验证

适用于 PHP 的 Microsoft Graph SDK 不包含任何默认身份验证实现。[`thephpleague/oauth2-client`](https://github.com/thephpleague/oauth2-client) 库将为你处理 OAuth2 流，并为查询 Graph 提供可用的令牌。

若要验证为应用程序，你可以使用随此库预先安装的 [Guzzle HTTP 客户端](http://docs.guzzlephp.org/en/stable/)，例如：
```php
$guzzle = new \GuzzleHttp\Client();
$url = 'https://login.microsoftonline.com/' . $tenantId . '/oauth2/token?api-version=1.0';
$token = json_decode($guzzle->post($url, [
    'form_params' => [
        'client_id' => $clientId,
        'client_secret' => $clientSecret,
        'resource' => 'https://graph.microsoft.com/',
        'grant_type' => 'client_credentials',
    ],
])->getBody()->getContents());
$accessToken = $token->access_token;
```
有关如何在 Laravel 应用程序中使用 Oauth2 和使用 Graph 的集成示例，请参阅 [PHP Connect 示例](https://github.com/microsoftgraph/php-connect-sample)。

### 调用 Microsoft Graph

下面的示例演示了如何调用 Microsoft Graph。

```php
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model;

class UsageExample
{
    public function run()
    {
        $accessToken = 'xxx';

        $graph = new Graph();
        $graph->setAccessToken($accessToken);

        $user = $graph->createRequest("GET", "/me")
                      ->setReturnType(Model\User::class)
                      ->execute();

        echo "Hello, I am $user->getGivenName() ";
    }
}
```

## 开发

### 调试
你可以将库与诸如 [Fiddler](http://www.telerik.com/fiddler) 或 [Charles 代理](https://www.charlesproxy.com/)之类的代理一起使用，以调试发送的请求和响应。在 Graph 对象上设置如下所示的代理端口：
```php
$graph->setProxyPort("localhost:8888");
```
然后，打开代理客户端以查看使用库发送的请求和响应。 

![Fiddler /me/sendmail 请求和响应的屏幕截图](https://github.com/microsoftgraph/msgraph-sdk-php/blob/master/docs/images/Fiddler.PNG)

如果库未返回用于确定 API 或此 SDK 中是否存在 bug 的预期结果，这尤为有用。因此，在尝试对你提交的问题进行分类时，可能会要求你提供此信息。

### 运行测试

从基本目录运行
```php
vendor/bin/phpunit --exclude-group functional
``` 

*功能测试集设计为在测试帐户下运行。目前，测试无法还原帐户状态。*


## 文档和资源

* [文档](https://github.com/microsoftgraph/msgraph-sdk-php/blob/master/docs/index.html)

* [Wiki](https://github.com/microsoftgraph/msgraph-sdk-php/wiki)

* [示例](https://github.com/microsoftgraph/msgraph-sdk-php/wiki/Example-calls)

* [Microsoft Graph 网站](https://developer.microsoft.com/zh-cn/graph/)

## 问题

在存储库的“[问题](https://github.com/microsoftgraph/msgraph-sdk-php/issues)”选项卡上查看或记录问题。

## 参与

请仔细阅读我们的[参与](https://github.com/microsoftgraph/msgraph-sdk-php/blob/master/CONTRIBUTING.md)指南，以获取有关如何参与此存储库的建议。

## 版权和许可

版权所有 (c) Microsoft Corporation。保留所有权利。在 MIT [许可证](LICENSE)下获得许可。

此项目已采用 [Microsoft 开放源代码行为准则](https://opensource.microsoft.com/codeofconduct/)。有关详细信息，请参阅[行为准则常见问题解答](https://opensource.microsoft.com/codeofconduct/faq/)。如有其他任何问题或意见，也可联系 [opencode@microsoft.com](mailto:opencode@microsoft.com)。
