<?php

namespace Microsoft\Graph\Generated\Policies\ActivityBasedTimeoutPolicies\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ActivityBasedTimeoutPolicy;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Policies\ActivityBasedTimeoutPolicies\Item\AppliesTo\AppliesToRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the activityBasedTimeoutPolicies property of the microsoft.graph.policyRoot entity.
*/
class ActivityBasedTimeoutPolicyItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the appliesTo property of the microsoft.graph.stsPolicy entity.
    */
    public function appliesTo(): AppliesToRequestBuilder {
        return new AppliesToRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ActivityBasedTimeoutPolicyItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/activityBasedTimeoutPolicies/{activityBasedTimeoutPolicy%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete an activityBasedTimeoutPolicy object.
     * @param ActivityBasedTimeoutPolicyItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/activitybasedtimeoutpolicy-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?ActivityBasedTimeoutPolicyItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get the properties of an activityBasedTimeoutPolicy object.
     * @param ActivityBasedTimeoutPolicyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ActivityBasedTimeoutPolicy|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/activitybasedtimeoutpolicy-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?ActivityBasedTimeoutPolicyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ActivityBasedTimeoutPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of an activityBasedTimeoutPolicy object.
     * @param ActivityBasedTimeoutPolicy $body The request body
     * @param ActivityBasedTimeoutPolicyItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ActivityBasedTimeoutPolicy|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/activitybasedtimeoutpolicy-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(ActivityBasedTimeoutPolicy $body, ?ActivityBasedTimeoutPolicyItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ActivityBasedTimeoutPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete an activityBasedTimeoutPolicy object.
     * @param ActivityBasedTimeoutPolicyItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ActivityBasedTimeoutPolicyItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/policies/activityBasedTimeoutPolicies/{activityBasedTimeoutPolicy%2Did}';
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Get the properties of an activityBasedTimeoutPolicy object.
     * @param ActivityBasedTimeoutPolicyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ActivityBasedTimeoutPolicyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of an activityBasedTimeoutPolicy object.
     * @param ActivityBasedTimeoutPolicy $body The request body
     * @param ActivityBasedTimeoutPolicyItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ActivityBasedTimeoutPolicy $body, ?ActivityBasedTimeoutPolicyItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/policies/activityBasedTimeoutPolicies/{activityBasedTimeoutPolicy%2Did}';
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return ActivityBasedTimeoutPolicyItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ActivityBasedTimeoutPolicyItemRequestBuilder {
        return new ActivityBasedTimeoutPolicyItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
