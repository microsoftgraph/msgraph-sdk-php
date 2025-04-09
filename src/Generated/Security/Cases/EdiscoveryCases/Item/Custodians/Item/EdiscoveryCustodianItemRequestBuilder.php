<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\EdiscoveryCustodian;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\LastIndexOperation\LastIndexOperationRequestBuilder;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\MicrosoftGraphSecurityActivate\MicrosoftGraphSecurityActivateRequestBuilder;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\MicrosoftGraphSecurityApplyHold\MicrosoftGraphSecurityApplyHoldRequestBuilder;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\MicrosoftGraphSecurityRelease\MicrosoftGraphSecurityReleaseRequestBuilder;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\MicrosoftGraphSecurityRemoveHold\MicrosoftGraphSecurityRemoveHoldRequestBuilder;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\MicrosoftGraphSecurityUpdateIndex\MicrosoftGraphSecurityUpdateIndexRequestBuilder;
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
    public function microsoftGraphSecurityActivate(): MicrosoftGraphSecurityActivateRequestBuilder {
        return new MicrosoftGraphSecurityActivateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the applyHold method.
    */
    public function microsoftGraphSecurityApplyHold(): MicrosoftGraphSecurityApplyHoldRequestBuilder {
        return new MicrosoftGraphSecurityApplyHoldRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the release method.
    */
    public function microsoftGraphSecurityRelease(): MicrosoftGraphSecurityReleaseRequestBuilder {
        return new MicrosoftGraphSecurityReleaseRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the removeHold method.
    */
    public function microsoftGraphSecurityRemoveHold(): MicrosoftGraphSecurityRemoveHoldRequestBuilder {
        return new MicrosoftGraphSecurityRemoveHoldRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the updateIndex method.
    */
    public function microsoftGraphSecurityUpdateIndex(): MicrosoftGraphSecurityUpdateIndexRequestBuilder {
        return new MicrosoftGraphSecurityUpdateIndexRequestBuilder($this->pathParameters, $this->requestAdapter);
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
        parent::__construct($requestAdapter, [], '{+baseurl}/security/cases/ediscoveryCases/{ediscoveryCase%2Did}/custodians/{ediscoveryCustodian%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property custodians for security
     * @param EdiscoveryCustodianItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?EdiscoveryCustodianItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of an ediscoveryCustodian object.
     * @param EdiscoveryCustodianItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EdiscoveryCustodian|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-ediscoverycustodian-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?EdiscoveryCustodianItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EdiscoveryCustodian::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property custodians in security
     * @param EdiscoveryCustodian $body The request body
     * @param EdiscoveryCustodianItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EdiscoveryCustodian|null>
     * @throws Exception
    */
    public function patch(EdiscoveryCustodian $body, ?EdiscoveryCustodianItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EdiscoveryCustodian::class, 'createFromDiscriminatorValue'], $errorMappings);
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
     * Read the properties and relationships of an ediscoveryCustodian object.
     * @param EdiscoveryCustodianItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EdiscoveryCustodianItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return EdiscoveryCustodianItemRequestBuilder
    */
    public function withUrl(string $rawUrl): EdiscoveryCustodianItemRequestBuilder {
        return new EdiscoveryCustodianItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
