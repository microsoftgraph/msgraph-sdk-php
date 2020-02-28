# Introdução ao SDK do Microsoft Graph para PHP

[![Status de compilação](https://travis-ci.org/microsoftgraph/msgraph-sdk-php.svg?branch=master)](https://travis-ci.org/microsoftgraph/msgraph-sdk-php)
[![versão estável mais recente](https://poser.pugx.org/microsoft/microsoft-graph/version)](https://packagist.org/packages/microsoft/microsoft-graph)

## Introdução à amostra de conexão do PHP
Se desejar brincar com a biblioteca do PHP, você pode começar a trabalhar rapidamente com a [conexão de exemplo de PHP](https://github.com/microsoftgraph/php-connect-sample). Neste exemplo, você começará com um pequeno projeto Laravel que ajuda você no registro, na autenticação e a fazer uma chamada simples para o serviço.

## Instalar o SDK
Você pode instalar o SDK do PHP com o compositor, executar o `compositor exige o Microsoft/Microsoft-Graph`ou editar seu `composer.json` arquivo:
```
{
    "require": {
        "microsoft/microsoft-graph": "^1.5"
    }
}
```
## Introdução ao Microsoft Graph

### Registre seu aplicativo

Registre seu aplicativo para usar a API do Microsoft Graph usando
um dos seguintes portais de autenticação com suporte:

* [Portal de Registro de Aplicativos da Microsoft](https://apps.dev.microsoft.com) (**Recomendado**):
registre um novo aplicativo que faça a autenticação usando o ponto de extremidade de autenticação v2.0. Esse ponto de extremidade autentica as contas pessoais (Microsoft) e corporativas ou de estudantes (Azure Active Directory).
* [Microsoft Azure Active Directory](https://manage.windowsazure.com):
Registre um novo aplicativo no Active Directory do locatário para oferecer suporte
a usuários corporativos ou de estudantes para os locatários.

### Autentique o serviço do Microsoft Graph

O SDK do Microsoft Graph para PHP não inclui nenhuma implementação de autenticação padrão. O [`thephpleague/oauth2-client`](https://github.com/thephpleague/oauth2-client) biblioteca tratará o fluxo de OAuth2 e fornecerá um token útil para consultar o Graph.

Para autenticar como um aplicativo, você pode usar o [Guzzle HTTP client](http://docs.guzzlephp.org/en/stable/), você pode usar o guzzle de cliente HTTP , que vem pré-instalado nesta biblioteca, por exemplo:
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
Para obter um exemplo integrado sobre como usar o Oauth2 em um aplicativo do Laravel e usar o Grahph, confira o [exemplo conexão do PHP](https://github.com/microsoftgraph/php-connect-sample).

### Chamar o Microsoft Graph

Veja a seguir um exemplo que mostra como chamar o Microsoft Graph.

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

## Desenvolver

### Depurar
Você pode usar a biblioteca com um proxy, como [Fiddler](http://www.telerik.com/fiddler) ou [Charles proxy](https://www.charlesproxy.com/) para depurar solicitações e respostas à medida que elas são transmitidas por meio de um fio. Defina a porta proxy no objeto de Graph assim:
```php
$graph->setProxyPort("localhost:8888");
```
, em seguida, abra o cliente proxy para exibir as solicitações & respostas enviadas usando a biblioteca. 

![Captura de tela da solicitação e resposta do Fiddler/me/sendmail](https://github.com/microsoftgraph/msgraph-sdk-php/blob/master/docs/images/Fiddler.PNG)

Isso é especialmente útil quando a biblioteca não retorna os resultados esperados para determinar se há bugs na API ou neste SDK. Portanto, você pode ser solicitado a fornecer essas informações ao tentar fazer uma triagem de um arquivo.

### Executar testes

Execute
```php
vendor/bin/phpunit --exclude-group functional
``` 
do diretório base.

*O conjunto de testes funcionais destina-se a ser executado em uma conta de teste. Atualmente, os testes para não restaurar o estado da conta.*


## Documentação e recursos

* [Documentação](https://github.com/microsoftgraph/msgraph-sdk-php/blob/master/docs/index.html)

* [Wiki](https://github.com/microsoftgraph/msgraph-sdk-php/wiki)

* [Exemplos](https://github.com/microsoftgraph/msgraph-sdk-php/wiki/Example-calls)

* [Website do Microsoft Graph](https://developer.microsoft.com/pt-br/graph/)

## Problemas

Visualize ou registre problemas na guia [problemas](https://github.com/microsoftgraph/msgraph-sdk-php/issues) no repositório.

## Contribuição

Leia nossa diretrizes[de contribuição](https://github.com/microsoftgraph/msgraph-sdk-php/blob/master/CONTRIBUTING.md) com atenção para obter conselhos sobre como contribuir com esse repositório.

## Direitos autorais e licença

Copyright (c) Microsoft Corporation. Todos os direitos reservados. Licenciada sob a [Licença](LICENSE) do MIT.

Este projeto adotou o [Código de Conduta de Código Aberto da Microsoft](https://opensource.microsoft.com/codeofconduct/).  Para saber mais, confira as [Perguntas frequentes sobre o Código de Conduta](https://opensource.microsoft.com/codeofconduct/faq/) ou entre em contato pelo [opencode@microsoft.com](mailto:opencode@microsoft.com) se tiver outras dúvidas ou comentários.
