## 1. LIST ALL GROUPS IN THE TENANT (GET /groups)

```php
$graphServiceClient = new GraphServiceClient($tokenRequestContext);

try {
    $groups = $graphServiceClient->groups()->get()->wait();
    if ($groups && $groups->getValue()) {
        foreach ($groups->getValue() as $group) {
            echo "Group ID: {$group->getId()}<br>";
            echo "Group Display Name: {$group->getDisplayName()}<br><br>";
        }
    }
} catch (ApiException $ex) {
    echo "Error: " . $ex->getResponseStatusCode() . "\n";
    echo "Error: " .$ex->getError()->getMessage();";
}
```

## 2. GET A SPECIFIC GROUP (GET /groups/{id})


```php

$graphServiceClient = new GraphServiceClient($tokenRequestContext);

$groupId = "<Group-ID>"; 

try {
    $group = $graphServiceClient->groups()->byGroupId($groupId)->get()->wait();
    if ($group) {
        echo "Group ID: {$group->getId()}<br>";
        echo "Group Display Name: {$group->getDisplayName()}<br>";
        echo "Group Description: {$group->getDescription()}<br>";
        echo "Group Types: " . json_encode($group->getGroupTypes()) . "<br>";
        echo "Security Enabled: " . ($group->getSecurityEnabled() ? 'true' : 'false') . "<br>";
    }
} catch (ApiException $ex) {
   echo "Error: " . $ex->getResponseStatusCode() . "\n";
    echo "Error: " . $ex->getError()->getMessage();";
}
```

## 3. LIST ALL MEMBERS IN A GROUP (GET /groups/{id}/members)

```php
$graphServiceClient = new GraphServiceClient($tokenRequestContext);

$groupId = "<GROUP-ID>"; 

try {
    $members = $graphServiceClient->groups()->byGroupId($groupId)->members()->get()->wait();
    if ($members && $members->getValue()) {
        foreach ($members->getValue() as $member) {
            $user = $graphServiceClient->users()->byUserId($member->getId())->get()->wait();
            if ($user) {
                echo "User Display Name: {$user->getDisplayName()}<br>";
                echo "User Mail: {$user->getMail()}<br><br>";
            }
        }
    }
} catch (ApiException $ex) {
    echo "Error: " . $ex->getResponseStatusCode() . "\n";
    echo "Error: " .$ex->getError()->getMessage();";
}
```

## 4. LIST A GROUP TEAM SHAREPOINT SITES (GET /groups/{id}/sites)
```php
$graphServiceClient = new GraphServiceClient($tokenRequestContext);

$groupId = "<GROUP-ID>c";

try {
    $sites = $graphServiceClient->groups()->byGroupId($groupId)->sites()->get()->wait();
    if ($sites && $sites->getValue()) {
        foreach ($sites->getValue() as $site) {
            echo "Site ID: {$site->getId()}<br>";
            echo "Site Web URL: {$site->getWebUrl()}<br><br>";
        }
    }
} catch (ApiException $ex) {
    echo "Error: " . $ex->getResponseStatusCode() . "\n";
    echo "Error: " .$ex->getError()->getMessage();";
}
```


## 5. LIST A GROUP'S TRANSITIVE MEMBERS (GET /groups/{id}/transitiveMembers)

```php
$graphServiceClient = new GraphServiceClient($tokenRequestContext);

$groupId = "<GROUP-ID>";
try {
    $members = $graphServiceClient->groups()->byGroupId($groupId)->transitiveMembers()->get()->wait();
    if ($members && $members->getValue()) {
        foreach ($members->getValue() as $member) {
            $obj = $graphServiceClient->directoryObjects()->byDirectoryObjectId($member->getId())->get()->wait();
            if ($obj && $obj->getOdataType() === '#microsoft.graph.user') {
                $user = $graphServiceClient->users()->byUserId($obj->getId())->get()->wait();
                if ($user) {
                    echo "User ID: {$user->getId()}<br>";
                    echo "User Display Name: {$user->getDisplayName()}<br>";
                    echo "User Mail: {$user->getMail()}<br><br>";
                }
            }
        }
    }
} catch (ApiException $ex) {
    echo "Error: " . $ex->getResponseStatusCode() . "\n";
    echo "Error: " .$ex->getError()->getMessage();";
}
```

## 6. LIST ALL GROUP DRIVES (GET /groups/{id}/drives)

```php

$graphServiceClient = new GraphServiceClient($tokenRequestContext);

$groupId = "<GROUP-ID>";

try {
    $drives = $graphServiceClient->groups()->byGroupId($groupId)->drives()->get()->wait();
    if ($drives && $drives->getValue()) {
        foreach ($drives->getValue() as $drive) {
            echo "Drive ID: {$drive->getId()}<br>";
            echo "Drive Name: {$drive->getName()}<br><br>";
        }
    }
} catch (ApiException $ex) {
    echo "Error: " . $ex->getResponseStatusCode() . "\n";
    echo "Error: " .$ex->getError()->getMessage();";
}
```

## 7. GET A GROUP DRIVE (GET /groups/{id}/drives/{id})
```php
$graphServiceClient = new GraphServiceClient($tokenRequestContext);

$groupId = "<GROUP-ID>"; 
$driveId = "<DRIVE-ID>"; 

try {
    $drive = $graphServiceClient->groups()->byGroupId($groupId)->drives()->byDriveId($driveId)->get()->wait();
    if ($drive) {
        echo "Drive ID: {$drive->getId()}<br>";
        echo "Drive Type: {$drive->getDriveType()}<br>";
        echo "Drive Name: {$drive->getName()}<br>";
        echo "Drive Web URL: {$drive->getWebUrl()}<br>";
        echo "Drive Items: " . json_encode($drive->getItems()) . "<br><br>";
    }
} catch (ApiException $ex) {
    echo $ex->getError()->getMessage();
}
```