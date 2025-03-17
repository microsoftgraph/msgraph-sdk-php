## Get Site By Site ID

```php

$graphServiceClient = new GraphServiceClient($tokenRequestContext);

$siteId = "<your-site-id>";

$graphServiceClient = new GraphServiceClient($tokenRequestContext);

try {
   
    $siteData = $graphServiceClient->sites()->bySiteId($siteId)->get()->wait();
    echo "Site ID: {$siteData->getId()}\n";
    echo "Site Name: {$siteData->getName()}\n"; 
    echo "Site URL: {$siteData->getWebUrl()}\n";
    

} catch (ApiException $ex) {
    echo "Error: " . $ex->getResponseStatusCode() . "\n";
    echo "Error: " .$ex->getError()->getMessage();";
}
```

## Get Site Lists
```php
$siteId = "<your-site-id>";

$graphServiceClient = new GraphServiceClient($tokenRequestContext);

try {
   
    $siteLists = $graphServiceClient->sites()->bySiteId($siteId)->lists()->get()->wait();
    foreach ($siteLists->getValue() as $item) {
        echo "Site ID: {$item->getId()}<br>";
        echo "Site Name: {$item->getName()}<br>";
        echo "Site Additional Data: " . json_encode($item->getAdditionalData()) . "<br>";
        echo "Site URL: {$item->getWebUrl()}<br>";
    }
} catch (ApiException $ex) {
    echo "Error: " . $ex->getResponseStatusCode() . "\n";
    echo "Error: " .$ex->getError()->getMessage();";
```

## Get Site List  List items - by site id and site list id
```php

$graphServiceClient = new GraphServiceClient($tokenRequestContext);

$siteId = "<your-site-id>";
$listId = "<your-list-id>";

$graphServiceClient = new GraphServiceClient($tokenRequestContext);

try {
   
    $siteList = $graphServiceClient->sites()->bySiteId($siteId)->lists()->byListId($listId)->get()->wait();
    echo "Site URL: {$siteList->getWebUrl()}\n";
    echo "Site ID: {$siteList->getId()}\n";
    echo "Site Name: {$siteList->getName()}\n";
} catch (ApiException $ex) {
    echo "Error: " . $ex->getResponseStatusCode() . "\n";
    echo "Error: " .$ex->getError()->getMessage();";
```

## Get site list items
```php
$graphServiceClient = new GraphServiceClient($tokenRequestContext);

$siteId = "<your-site-id>";
$listId = "<your-list-id>";

$graphServiceClient = new GraphServiceClient($tokenRequestContext);

try {
   
    $siteListItems = $graphServiceClient->sites()->bySiteId($siteId)->lists()->byListId($listId)->items()->get()->wait();
    foreach ($siteListItems->getValue() as $item) {
        echo "Site ID: {$item->getId()}\n";
        echo "Site Name: {$item->getName()}\n";
        echo "Site Additional Data: " . json_encode($item->getAdditionalData()) . "\n";
        echo "Site URL: {$item->getWebUrl()}\n";
    }

} catch (ApiException $ex) {
    echo "Error: " . $ex->getResponseStatusCode() . "\n";
    echo "Error: " .$ex->getError()->getMessage();";
}
```