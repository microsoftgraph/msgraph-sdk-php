# FAQ

### What resources are available through the Microsoft Graph API?
The [MS Graph documentation](https://developer.microsoft.com/en-us/graph/docs) contains a Table of Contents listing all the available resources in both v1 and beta branches

### My access token is invalid
Read over the [guide to app authentication](https://developer.microsoft.com/en-us/graph/docs/concepts/auth_overview) with Graph. Azure has also published [several articles](https://docs.microsoft.com/en-us/azure/active-directory/active-directory-whatis) on authenticating using several different application types and endpoints.

### My access token is valid, but I receive an error that I do not have sufficient privileges to access a resource
When you authenticate against Graph, you will have to specify which scopes you want. Some of these scopes require admin consent. Consult the [Permission scopes](https://developer.microsoft.com/en-us/graph/docs/concepts/permissions_reference) documentation as well as the prerequisite scope of the resource you are trying to access. For example,

```One of the following scopes is required to execute this API: Calendars.ReadWrite```


### I cannot add query parameters to my request
Make sure that you either use single quotes around your endpoint or escape your "$"
```php
$graph->createCollectionRequest("GET", "/me/messages?\$filter=from/emailAddress/address eq 'email@dot.com'");
```
or
```php
$graph->createCollectionRequest("GET", '/me/messages?$select=subject');
```

### I'm having issues with ____. Is this a known issue?
Check the [Known issues](https://developer.microsoft.com/en-us/graph/docs/concepts/known_issues) page first if you are getting request errors. If you are still looking for troubleshooting, try asking your question on [StackOverflow](https://stackoverflow.com/questions/tagged/microsoftgraph?sort=newest)
