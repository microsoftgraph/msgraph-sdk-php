<?php

namespace Microsoft\Graph\Generated\Teamwork\SendActivityNotificationToRecipients;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the sendActivityNotificationToRecipients method.
*/
class SendActivityNotificationToRecipientsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SendActivityNotificationToRecipientsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/teamwork/sendActivityNotificationToRecipients');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Send activity feed notifications to multiple users, in bulk.  For more details about sending notifications and the requirements for doing so, seesending Teams activity notifications.
     * @param SendActivityNotificationToRecipientsPostRequestBody $body The request body
     * @param SendActivityNotificationToRecipientsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/teamwork-sendactivitynotificationtorecipients?view=graph-rest-1.0 Find more info here
    */
    public function post(SendActivityNotificationToRecipientsPostRequestBody $body, ?SendActivityNotificationToRecipientsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Send activity feed notifications to multiple users, in bulk.  For more details about sending notifications and the requirements for doing so, seesending Teams activity notifications.
     * @param SendActivityNotificationToRecipientsPostRequestBody $body The request body
     * @param SendActivityNotificationToRecipientsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SendActivityNotificationToRecipientsPostRequestBody $body, ?SendActivityNotificationToRecipientsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
