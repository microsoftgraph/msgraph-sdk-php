<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AvailableAccessPackages\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AvailableAccessPackages\Item\ResourceRoleScopes\ResourceRoleScopesRequestBuilder;
use Microsoft\Graph\Generated\Models\AvailableAccessPackage;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the availableAccessPackages property of the microsoft.graph.entitlementManagement entity.
*/
class AvailableAccessPackageItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the resourceRoleScopes property of the microsoft.graph.availableAccessPackage entity.
    */
    public function resourceRoleScopes(): ResourceRoleScopesRequestBuilder {
        return new ResourceRoleScopesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AvailableAccessPackageItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/entitlementManagement/availableAccessPackages/{availableAccessPackage%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property availableAccessPackages for identityGovernance
     * @param AvailableAccessPackageItemRequestBuilderDeleteRequestCo_fb5eaf8e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?AvailableAccessPackageItemRequestBuilderDeleteRequestCo_fb5eaf8e $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Access packages available for end users to browse and request.
     * @param AvailableAccessPackageItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AvailableAccessPackage|null>
     * @throws Exception
    */
    public function get(?AvailableAccessPackageItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AvailableAccessPackage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property availableAccessPackages in identityGovernance
     * @param AvailableAccessPackage $body The request body
     * @param AvailableAccessPackageItemRequestBuilderPatchRequestCon_4bbe8414|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AvailableAccessPackage|null>
     * @throws Exception
    */
    public function patch(AvailableAccessPackage $body, ?AvailableAccessPackageItemRequestBuilderPatchRequestCon_4bbe8414 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AvailableAccessPackage::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property availableAccessPackages for identityGovernance
     * @param AvailableAccessPackageItemRequestBuilderDeleteRequestCo_fb5eaf8e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AvailableAccessPackageItemRequestBuilderDeleteRequestCo_fb5eaf8e $requestConfiguration = null): RequestInformation {
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
     * Access packages available for end users to browse and request.
     * @param AvailableAccessPackageItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AvailableAccessPackageItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property availableAccessPackages in identityGovernance
     * @param AvailableAccessPackage $body The request body
     * @param AvailableAccessPackageItemRequestBuilderPatchRequestCon_4bbe8414|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AvailableAccessPackage $body, ?AvailableAccessPackageItemRequestBuilderPatchRequestCon_4bbe8414 $requestConfiguration = null): RequestInformation {
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
     * @return AvailableAccessPackageItemRequestBuilder
    */
    public function withUrl(string $rawUrl): AvailableAccessPackageItemRequestBuilder {
        return new AvailableAccessPackageItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
