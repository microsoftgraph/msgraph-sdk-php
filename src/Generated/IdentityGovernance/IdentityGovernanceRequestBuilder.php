<?php

namespace Microsoft\Graph\Generated\IdentityGovernance;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\IdentityGovernance\AccessReviews\AccessReviewsRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\AppConsent\AppConsentRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\EntitlementManagementRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\LifecycleWorkflowsRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\PrivilegedAccessRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\TermsOfUse\TermsOfUseRequestBuilder;
use Microsoft\Graph\Generated\Models\IdentityGovernance\IdentityGovernance;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the identityGovernance singleton.
*/
class IdentityGovernanceRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the accessReviews property of the microsoft.graph.identityGovernance entity.
    */
    public function accessReviews(): AccessReviewsRequestBuilder {
        return new AccessReviewsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the appConsent property of the microsoft.graph.identityGovernance entity.
    */
    public function appConsent(): AppConsentRequestBuilder {
        return new AppConsentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the entitlementManagement property of the microsoft.graph.identityGovernance entity.
    */
    public function entitlementManagement(): EntitlementManagementRequestBuilder {
        return new EntitlementManagementRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the lifecycleWorkflows property of the microsoft.graph.identityGovernance entity.
    */
    public function lifecycleWorkflows(): LifecycleWorkflowsRequestBuilder {
        return new LifecycleWorkflowsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the privilegedAccess property of the microsoft.graph.identityGovernance entity.
    */
    public function privilegedAccess(): PrivilegedAccessRequestBuilder {
        return new PrivilegedAccessRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the termsOfUse property of the microsoft.graph.identityGovernance entity.
    */
    public function termsOfUse(): TermsOfUseRequestBuilder {
        return new TermsOfUseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new IdentityGovernanceRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get identityGovernance
     * @param IdentityGovernanceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IdentityGovernance|null>
     * @throws Exception
    */
    public function get(?IdentityGovernanceRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IdentityGovernance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update identityGovernance
     * @param IdentityGovernance $body The request body
     * @param IdentityGovernanceRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IdentityGovernance|null>
     * @throws Exception
    */
    public function patch(IdentityGovernance $body, ?IdentityGovernanceRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IdentityGovernance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get identityGovernance
     * @param IdentityGovernanceRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?IdentityGovernanceRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update identityGovernance
     * @param IdentityGovernance $body The request body
     * @param IdentityGovernanceRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(IdentityGovernance $body, ?IdentityGovernanceRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return IdentityGovernanceRequestBuilder
    */
    public function withUrl(string $rawUrl): IdentityGovernanceRequestBuilder {
        return new IdentityGovernanceRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
