## 1. GET ALL USERS IN A TENANT (GET /users)

```php
$graphServiceClient = new GraphServiceClient($tokenRequestContext);

try {
    $users = $graphServiceClient->users()->get()->wait();
    if ($users && $users->getValue()) {
        foreach ($users->getValue() as $user) {
            echo "User ID: {$user->getId()}<br>";
            echo "User Display Name: {$user->getDisplayName()}<br>";
            echo "User Mail: {$user->getMail()}<br><br>";
        }
    }
} catch (ApiException $ex) {
    echo "Error: " . $ex->getResponseStatusCode() . "\n";
    echo "Error: " .$ex->getError()->getMessage();";
}
```

## 2. GET A SPECIFIC USER (GET /users/{id | userPrincipalName})

```php
$graphServiceClient = new GraphServiceClient($tokenRequestContext);

$userId = "<USER-ID>"; 

try {
    $user = $graphServiceClient->users()->byUserId($userId)->get()->wait();
    if ($user) {
        echo "User Principal Name: {$user->getUserPrincipalName()}<br>";
        echo "User Display Name: {$user->getDisplayName()}<br>";
        echo "User ID: {$user->getId()}<br>";
    }
} catch (ApiException $ex) {
    echo "Error: " . $ex->getResponseStatusCode() . "\n";
    echo "Error: " .$ex->getError()->getMessage();";
}
```

## 3. SEARCH USER BY NAME (GET /users/$search?=)


```php
$graphServiceClient = new GraphServiceClient($tokenRequestContext);

$userId = "<USER-ID>"; 

try {
    $memberships = $graphServiceClient->users()->byUserId($userId)->transitiveMemberOf()->get()->wait();
    if ($memberships && $memberships->getValue()) {
        foreach ($memberships->getValue() as $membership) {
            $obj = $graphServiceClient->directoryObjects()->byDirectoryObjectId($membership->getId())->get()->wait();
            if ($obj && $obj->getOdataType() === '#microsoft.graph.group') {
                $group = $graphServiceClient->groups()->byGroupId($obj->getId())->get()->wait();
                if ($group) {
                    echo "Group ID: {$group->getId()}<br>";
                    echo "Group Types: " . json_encode($group->getGroupTypes()) . "<br>";
                    echo "Group Display Name: {$group->getDisplayName()}<br>";
                    echo "Group Mail: {$group->getMail()}<br><br>";
                }
            }
        }
    }
} catch (ApiException $ex) {
    echo "Error: " . $ex->getResponseStatusCode() . "\n";
    echo "Error: " .$ex->getError()->getMessage();";
}
```
