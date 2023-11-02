<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote\SectionGroups;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote\SectionGroups\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\Onenote\SectionGroups\Item\SectionGroupItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\SectionGroup;
use Microsoft\Graph\Generated\Models\SectionGroupCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the sectionGroups property of the microsoft.graph.onenote entity.
*/
class SectionGroupsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sectionGroups property of the microsoft.graph.onenote entity.
     * @param string $sectionGroupId The unique identifier of sectionGroup
     * @return SectionGroupItemRequestBuilder
    */
    public function bySectionGroupId(string $sectionGroupId): SectionGroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sectionGroup%2Did'] = $sectionGroupId;
        return new SectionGroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SectionGroupsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/groups/{group%2Did}/sites/{site%2Did}/onenote/sectionGroups{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of sectionGroup objects. This API is available in the following national cloud deployments.
     * @param SectionGroupsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SectionGroupCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/onenote-list-sectiongroups?view=graph-rest-1.0 Find more info here
    */
    public function get(?SectionGroupsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SectionGroupCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to sectionGroups for groups
     * @param SectionGroup $body The request body
     * @param SectionGroupsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SectionGroup|null>
     * @throws Exception
    */
    public function post(SectionGroup $body, ?SectionGroupsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SectionGroup::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a list of sectionGroup objects. This API is available in the following national cloud deployments.
     * @param SectionGroupsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SectionGroupsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Create new navigation property to sectionGroups for groups
     * @param SectionGroup $body The request body
     * @param SectionGroupsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SectionGroup $body, ?SectionGroupsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return SectionGroupsRequestBuilder
    */
    public function withUrl(string $rawUrl): SectionGroupsRequestBuilder {
        return new SectionGroupsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
