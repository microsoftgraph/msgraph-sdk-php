# Usage Examples

## Set custom request data

```php
  $graph = new Graph();
  $graph->setBaseUrl("https://graph.microsoft.com/")
          ->setApiVersion("beta")
          ->setAccessToken($_SESSION['access_token']);

  $user = $graph->createRequest("get", "/me")
			    ->addHeaders(array("Content-Type" => "application/json"))
			    ->setReturnType(Model\User::class)
			    ->setTimeout("1000")
			    ->execute();

```

## Get a collection of items
Some queries against Microsoft Graph return multiple pages of data either due to server-side paging or due to the use of the $top query parameter to specifically limit the page size in a request. When a result set spans multiple pages, Microsoft Graph returns an @odata.nextLink property in the response that contains a URL to the next page of results.

In the PHP SDK, we expose this with a custom Request method called `createCollectionRequest` which works similarly to `createRequest`:


```php
$docGrabber = $graph->createCollectionRequest("GET", "/me/drive/root/children")
			        ->setReturnType(Model\DriveItem::class)
			        ->setPageSize(2);
$docs = $docGrabber->getPage();

foreach ($docs as $doc){
	$docArray[] = $doc->getName();
}

```

This eliminates the need to work with the @odata.nextLink directly.

If you would like to merge the full results into a collection, you can use $isEnd to iterate through all the results:

```php
while (!$docGrabber->isEnd()) {
  $docs = array_merge($docs,$docGrabber->getPage());
}
```

## Send an email

```php
$mailBody = array( "Message" => array(
                   "subject" => "Test Email",
                   "body" => array(
                       "contentType" => "html",
                       "content" => DUMMY_EMAIL
                   ),
                 "sender" => array(
                     "emailAddress" => array(
                         "name" => $name,
                         "address" => $email
                     )
                 ),
                 "from" => array(
                     "emailAddress" => array(
                             "name" => $name,
                             "address" => $email
                     )
                 ),
                 "toRecipients" => array(
                     array(
                       "emailAddress" => array(
                           "name" => $name,
                           "address" => $email

                  	)
                 )
              )
          )
   );

$graph->createRequest("POST", "/me/sendMail")
	  ->attachBody($mailBody)
	  ->execute();

```

## Create an event

```php
$data = [
    'Subject' => 'Discuss the Calendar REST API',
    'Body' => [
        'ContentType' => 'HTML',
        'Content' => 'I think it will meet our requirements!',
    ],
    'Start' => [
        'DateTime' => '2017-04-03T10:00:00',
        'TimeZone' => 'Pacific Standard Time',
    ],
    'End' => [
        'DateTime' => '2017-04-03T11:00:00',
        'TimeZone' => 'Pacific Standard Time',
    ],
];
$baseId = 'base-ID';
$calendarId = $baseId . 'calendar-ID';
$url = "/me/calendars/$calendarId/events";
$response = $graph->createRequest("POST", $url)
                    ->attachBody($data)
                    ->setReturnType(Event::class)
                    ->execute();
```

## Download an item

```php
$graph->createRequest("GET", "/me/drive/items/{id}/content")
	  ->download('C:/dump.docx');

```


## Upload an item

```php
$graph->createRequest("PUT", "/me/drive/root/children/copydoc.docx/content")
	  ->upload('C:/copydoc.docx');

```
