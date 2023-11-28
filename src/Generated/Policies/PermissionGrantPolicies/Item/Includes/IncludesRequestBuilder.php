<?php

namespace Microsoft\Graph\Generated\Policies\PermissionGrantPolicies\Item\Includes;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\PermissionGrantConditionSet;
use Microsoft\Graph\Generated\Models\PermissionGrantConditionSetCollectionResponse;
use Microsoft\Graph\Generated\Policies\PermissionGrantPolicies\Item\Includes\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Policies\PermissionGrantPolicies\Item\Includes\Item\PermissionGrantConditionSetItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the includes property of the microsoft.graph.permissionGrantPolicy entity.
*/
class IncludesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the includes property of the microsoft.graph.permissionGrantPolicy entity.
     * @param string $permissionGrantConditionSetId The unique identifier of permissionGrantConditionSet
     * @return PermissionGrantConditionSetItemRequestBuilder
    */
    public function byPermissionGrantConditionSetId(string $permissionGrantConditionSetId): PermissionGrantConditionSetItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['permissionGrantConditionSet%2Did'] = $permissionGrantConditionSetId;
        return new PermissionGrantConditionSetItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new IncludesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/permissionGrantPolicies/{permissionGrantPolicy%2Did}/includes{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve the condition sets which are *included* in a permissionGrantPolicy.
     * @param IncludesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PermissionGrantConditionSetCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/permissiongrantpolicy-list-includes?view=graph-rest-1.0 Find more info here
    */
    public function get(?IncludesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PermissionGrantConditionSetCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Add conditions under which a permission grant event is *included* in a permission grant policy. You do this by adding a permissionGrantConditionSet to the includes collection of a  permissionGrantPolicy.
     * @param PermissionGrantConditionSet $body The request body
     * @param IncludesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PermissionGrantConditionSet|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/permissiongrantpolicy-post-includes?view=graph-rest-1.0 Find more info here
    */
    public function post(PermissionGrantConditionSet $body, ?IncludesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PermissionGrantConditionSet::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve the condition sets which are *included* in a permissionGrantPolicy.
     * @param IncludesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?IncludesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Add conditions under which a permission grant event is *included* in a permission grant policy. You do this by adding a permissionGrantConditionSet to the includes collection of a  permissionGrantPolicy.
     * @param PermissionGrantConditionSet $body The request body
     * @param IncludesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PermissionGrantConditionSet $body, ?IncludesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return IncludesRequestBuilder
    */
    public function withUrl(string $rawUrl): IncludesRequestBuilder {
        return new IncludesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
