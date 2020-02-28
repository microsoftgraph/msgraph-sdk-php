# Introducción al SDK de Microsoft Graph para PHP

[![Estado de la compilación](https://travis-ci.org/microsoftgraph/msgraph-sdk-php.svg?branch=master)](https://travis-ci.org/microsoftgraph/msgraph-sdk-php)
[![Versión estable más reciente](https://poser.pugx.org/microsoft/microsoft-graph/version)](https://packagist.org/packages/microsoft/microsoft-graph)

## Introducción al ejemplo de conexión de PHP
Si quiere practicar con la biblioteca de PHP, puede ponerse en marcha rápidamente con el [Ejemplo de conexión de PHP](https://github.com/microsoftgraph/php-connect-sample). Con este ejemplo, podrá comenzar con un pequeño proyecto Laravel que le ayudará con el registro, la autenticación y la creación de una llamada sencilla al servicio.

## Instalar el SDK
Puede instalar el SDK de PHP con Composer, ya sea ejecutando `composer require microsoft/microsoft-graph` o ejecutando el archivo `composer.json`:
```
{
    "require": {
        "microsoft/microsoft-graph": "^1.5"
    }
}
```
## Introducción a Microsoft Graph

### Registrar la aplicación

Registre su aplicación para usar la API de Microsoft Graph
con uno de los siguientes portales de autenticación compatibles:

* [Portal de registro de aplicaciones de Microsoft](https://apps.dev.microsoft.com) (**Recomendado**):
Registre una nueva aplicación que se autentique con el punto de conexión de autenticación v 2.0. Este punto de conexión autentica tanto cuentas personales (de Microsoft) como profesionales o educativas (de Azure Active Directory).
* [Microsoft Azure Active Directory](https://manage.windowsazure.com):
Registre una nueva aplicación en el inquilino de Active Directory para dar soporte técnico a los usuarios de
cuentas profesionales o educativas de su inquilino, o a varios inquilinos.

### Autenticarse con el servicio de Microsoft Graph

El SDK de Microsoft Graph para PHP no incluye ninguna implementación de autenticación predeterminada. La biblioteca [`thephpleague/oauth2-client`](https://github.com/thephpleague/oauth2-client) controlará el flujo OAuth2 y proporcionará un token que se puede usar para hacer consultas a Graph.

Para autenticar como una aplicación, puede usar el [cliente HTTP de Guzzle](http://docs.guzzlephp.org/en/stable/), que viene preinstalado con esta biblioteca, de la siguiente manera:
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
Para obtener un ejemplo integrado sobre cómo usar Oauth2 en una apicación Laravel y cómo usar Graph, vea el [Ejemplo de conexión de PHP](https://github.com/microsoftgraph/php-connect-sample).

### Llamar a Microsoft Graph

En el siguiente ejemplo se muestra cómo llamar a Microsoft Graph.

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

## Desarrollar

### Depurar
Puede usar la biblioteca con un proxy, como [Fiddler](http://www.telerik.com/fiddler) o [Charles Proxy](https://www.charlesproxy.com/), para depurar las solicitudes y respuestas a medida que se encuentren en la red. Configure el puerto de proxy en el objeto de Graph de esta manera:
```php
$graph->setProxyPort("localhost:8888");
```
 Después, abra el cliente proxy para ver las solicitudes y respuestas enviadas mediante la biblioteca. 

![Captura de pantalla de la solicitud y respuesta de /me/sendmail de Fiddler](https://github.com/microsoftgraph/msgraph-sdk-php/blob/master/docs/images/Fiddler.PNG)

Esto es especialmente útil cuando la biblioteca no devuelve los resultados esperados para determinar si hay errores en la API o en este SDK. Por lo tanto, es posible que se le pida que proporcione esta información cuando intente clasificar un problema del que vaya a informar.

### Ejecutar pruebas

Ejecute 
```php
vendor/bin/phpunit --exclude-group functional
``` 
desde el directorio base.

*El conjunto de pruebas funcionales se ha diseñado para ejecutarlo en una cuenta de prueba. Actualmente, las pruebas no restauran el estado de la cuenta.*


## Documentación y recursos

* [Documentación](https://github.com/microsoftgraph/msgraph-sdk-php/blob/master/docs/index.html)

* [Wiki](https://github.com/microsoftgraph/msgraph-sdk-php/wiki)

* [Ejemplos](https://github.com/microsoftgraph/msgraph-sdk-php/wiki/Example-calls)

* [Sitio web de Microsoft Graph](https://developer.microsoft.com/es-es/graph/)

## Problemas

Puede ver o registrar los problemas en la pestaña [Problemas](https://github.com/microsoftgraph/msgraph-sdk-php/issues) del repositorio.

## Colaborar

Lea detenidamente nuestras directrices de [colaboración](https://github.com/microsoftgraph/msgraph-sdk-php/blob/master/CONTRIBUTING.md) para obtener información sobre cómo contribuir a este repositorio.

## Derechos de autor y licencia

Copyright (c) Microsoft Corporation. Reservados todos los derechos. Publicado bajo la [licencia](LICENSE) MIT.

Este proyecto ha adoptado el [Código de conducta de código abierto de Microsoft](https://opensource.microsoft.com/codeofconduct/). Para obtener más información, vea [Preguntas frecuentes sobre el código de conducta](https://opensource.microsoft.com/codeofconduct/faq/) o póngase en contacto con [opencode@microsoft.com](mailto:opencode@microsoft.com) si tiene otras preguntas o comentarios.
