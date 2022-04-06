<?php

namespace Microsoft\Graph\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\CalendarSharingMessage;

use Microsoft\Graph\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\CalendarSharingMessage\Accept\AcceptRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

class CalendarSharingMessageRequestBuilder 
{
    /**
     * The accept property
    */
    public function accept(): AcceptRequestBuilder {
        return new AcceptRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /** @var array<string, mixed> $pathParameters Path parameters for the request */
    private array $pathParameters;
    
    /** @var RequestAdapter $requestAdapter The request adapter to use to execute the requests. */
    private RequestAdapter $requestAdapter;
    
    /** @var string $urlTemplate Url template to use to build the URL for the current request builder */
    private string $urlTemplate;
    
    /**
     * Instantiates a new CalendarSharingMessageRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/me/mailFolders/{mailFolder_id}/childFolders/{mailFolder_id1}/messages/{message_id}/microsoft.graph.calendarSharingMessage';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

}
