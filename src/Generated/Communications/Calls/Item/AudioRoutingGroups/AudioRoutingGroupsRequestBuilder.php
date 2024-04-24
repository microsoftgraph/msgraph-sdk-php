<?php

namespace Microsoft\Graph\Generated\Communications\Calls\Item\AudioRoutingGroups;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Communications\Calls\Item\AudioRoutingGroups\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Communications\Calls\Item\AudioRoutingGroups\Item\AudioRoutingGroupItemRequestBuilder;
use Microsoft\Graph\Generated\Models\AudioRoutingGroup;
use Microsoft\Graph\Generated\Models\AudioRoutingGroupCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the audioRoutingGroups property of the microsoft.graph.call entity.
*/
class AudioRoutingGroupsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the audioRoutingGroups property of the microsoft.graph.call entity.
     * @param string $audioRoutingGroupId The unique identifier of audioRoutingGroup
     * @return AudioRoutingGroupItemRequestBuilder
    */
    public function byAudioRoutingGroupId(string $audioRoutingGroupId): AudioRoutingGroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['audioRoutingGroup%2Did'] = $audioRoutingGroupId;
        return new AudioRoutingGroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AudioRoutingGroupsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/communications/calls/{call%2Did}/audioRoutingGroups{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get audioRoutingGroups from communications
     * @param AudioRoutingGroupsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AudioRoutingGroupCollectionResponse|null>
     * @throws Exception
    */
    public function get(?AudioRoutingGroupsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AudioRoutingGroupCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to audioRoutingGroups for communications
     * @param AudioRoutingGroup $body The request body
     * @param AudioRoutingGroupsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AudioRoutingGroup|null>
     * @throws Exception
    */
    public function post(AudioRoutingGroup $body, ?AudioRoutingGroupsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AudioRoutingGroup::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get audioRoutingGroups from communications
     * @param AudioRoutingGroupsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AudioRoutingGroupsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Create new navigation property to audioRoutingGroups for communications
     * @param AudioRoutingGroup $body The request body
     * @param AudioRoutingGroupsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AudioRoutingGroup $body, ?AudioRoutingGroupsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return AudioRoutingGroupsRequestBuilder
    */
    public function withUrl(string $rawUrl): AudioRoutingGroupsRequestBuilder {
        return new AudioRoutingGroupsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
