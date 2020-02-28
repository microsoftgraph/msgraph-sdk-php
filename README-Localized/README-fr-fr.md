# Prise en main du Kit de développement logiciel (SDK) Microsoft Graph pour PHP

[![État de la build](https://travis-ci.org/microsoftgraph/msgraph-sdk-php.svg?branch=master)](https://travis-ci.org/microsoftgraph/msgraph-sdk-php)
[![Dernière version stable](https://poser.pugx.org/microsoft/microsoft-graph/version)](https://packagist.org/packages/microsoft/microsoft-graph)

## Prise en main de l’exemple de connexion PHP
Si vous voulez vous familiariser avec la bibliothèque PHP, vous pouvez être rapidement opérationnel à l’aide de l’[exemple de PHP Connect.](https://github.com/microsoftgraph/php-connect-sample) Cet exemple vous permet de commencer avec un projet Laravel qui vous aide à effectuer des opérations d’inscription, d’authentification et d’appel simple au service.

## Installer le kit de développement logiciel (SDK)
Vous pouvez installer le kit de développement logiciel (SDK) PHP avec Composer, soit exécuter `composer require microsoft/microsoft-graph`, ou modifier votre fichiercomposer.json :
```
{
    "require": {
        "microsoft/microsoft-graph": "^1.5"
    }
}
```
## Prise en main de Microsoft Graph

### Inscription de votre application

Enregistrez votre application à l’aide de l’un des portails d’authentification pris en charge
suivants pour utiliser l'API Microsoft Graph :

* [Portail d’inscription des applications de Microsoft](https://apps.dev.microsoft.com) (**Recommandé**) :
Inscrivez une nouvelle application, vous permettant d'être authentifié(e), à l’aide du point de terminaison d’authentification v2.0. Ce point de terminaison authentifie les comptes personnels (Microsoft) ainsi que les comptes professionnels ou scolaires (Azure Active Directory).
* [Microsoft Azure Active Directory](https://manage.windowsazure.com) :
Enregistrez une nouvelle application dans l’annuaire Active Directory de votre client pour prendre en charge les utilisateurs professionnels ou
scolaires de votre client ou de plusieurs clients.

### S'authentifier avec le service de Microsoft Graph

Le kit de développement logiciel (SDK) Microsoft Graph pour PHP n’inclut aucune implémentation d’authentification par défaut. La bibliothèque [`thephpleague/oauth2-client`](https://github.com/thephpleague/oauth2-client) gère le flux Oauth2 pour vous et fournit un jeton utilisable pour l’interrogation de Graph.

Pour vous authentifier en tant qu’application, vous pouvez utiliser le client [Guzzle HTTP](http://docs.guzzlephp.org/en/stable/), lequel est préinstallé avec cette bibliothèque (par exemple, comme ceci :
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
Pour un exemple intégré sur l’utilisation de Oauth2 dans une application Laravel et l’utilisation de Graph, voir l’exemple de [connexion PHP](https://github.com/microsoftgraph/php-connect-sample).

### Appeler Microsoft Graph

Voici un exemple qui montre comment appeler Microsoft Graph.

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

## Développer

### Débogage
Vous pouvez utiliser la bibliothèque avec un proxy tel que [Fiddler](http://www.telerik.com/fiddler) ou [Charles proxy](https://www.charlesproxy.com/) pour déboguer les demandes et les réponses au fur et à mesure qu’elles transitent via le réseau. Configurez le port proxy sur l’objet Graph comme ceci :
```php
$graph->setProxyPort("localhost:8888");
```
Ensuite, ouvrez votre client proxy pour afficher les demandes & réponses envoyées à l’aide de la bibliothèque. 

![Capture d’écran de la demande et de la réponse de Fiddler/me/sendmail](https://github.com/microsoftgraph/msgraph-sdk-php/blob/master/docs/images/Fiddler.PNG)

Ceci est particulièrement utile lorsque la bibliothèque ne renvoie pas les résultats attendus pour déterminer s’il existe des bogues dans l’API ou le présent Kit de développement. Par conséquent, vous pouvez être invité à fournir ces informations lorsque vous essayez de trier un problème que vous reportez.

### Exécuter les tests

Exécutez
```php
vendor/bin/phpunit --exclude-group functional
``` 

*L’ensembles de tests fonctionnels doit être exécuté sur un compte de test. Pour l’instant, les tests ne permettent pas de restaurer l’état du compte.*


## Documentation et ressources

* [Documentation](https://github.com/microsoftgraph/msgraph-sdk-php/blob/master/docs/index.html)

* [Wiki](https://github.com/microsoftgraph/msgraph-sdk-php/wiki)

* [Exemples](https://github.com/microsoftgraph/msgraph-sdk-php/wiki/Example-calls)

* [Site web Microsoft Graph](https://developer.microsoft.com/fr-fr/graph/)

## Problèmes

Afficher ou enregistrer les problèmes dans l’onglet [Problèmes](https://github.com/microsoftgraph/msgraph-sdk-php/issues) dans le repo.

## Contribuer

Nous vous invitons à lire nos [Instructions](https://github.com/microsoftgraph/msgraph-sdk-php/blob/master/CONTRIBUTING.md) pour obtenir des conseils sur la manière de collaborer à ce repo.

## Copyright et licence

Copyright (c) Microsoft Corporation. Tous droits réservés. Sous [licence MIT](LICENSE).

Ce projet a adopté le [Code de conduite Open Source de Microsoft](https://opensource.microsoft.com/codeofconduct/). Pour en savoir plus, reportez-vous à la [FAQ relative au code de conduite](https://opensource.microsoft.com/codeofconduct/faq/) ou contactez [opencode@microsoft.com](mailto:opencode@microsoft.com) pour toute question ou tout commentaire.
