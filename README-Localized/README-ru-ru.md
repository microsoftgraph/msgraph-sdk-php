# Начните работу с Microsoft Graph SDK для PHP

[![состояние сборки](https://travis-ci.org/microsoftgraph/msgraph-sdk-php.svg?branch=master)](https://travis-ci.org/microsoftgraph/msgraph-sdk-php)
[![Последняя стабильная версия](https://poser.pugx.org/microsoft/microsoft-graph/version)](https://packagist.org/packages/microsoft/microsoft-graph)

## Начало работы с образцом подключения к PHP
Если вы хотите поработать с библиотекой PHP, вы можете быстро приступить к работе с [образцом подключения к PHP](https://github.com/microsoftgraph/php-connect-sample). В этом примере вы познакомитесь с небольшим проектом Laravel, который поможет вам с регистрацией, аутентификацией и простым обращением в сервис.

## Установка пакета SDK
Вы можете установить пакет SDK для PHP с композитором либо запустить `Composer требуется Microsoft или Microsoft-Graph`или изменить `Composer. JSON`-файл:
```
{
    "require": {
        "microsoft/microsoft-graph": "^1.5"
    }
}
```
## Начало работы с Microsoft Graph

### Зарегистрируйте приложение

Зарегистрируйте свое приложение для использования Microsoft Graph API
с помощью одного из следующих поддерживаемых порталов аутентификации:

* [Портал регистрации приложений Microsoft](https://apps.dev.microsoft.com) (**рекомендуется**).Зарегистрируйте новое приложение, которое выполняет проверку подлинности
с помощью конечной точки проверки подлинности версии 2.0. Эта конечная точка проверяет подлинность как личных (Майкрософт), так и рабочих или учебных (Azure Active Directory) учетных записей.
* [Microsoft Azure Active Directory](https://manage.windowsazure.com). Зарегистрируйте новое приложение в службе каталогов Active Directory
клиента для поддержки пользователей рабочих или учебных
учетных записей для клиента или нескольких клиентов.

### Аутентификация с помощью службы Microsoft Graph

Microsoft Graph SDK для PHP не включает никаких реализаций аутентификации по умолчанию. Библиотека [`thephpleague/oauth2-client`](https://github.com/thephpleague/oauth2-client) будет обрабатывать поток OAuth2 для вас и предоставлять полезный токен для запроса графика.

Для аутентификации в качестве приложения вы можете использовать [HTTP-клиент Guzzle](http://docs.guzzlephp.org/en/stable/), который поставляется с этой библиотекой, например, так:
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
; Интегрированный пример того, как использовать Oauth2 в приложении Laravel и использовать Graph, см. В [примере PHP Connect](https://github.com/microsoftgraph/php-connect-sample).

### Вызов Microsoft Graph

Ниже приведен пример, который показывает, как вызвать Microsoft Graph.

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

## Разработка

### Отладка
Библиотеку можно использовать с прокси-сервером, таким как [Fiddler](http://www.telerik.com/fiddler) или [Чарльз прокси](https://www.charlesproxy.com/) для отладки запросов и ответов в процессе их передачи по сети. Укажите прокси-порт для объекта графа:
```php
$graph->setProxyPort("localhost:8888");
```
затем откройте прокси-клиент, чтобы просмотреть запросы & ответы, отправленные с помощью библиотеки. 

![Снимок экрана: запрос и ответ на Fiddler/me/sendmail ](https://github.com/microsoftgraph/msgraph-sdk-php/blob/master/docs/images/Fiddler.PNG)

Это особенно полезно, когда библиотека не возвращает ожидаемые результаты, чтобы определить, есть ли ошибки в API или этом SDK. Поэтому вас могут попросить предоставить эту информацию при попытке решить проблему, которую вы подаете.

### Выполнение тестов

Запустите
```php
vendor/bin/phpunit --exclude-group functional
``` 
функционал из базового каталога.

*Набор функциональных тестов предназначен для запуска с тестовой учетной записью. В настоящее время в тестах не восстанавливается состояние учетной записи.*


## Документация и ресурсы

* [Документация](https://github.com/microsoftgraph/msgraph-sdk-php/blob/master/docs/index.html)

* [Wiki](https://github.com/microsoftgraph/msgraph-sdk-php/wiki)

* [Примеры](https://github.com/microsoftgraph/msgraph-sdk-php/wiki/Example-calls)

* [Веб-сайт Microsoft Graph](https://developer.microsoft.com/ru-ru/graph/)

## Проблемы

Просмотрите или зарегистрируйте проблемы на вкладке [Проблемы](https://github.com/microsoftgraph/msgraph-sdk-php/issues) в репозитории.

## Участие

Пожалуйста, внимательно прочитайте наше Руководство по [содействию](https://github.com/microsoftgraph/msgraph-sdk-php/blob/master/CONTRIBUTING.md), чтобы узнать, как внести свой вклад в это репо.

## Авторское право и лицензия

© Корпорация Майкрософт. Все права защищены. Предоставляется по [лицензии](LICENSE) MIT.

Этот проект соответствует [Правилам поведения разработчиков открытого кода Майкрософт](https://opensource.microsoft.com/codeofconduct/). Дополнительные сведения см. в разделе [часто задаваемых вопросов о правилах поведения](https://opensource.microsoft.com/codeofconduct/faq/). Если у вас возникли вопросы или замечания, напишите нам по адресу [opencode@microsoft.com](mailto:opencode@microsoft.com).
