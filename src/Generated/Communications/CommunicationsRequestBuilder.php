<?php

namespace Microsoft\Graph\Communications;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Communications\CallRecords\CallRecordsRequestBuilder;
use Microsoft\Graph\Communications\CallRecords\Item\CallRecordItemRequestBuilder;
use Microsoft\Graph\Communications\Calls\CallsRequestBuilder;
use Microsoft\Graph\Communications\Calls\Item\CallItemRequestBuilder;
use Microsoft\Graph\Communications\GetPresencesByUserId\GetPresencesByUserIdRequestBuilder;
use Microsoft\Graph\Communications\OnlineMeetings\Item\OnlineMeetingItemRequestBuilder;
use Microsoft\Graph\Communications\OnlineMeetings\OnlineMeetingsRequestBuilder;
use Microsoft\Graph\Communications\Presences\Item\PresenceItemRequestBuilder;
use Microsoft\Graph\Communications\Presences\PresencesRequestBuilder;
use Microsoft\Graph\Models\CloudCommunications;
use Microsoft\Graph\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class CommunicationsRequestBuilder 
{
    /**
     * The callRecords property
    */
    public function callRecords(): CallRecordsRequestBuilder {
        return new CallRecordsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The calls property
    */
    public function calls(): CallsRequestBuilder {
        return new CallsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getPresencesByUserId property
    */
    public function getPresencesByUserId(): GetPresencesByUserIdRequestBuilder {
        return new GetPresencesByUserIdRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The onlineMeetings property
    */
    public function onlineMeetings(): OnlineMeetingsRequestBuilder {
        return new OnlineMeetingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The presences property
    */
    public function presences(): PresencesRequestBuilder {
        return new PresencesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph.communications.callRecords.item collection
     * @param string $id Unique identifier of the item
     * @return CallRecordItemRequestBuilder
    */
    public function callRecordsById(string $id): CallRecordItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['callRecord%2Did'] = $id;
        return new CallRecordItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.communications.calls.item collection
     * @param string $id Unique identifier of the item
     * @return CallItemRequestBuilder
    */
    public function callsById(string $id): CallItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['call%2Did'] = $id;
        return new CallItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CommunicationsRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/communications{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get communications
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?CommunicationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update communications
     * @param CloudCommunications $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(CloudCommunications $body, ?CommunicationsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Get communications
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?CommunicationsRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(CloudCommunications::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph.communications.onlineMeetings.item collection
     * @param string $id Unique identifier of the item
     * @return OnlineMeetingItemRequestBuilder
    */
    public function onlineMeetingsById(string $id): OnlineMeetingItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['onlineMeeting%2Did'] = $id;
        return new OnlineMeetingItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update communications
     * @param CloudCommunications $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(CloudCommunications $body, ?CommunicationsRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph.communications.presences.item collection
     * @param string $id Unique identifier of the item
     * @return PresenceItemRequestBuilder
    */
    public function presencesById(string $id): PresenceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['presence%2Did'] = $id;
        return new PresenceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
