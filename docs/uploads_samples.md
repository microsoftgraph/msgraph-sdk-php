
## Upload an item

For files less than 3MB, you can send a byte stream to the API with the sample below. See the next section for files larger than 3MB.

```php

$driveItemId = 'root:/upload.txt:';

$inputStream = Utils::streamFor(fopen('upload.txt', 'r'));
$uploadItem = $graphServiceClient->drives()->byDriveId('[driveId]')->items()->byDriveItemId($driveItemId)->content()->put($inputStream)->wait();

```


## Uploading large files

To upload files larger than 3MB, the Microsoft Graph API supports uploads using resumable upload sessions where a number of bytes are uploaded at a time.

The SDK provides a `LargeFileUpload` task that slices your file into bytes and progressively uploads them until completion.

To add a large attachment to an Outlook message:

```php
use Psr\Http\Client\NetworkExceptionInterface;


// create a file stream
$file = Utils::streamFor(fopen('fileName', 'r'));

// create an upload session
$attachmentItem = new AttachmentItem();
$attachmentItem->setAttachmentType(new AttachmentType('file'));
$attachmentItem->setName('fileName');
$attachmentItem->setSize($file->getSize());

$uploadSessionRequestBody = new CreateUploadSessionPostRequestBody();
$uploadSessionRequestBody->setAttachmentItem($attachmentItem);

$uploadSession = $graphServiceClient->users()->byUserId(USER_ID)->messages()->byMessageId('[id]')->attachments()->createUploadSession()->post($uploadSessionRequestBody)->wait();

// upload
$largeFileUpload = new LargeFileUploadTask($uploadSession, $graphServiceClient->getRequestAdapter(), $file);
try {
    $uploadSession = $largeFileUpload->upload()->wait();
} catch (NetworkExceptionInterface $ex) {
    // resume upload in case of network errors
    $retries = 0;
    $maxRetries = 3;
    while ($retries < $maxRetries) {
        try {
            $uploadSession = $largeFileUpload->resume()->wait();
            if ($uploadSession) {
                break;
            }
        } catch (NetworkExceptionInterface $ex) {
            $retries ++;
        }
    }
    throw $ex;
}

```

You can also cancel a large file upload session:

```php
$largeFileUpload->cancel()->wait();
```

*Known Issue*
At the moment, when attaching large files to Outlook Messages and Events, we don't expose the `Location` header value. For now, you'd need to fetch the message's attachments/events.
