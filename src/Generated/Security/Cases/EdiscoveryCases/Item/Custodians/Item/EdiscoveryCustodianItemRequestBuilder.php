<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\EdiscoveryCustodian;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\LastIndexOperation\LastIndexOperationRequestBuilder;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\SecurityActivate\SecurityActivateRequestBuilder;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\SecurityApplyHold\SecurityApplyHoldRequestBuilder;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\SecurityRelease\SecurityReleaseRequestBuilder;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\SecurityRemoveHold\SecurityRemoveHoldRequestBuilder;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\SecurityUpdateIndex\SecurityUpdateIndexRequestBuilder;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\SiteSources\SiteSourcesRequestBuilder;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\UnifiedGroupSources\UnifiedGroupSourcesRequestBuilder;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\UserSources\UserSourcesRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the custodians property of the microsoft.graph.security.ediscoveryCase entity.
*/
class EdiscoveryCustodianItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the lastIndexOperation property of the microsoft.graph.security.ediscoveryCustodian entity.
    */
    public function lastIndexOperation(): LastIndexOperationRequestBuilder {
        return new LastIndexOperationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the activate method.
    */
    public function securityActivate(): SecurityActivateRequestBuilder {
        return new SecurityActivateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the applyHold method.
    */
    public function securityApplyHold(): SecurityApplyHoldRequestBuilder {
        return new SecurityApplyHoldRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the release method.
    */
    public function securityRelease(): SecurityReleaseRequestBuilder {
        return new SecurityReleaseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the removeHold method.
    */
    public function securityRemoveHold(): SecurityRemoveHoldRequestBuilder {
        return new SecurityRemoveHoldRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the updateIndex method.
    */
    public function securityUpdateIndex(): SecurityUpdateIndexRequestBuilder {
        return new SecurityUpdateIndexRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the siteSources property of the microsoft.graph.security.ediscoveryCustodian entity.
    */
    public function siteSources(): SiteSourcesRequestBuilder {
        return new SiteSourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the unifiedGroupSources property of the microsoft.graph.security.ediscoveryCustodian entity.
    */
    public function unifiedGroupSources(): UnifiedGroupSourcesRequestBuilder {
        return new UnifiedGroupSourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userSources property of the microsoft.graph.security.ediscoveryCustodian entity.
    */
    public function userSources(): UserSourcesRequestBuilder {
        return new UserSourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new EdiscoveryCustodianItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], "{+baseurl}/security/cases/ediscoveryCases/{ediscoveryCase%2Did}/custodians/{ediscoveryCustodian%2Did}{?%24select,%24expand}");
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property custodians for security
     * @param EdiscoveryCustodianItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?EdiscoveryCustodianItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Returns a list of case ediscoveryCustodian objects for this case.
     * @param EdiscoveryCustodianItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?EdiscoveryCustodianItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [EdiscoveryCustodian::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property custodians in security
     * @param EdiscoveryCustodian $body The request body
     * @param EdiscoveryCustodianItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(EdiscoveryCustodian $body, ?EdiscoveryCustodianItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [EdiscoveryCustodian::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property custodians for security
     * @param EdiscoveryCustodianItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?EdiscoveryCustodianItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Returns a list of case ediscoveryCustodian objects for this case.
     * @param EdiscoveryCustodianItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EdiscoveryCustodianItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property custodians in security
     * @param EdiscoveryCustodian $body The request body
     * @param EdiscoveryCustodianItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(EdiscoveryCustodian $body, ?EdiscoveryCustodianItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
