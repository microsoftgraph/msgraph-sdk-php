
## 1. LIST ALL DRIVES (GET /drives)

```php
$graphServiceClient = new GraphServiceClient($tokenRequestContext);

try {
    $drives = $graphServiceClient->drives()->get()->wait();
    if ($drives && $drives->getValue()) {
        foreach ($drives->getValue() as $drive) {
            echo "Drive ID: {$drive->getId()}<br>";
            echo "Drive Type: {$drive->getDriveType()}<br>";
            echo "Drive Name: {$drive->getName()}<br>";
            echo "Drive Description: {$drive->getDescription()}<br>";
            echo "Drive Web URL: {$drive->getWebUrl()}<br><br>";
        }
    }
} catch (ApiException $ex) {
    echo "Error: " . $ex->getResponseStatusCode() . "\n";
    echo "Error: " .$ex->getError()->getMessage();";
}
```

## 2. GET DRIVE BY ID (GET /drives/{id})

```php
$driveId = "DRIVE-ID"; 

try {
    $drive = $graphServiceClient->drives()->byDriveId($driveId)->get()->wait();
    if ($drive) {
        echo "Drive ID: {$drive->getId()}<br>";
        echo "Drive Type: {$drive->getDriveType()}<br>";
        echo "Drive Name: {$drive->getName()}<br>";
        echo "Drive Description: {$drive->getDescription()}<br>";
        echo "Drive Web URL: {$drive->getWebUrl()}<br>";
    }
} catch (ApiException $ex) {
    echo "Error: " . $ex->getResponseStatusCode() . "\n";
    echo "Error: " .$ex->getError()->getMessage();";
}
```

## 3. LIST ALL THE ITEMS IN A DRIVE (GET /drives/{id}/items)
```php
$graphServiceClient = new GraphServiceClient($tokenRequestContext);

$driveId = "DRIVE-ID"; 

try {
    $requestConfig = new ItemsRequestBuilderGetRequestConfiguration();
    $requestConfig->queryParameters = ItemsRequestBuilderGetRequestConfiguration::createQueryParameters();
    $requestConfig->queryParameters->filter = "startswith(name, 'B')"; 

    $items = $graphServiceClient->drives()->byDriveId($driveId)->items()->get($requestConfig)->wait();
    if ($items && $items->getValue()) {
        foreach ($items->getValue() as $item) {
            echo "Item ID: {$item->getId()}<br>";
            echo "Item Name: {$item->getName()}<br>";
            echo "Item Size: {$item->getSize()}<br>";
            echo "Item Folder: " . json_encode($item->getFolder()) . "<br>";
            echo "Item File: " . json_encode($item->getFile()) . "<br><br>";
        }
    }
} catch (ApiException $ex) {
   echo "Error: " . $ex->getResponseStatusCode() . "\n";
    echo "Error: " .$ex->getError()->getMessage();";
}
```

##  4. GET AN ITEM IN THE DRIVE (GET /drives/{id}/items/{id})

```php
$graphServiceClient = new GraphServiceClient($tokenRequestContext);

$driveId = "DRIVE-ID"; 

try {
    $items = $graphServiceClient->drives()->byDriveId($driveId)->items()->get()->wait();
    if ($items && $items->getValue()) {
        foreach ($items->getValue() as $item) {
            echo "Item ID: {$item->getId()}<br>";
            echo "Item Name: {$item->getName()}<br>";
            echo "Item Size: {$item->getSize()}<br>";
            echo "Item Folder: " . json_encode($item->getFolder()) . "<br>";
            echo "Item File: " . json_encode($item->getFile()) . "<br><br>";
        }
    }
} catch (ApiException $ex) {
    echo "Error: " . $ex->getResponseStatusCode() . "\n";
    echo "Error: " .$ex->getError()->getMessage();";
}
```

## 5. GET THE ROOT FOLDER OF THE DRIVE (GET /drives/{id}/root)
```php
$graphServiceClient = new GraphServiceClient($tokenRequestContext);

$driveId = "DRIVE-ID"; // Replace with the actual drive ID

try {
    $root = $graphServiceClient->drives()->byDriveId($driveId)->root()->get()->wait();
    if ($root) {
        echo "Root ID: {$root->getId()}<br>";
        echo "Root Name: {$root->getName()}<br>";
        echo "Folder Child Count: " . ($root->getFolder() ? $root->getFolder()->getChildCount() : 'N/A') . "<br>";
        echo "Root: " . json_encode($root->getRoot()) . "<br>";
        echo "Root Size: {$root->getSize()}<br>";
    }
} catch (ApiException $ex) {
    echo "Error: " . $ex->getResponseStatusCode() . "\n";
    echo "Error: " .$ex->getError()->getMessage();";
}
```

## 6. GET ITEMS IN THE ROOT FOLDER OF THE DRIVE (GET drives/{id}/items/root/children)
```php
$graphServiceClient = new GraphServiceClient($tokenRequestContext);

$driveId = "DRIVE-ID";

try {
    $items = $graphServiceClient->drives()->byDriveId($driveId)->items()->byDriveItemId('root')->children()->get()->wait();
    if ($items && $items->getValue()) {
        foreach ($items->getValue() as $item) {
            echo "Item ID: {$item->getId()}<br>";
            echo "Item Name: {$item->getName()}<br>";
            echo "Item Size: {$item->getSize()}<br>";
            echo "Item Folder: " . json_encode($item->getFolder()) . "<br>";
            echo "Item File: " . json_encode($item->getFile()) . "<br><br>";
        }
    }
} catch (ApiException $ex) {
    echo "Error: " . $ex->getResponseStatusCode() . "\n";
    echo "Error: " .$ex->getError()->getMessage();";
}
```