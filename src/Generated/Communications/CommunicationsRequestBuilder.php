<?php

namespace Microsoft\Graph\Generated\Communications;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Communications\CallRecords\CallRecordsRequestBuilder;
use Microsoft\Graph\Generated\Communications\CallRecords\Item\CallRecordItemRequestBuilder;
use Microsoft\Graph\Generated\Communications\Calls\CallsRequestBuilder;
use Microsoft\Graph\Generated\Communications\Calls\Item\CallItemRequestBuilder;
use Microsoft\Graph\Generated\Communications\GetPresencesByUserId\GetPresencesByUserIdRequestBuilder;
use Microsoft\Graph\Generated\Communications\OnlineMeetings\Item\OnlineMeetingItemRequestBuilder;
use Microsoft\Graph\Generated\Communications\OnlineMeetings\OnlineMeetingsRequestBuilder;
use Microsoft\Graph\Generated\Communications\Presences\Item\PresenceItemRequestBuilder;
use Microsoft\Graph\Generated\Communications\Presences\PresencesRequestBuilder;
use Microsoft\Graph\Generated\Models\CloudCommunications;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the cloudCommunications singleton.
*/
class CommunicationsRequestBuilder 
{
    /**
     * Provides operations to manage the callRecords property of the microsoft.graph.cloudCommunications entity.
    */
    public function callRecords(): CallRecordsRequestBuilder {
        return new CallRecordsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the calls property of the microsoft.graph.cloudCommunications entity.
    */
    public function calls(): CallsRequestBuilder {
        return new CallsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getPresencesByUserId method.
    */
    public function getPresencesByUserId(): GetPresencesByUserIdRequestBuilder {
        return new GetPresencesByUserIdRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the onlineMeetings property of the microsoft.graph.cloudCommunications entity.
    */
    public function onlineMeetings(): OnlineMeetingsRequestBuilder {
        return new OnlineMeetingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * Provides operations to manage the presences property of the microsoft.graph.cloudCommunications entity.
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
     * Provides operations to manage the callRecords property of the microsoft.graph.cloudCommunications entity.
     * @param string $id Unique identifier of the item
     * @return CallRecordItemRequestBuilder
    */
    public function callRecordsById(string $id): CallRecordItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['callRecord%2Did'] = $id;
        return new CallRecordItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the calls property of the microsoft.graph.cloudCommunications entity.
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
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/communications{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get communications
     * @param CommunicationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?CommunicationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [CloudCommunications::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the onlineMeetings property of the microsoft.graph.cloudCommunications entity.
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
     * @param CloudCommunications $body The request body
     * @param CommunicationsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(CloudCommunications $body, ?CommunicationsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [CloudCommunications::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the presences property of the microsoft.graph.cloudCommunications entity.
     * @param string $id Unique identifier of the item
     * @return PresenceItemRequestBuilder
    */
    public function presencesById(string $id): PresenceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['presence%2Did'] = $id;
        return new PresenceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get communications
     * @param CommunicationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CommunicationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
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
     * @param CloudCommunications $body The request body
     * @param CommunicationsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(CloudCommunications $body, ?CommunicationsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
