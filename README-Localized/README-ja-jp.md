# PHP 用 Microsoft Graph API の概要

[![ビルドの状態](https://travis-ci.org/microsoftgraph/msgraph-sdk-php.svg?branch=master)](https://travis-ci.org/microsoftgraph/msgraph-sdk-php)
[![最新安定版](https://poser.pugx.org/microsoft/microsoft-graph/version)](https://packagist.org/packages/microsoft/microsoft-graph)

## PHP Connect サンプルの使用を開始する
[PHP Connect サンプル](https://github.com/microsoftgraph/php-connect-sample)を使用して、PHP ライブラリをすぐに試すことができます。このサンプルでは、最初に小さな Laravel プロジェクトを使用して登録、認証、サービスの簡単な呼び出しを行います。

## SDK のインストール
PHP SDK は Composer を使用してインストールできます。`composer require microsoft/microsoft-graph` を実行するか、独自の \[`composer.json`] ファイルを編集します。
```
{
    "require": {
        "microsoft/microsoft-graph": "^1.5"
    }
}
```
## Microsoft Graph を使う

### アプリケーションを登録する

Microsoft Graph API を使用するには、
サポートされている次の認証ポータルのいずれかを使用してアプリケーションを登録します。

* [Microsoft アプリケーション登録ポータル](https://apps.dev.microsoft.com) (**推奨**):
v2.0 認証エンドポイントを使用して認証が行われる新しいアプリケーションを登録します。このエンドポイントでは、個人用 (Microsoft) アカウントおよび職場または学校 (Azure Active Directory) のアカウントの両方が認証されます。
* [Microsoft Azure Active Directory](https://manage.windowsazure.com)テナントまたは複数のテナントで職場または学校のユーザーをサポートするために、
新しいアプリケーションをテナントの
Active Directory に登録します。

### Microsoft Graph サービスを使用して認証する

PHP 用 Microsoft Graph SDK には、既定の認証用の実装は含まれていません。[`thephpleague/oauth2-client`](https://github.com/thephpleague/oauth2-client) ライブラリにより OAuth2 フローが処理され、Graph に対するクエリで使用可能なトークンが提供されます。

次の例に示すように、アプリケーションの認証には、このライブラリにプレインストールされている [Guzzle HTTP クライアント](http://docs.guzzlephp.org/en/stable/)を使用できます。
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
Laravel アプリケーションで Oauth2 を使用する方法と Graph を使用する方法を一本化した例については、「[PHP Connect サンプル](https://github.com/microsoftgraph/php-connect-sample)」を参照してください。

### Microsoft Graph を呼び出す

次に示すのは、Microsoft Graph を呼び出す方法の例です。

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

## 開発

### デバッグ
ネットワーク経由で送受信される要求と応答は、ライブラリで [Fiddler](http://www.telerik.com/fiddler) や [Charles Proxy](https://www.charlesproxy.com/) などのプロキシを使用してデバッグできます。Graph オブジェクトのプロキシ ポートを次のように設定します。
```php
$graph->setProxyPort("localhost:8888");
```
次に、プロキシ クライアントを開き、ライブラリを使用して送信された要求と応答を表示します。 

![Fiddler /me/sendmail 要求と応答のスクリーンショット](https://github.com/microsoftgraph/msgraph-sdk-php/blob/master/docs/images/Fiddler.PNG)

これは、想定される結果がライブラリにより返されない場合に、API またはこの SDK にバグが含まれているかどうかを特定する上で特に役立ちます。そのため、報告する問題の優先順位を付ける際に、この情報の入力を求められることがあります。

### テストを実行する

ベースのディレクトリから、
```php
vendor/bin/phpunit --exclude-group functional
``` 
を実行します。

*この一連の関数テストは、テスト アカウントに対して実行されることが想定されたものです。現在、このテストではアカウントの状態は復元されません。*


## ドキュメントとリソース

* [ドキュメント](https://github.com/microsoftgraph/msgraph-sdk-php/blob/master/docs/index.html)

* [Wiki](https://github.com/microsoftgraph/msgraph-sdk-php/wiki)

* [例](https://github.com/microsoftgraph/msgraph-sdk-php/wiki/Example-calls)

* [Microsoft Graph Web サイト](https://developer.microsoft.com/ja-jp/graph/)

## 問題

問題の確認や報告は、リポジトリの \[[Issues](https://github.com/microsoftgraph/msgraph-sdk-php/issues)] タブで行えます。

## 投稿

[投稿](https://github.com/microsoftgraph/msgraph-sdk-php/blob/master/CONTRIBUTING.md)ガイドラインをよくお読みになり、このリポジトリへの投稿方法に関するアドバイスを確認してください。

## 著作権とライセンス

Copyright (c) Microsoft Corporation.All Rights Reserved.MIT [ライセンス](LICENSE)に基づきライセンスを受けています。

このプロジェクトでは、[Microsoft オープン ソース倫理規定](https://opensource.microsoft.com/codeofconduct/) が採用されています。詳細については、「[Code of Conduct の FAQ (倫理規定の FAQ)](https://opensource.microsoft.com/codeofconduct/faq/)」を参照してください。また、その他の質問やコメントがあれば、[opencode@microsoft.com](mailto:opencode@microsoft.com) までお問い合わせください。
