<?php

namespace Microsoft\Graph\Generated\Policies\PermissionGrantPolicies\Item\Excludes;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\PermissionGrantConditionSet;
use Microsoft\Graph\Generated\Models\PermissionGrantConditionSetCollectionResponse;
use Microsoft\Graph\Generated\Policies\PermissionGrantPolicies\Item\Excludes\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Policies\PermissionGrantPolicies\Item\Excludes\Item\PermissionGrantConditionSetItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the excludes property of the microsoft.graph.permissionGrantPolicy entity.
*/
class ExcludesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the excludes property of the microsoft.graph.permissionGrantPolicy entity.
     * @param string $permissionGrantConditionSetId The unique identifier of permissionGrantConditionSet
     * @return PermissionGrantConditionSetItemRequestBuilder
    */
    public function byPermissionGrantConditionSetId(string $permissionGrantConditionSetId): PermissionGrantConditionSetItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['permissionGrantConditionSet%2Did'] = $permissionGrantConditionSetId;
        return new PermissionGrantConditionSetItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ExcludesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/permissionGrantPolicies/{permissionGrantPolicy%2Did}/excludes{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve the condition sets which are *excluded* in a permissionGrantPolicy.
     * @param ExcludesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PermissionGrantConditionSetCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/permissiongrantpolicy-list-excludes?view=graph-rest-1.0 Find more info here
    */
    public function get(?ExcludesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PermissionGrantConditionSetCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Add conditions under which a permission grant event is *excluded* in a permission grant policy. You do this by adding a permissionGrantConditionSet to the excludes collection of a  permissionGrantPolicy.
     * @param PermissionGrantConditionSet $body The request body
     * @param ExcludesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PermissionGrantConditionSet|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/permissiongrantpolicy-post-excludes?view=graph-rest-1.0 Find more info here
    */
    public function post(PermissionGrantConditionSet $body, ?ExcludesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PermissionGrantConditionSet::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve the condition sets which are *excluded* in a permissionGrantPolicy.
     * @param ExcludesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ExcludesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Add conditions under which a permission grant event is *excluded* in a permission grant policy. You do this by adding a permissionGrantConditionSet to the excludes collection of a  permissionGrantPolicy.
     * @param PermissionGrantConditionSet $body The request body
     * @param ExcludesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PermissionGrantConditionSet $body, ?ExcludesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ExcludesRequestBuilder
    */
    public function withUrl(string $rawUrl): ExcludesRequestBuilder {
        return new ExcludesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
