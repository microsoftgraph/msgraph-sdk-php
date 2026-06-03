<?php

namespace Microsoft\Graph\Generated\Policies\OwnerlessGroupPolicy;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\OwnerlessGroupPolicy;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the ownerlessGroupPolicy property of the microsoft.graph.policyRoot entity.
*/
class OwnerlessGroupPolicyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new OwnerlessGroupPolicyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Read the properties of an ownerlessGroupPolicy object.
     * @param OwnerlessGroupPolicyRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OwnerlessGroupPolicy|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/ownerlessgrouppolicy-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?OwnerlessGroupPolicyRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OwnerlessGroupPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create or update the ownerlessGroupPolicy for the tenant. If the policy doesn't exist, it creates a new one; if the policy exists, it updates the existing policy. To disable the policy, set isEnabled to false. Setting isEnabled to false clears the values of all other policy parameters.
     * @param OwnerlessGroupPolicy $body The request body
     * @param OwnerlessGroupPolicyRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OwnerlessGroupPolicy|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/ownerlessgrouppolicy-upsert?view=graph-rest-1.0 Find more info here
    */
    public function patch(OwnerlessGroupPolicy $body, ?OwnerlessGroupPolicyRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OwnerlessGroupPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Read the properties of an ownerlessGroupPolicy object.
     * @param OwnerlessGroupPolicyRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OwnerlessGroupPolicyRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create or update the ownerlessGroupPolicy for the tenant. If the policy doesn't exist, it creates a new one; if the policy exists, it updates the existing policy. To disable the policy, set isEnabled to false. Setting isEnabled to false clears the values of all other policy parameters.
     * @param OwnerlessGroupPolicy $body The request body
     * @param OwnerlessGroupPolicyRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(OwnerlessGroupPolicy $body, ?OwnerlessGroupPolicyRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
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
     * @return OwnerlessGroupPolicyRequestBuilder
    */
    public function withUrl(string $rawUrl): OwnerlessGroupPolicyRequestBuilder {
        return new OwnerlessGroupPolicyRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
