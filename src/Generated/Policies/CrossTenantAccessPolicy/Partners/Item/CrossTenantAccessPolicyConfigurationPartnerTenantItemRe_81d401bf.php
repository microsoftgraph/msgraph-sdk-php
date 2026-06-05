<?php

namespace Microsoft\Graph\Generated\Policies\CrossTenantAccessPolicy\Partners\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\CrossTenantAccessPolicyConfigurationPartner;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Policies\CrossTenantAccessPolicy\Partners\Item\IdentitySynchronization\IdentitySynchronizationRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the partners property of the microsoft.graph.crossTenantAccessPolicy entity. Original name: CrossTenantAccessPolicyConfigurationPartnerTenantItemRequestBuilder
*/
class CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_81d401bf extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the identitySynchronization property of the microsoft.graph.crossTenantAccessPolicyConfigurationPartner entity.
    */
    public function identitySynchronization(): IdentitySynchronizationRequestBuilder {
        return new IdentitySynchronizationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_81d401bf and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/crossTenantAccessPolicy/partners/{crossTenantAccessPolicyConfigurationPartner%2DtenantId}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a partner-specific configuration in a cross-tenant access policy. If a configuration includes a user synchronization policy, you must first delete the user synchronization policy before you can delete the partner-specific configuration.
     * @param CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_7bb93668|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/crosstenantaccesspolicyconfigurationpartner-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_7bb93668 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a partner-specific configuration.
     * @param CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_78509385|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CrossTenantAccessPolicyConfigurationPartner|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/crosstenantaccesspolicyconfigurationpartner-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_78509385 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CrossTenantAccessPolicyConfigurationPartner::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a partner-specific configuration.
     * @param CrossTenantAccessPolicyConfigurationPartner $body The request body
     * @param CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_d111f6fc|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CrossTenantAccessPolicyConfigurationPartner|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/crosstenantaccesspolicyconfigurationpartner-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(CrossTenantAccessPolicyConfigurationPartner $body, ?CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_d111f6fc $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CrossTenantAccessPolicyConfigurationPartner::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a partner-specific configuration in a cross-tenant access policy. If a configuration includes a user synchronization policy, you must first delete the user synchronization policy before you can delete the partner-specific configuration.
     * @param CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_7bb93668|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_7bb93668 $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a partner-specific configuration.
     * @param CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_78509385|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_78509385 $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a partner-specific configuration.
     * @param CrossTenantAccessPolicyConfigurationPartner $body The request body
     * @param CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_d111f6fc|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(CrossTenantAccessPolicyConfigurationPartner $body, ?CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_d111f6fc $requestConfiguration = null): RequestInformation {
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
     * @return CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_81d401bf
    */
    public function withUrl(string $rawUrl): CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_81d401bf {
        return new CrossTenantAccessPolicyConfigurationPartnerTenantItemRe_81d401bf($rawUrl, $this->requestAdapter);
    }

}
