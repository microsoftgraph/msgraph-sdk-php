<?php

namespace Microsoft\Graph\Generated\Policies\FederatedTokenValidationPolicy;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\FederatedTokenValidationPolicy;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the federatedTokenValidationPolicy property of the microsoft.graph.policyRoot entity.
*/
class FederatedTokenValidationPolicyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new FederatedTokenValidationPolicyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/federatedTokenValidationPolicy{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property federatedTokenValidationPolicy for policies
     * @param FederatedTokenValidationPolicyRequestBuilderDeleteReque_f9b93244|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?FederatedTokenValidationPolicyRequestBuilderDeleteReque_f9b93244 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get federatedTokenValidationPolicy from policies
     * @param FederatedTokenValidationPolicyRequestBuilderGetRequestC_39298105|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FederatedTokenValidationPolicy|null>
     * @throws Exception
    */
    public function get(?FederatedTokenValidationPolicyRequestBuilderGetRequestC_39298105 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FederatedTokenValidationPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property federatedTokenValidationPolicy in policies
     * @param FederatedTokenValidationPolicy $body The request body
     * @param FederatedTokenValidationPolicyRequestBuilderPatchReques_29f89e58|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FederatedTokenValidationPolicy|null>
     * @throws Exception
    */
    public function patch(FederatedTokenValidationPolicy $body, ?FederatedTokenValidationPolicyRequestBuilderPatchReques_29f89e58 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FederatedTokenValidationPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property federatedTokenValidationPolicy for policies
     * @param FederatedTokenValidationPolicyRequestBuilderDeleteReque_f9b93244|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?FederatedTokenValidationPolicyRequestBuilderDeleteReque_f9b93244 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
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
     * Get federatedTokenValidationPolicy from policies
     * @param FederatedTokenValidationPolicyRequestBuilderGetRequestC_39298105|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?FederatedTokenValidationPolicyRequestBuilderGetRequestC_39298105 $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property federatedTokenValidationPolicy in policies
     * @param FederatedTokenValidationPolicy $body The request body
     * @param FederatedTokenValidationPolicyRequestBuilderPatchReques_29f89e58|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(FederatedTokenValidationPolicy $body, ?FederatedTokenValidationPolicyRequestBuilderPatchReques_29f89e58 $requestConfiguration = null): RequestInformation {
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
     * @return FederatedTokenValidationPolicyRequestBuilder
    */
    public function withUrl(string $rawUrl): FederatedTokenValidationPolicyRequestBuilder {
        return new FederatedTokenValidationPolicyRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
