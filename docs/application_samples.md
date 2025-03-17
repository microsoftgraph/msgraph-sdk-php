## List all applications in a tenant

```php



// Create a new GraphServiceClient instance
$graphServiceClient = new GraphServiceClient($tokenRequestContext);

try {
    $applications = $graphServiceClient->applications()->get()->wait();
    if ($applications && $applications->getValue()) {
        foreach ($applications->getValue() as $app) {
            echo "Application ID: {$app->getId()}<br>";
        }
    }
} catch (ApiException $ex) {
    echo "Error: " . $ex->getResponseStatusCode() . "\n";
    echo "Error: " .$ex->getError()->getMessage();";
}
```