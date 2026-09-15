<?php

namespace Microsoft\Graph\Generated\Directory\TenantGovernance\RelatedTenants\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Directory\TenantGovernance\RelatedTenants\Item\AppB2BSignInActivityMetrics\AppB2BSignInActivityMetricsRequestBuilder;
use Microsoft\Graph\Generated\Directory\TenantGovernance\RelatedTenants\Item\B2BRegistrationMetrics\B2BRegistrationMetricsRequestBuilder;
use Microsoft\Graph\Generated\Directory\TenantGovernance\RelatedTenants\Item\B2BSignInActivityMetrics\B2BSignInActivityMetricsRequestBuilder;
use Microsoft\Graph\Generated\Directory\TenantGovernance\RelatedTenants\Item\BillingMetrics\BillingMetricsRequestBuilder;
use Microsoft\Graph\Generated\Directory\TenantGovernance\RelatedTenants\Item\MultiTenantApplicationMetrics\MultiTenantApplicationMetricsRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\RelatedTenant;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the relatedTenants property of the microsoft.graph.tenantGovernance entity.
*/
class RelatedTenantItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the appB2BSignInActivityMetrics property of the microsoft.graph.relatedTenant entity.
    */
    public function appB2BSignInActivityMetrics(): AppB2BSignInActivityMetricsRequestBuilder {
        return new AppB2BSignInActivityMetricsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the b2BRegistrationMetrics property of the microsoft.graph.relatedTenant entity.
    */
    public function b2BRegistrationMetrics(): B2BRegistrationMetricsRequestBuilder {
        return new B2BRegistrationMetricsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the b2BSignInActivityMetrics property of the microsoft.graph.relatedTenant entity.
    */
    public function b2BSignInActivityMetrics(): B2BSignInActivityMetricsRequestBuilder {
        return new B2BSignInActivityMetricsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the billingMetrics property of the microsoft.graph.relatedTenant entity.
    */
    public function billingMetrics(): BillingMetricsRequestBuilder {
        return new BillingMetricsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the multiTenantApplicationMetrics property of the microsoft.graph.relatedTenant entity.
    */
    public function multiTenantApplicationMetrics(): MultiTenantApplicationMetricsRequestBuilder {
        return new MultiTenantApplicationMetricsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new RelatedTenantItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/tenantGovernance/relatedTenants/{relatedTenant%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property relatedTenants for directory
     * @param RelatedTenantItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?RelatedTenantItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get relatedTenants from directory
     * @param RelatedTenantItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RelatedTenant|null>
     * @throws Exception
    */
    public function get(?RelatedTenantItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RelatedTenant::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property relatedTenants in directory
     * @param RelatedTenant $body The request body
     * @param RelatedTenantItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RelatedTenant|null>
     * @throws Exception
    */
    public function patch(RelatedTenant $body, ?RelatedTenantItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RelatedTenant::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property relatedTenants for directory
     * @param RelatedTenantItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?RelatedTenantItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Get relatedTenants from directory
     * @param RelatedTenantItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RelatedTenantItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property relatedTenants in directory
     * @param RelatedTenant $body The request body
     * @param RelatedTenantItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(RelatedTenant $body, ?RelatedTenantItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RelatedTenantItemRequestBuilder
    */
    public function withUrl(string $rawUrl): RelatedTenantItemRequestBuilder {
        return new RelatedTenantItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
