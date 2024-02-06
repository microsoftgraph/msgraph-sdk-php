<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\ResourceRoleScopes;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\ResourceRoleScopes\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\ResourceRoleScopes\Item\AccessPackageResourceRoleScopeItemRequestBuilder;
use Microsoft\Graph\Generated\Models\AccessPackageResourceRoleScope;
use Microsoft\Graph\Generated\Models\AccessPackageResourceRoleScopeCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the resourceRoleScopes property of the microsoft.graph.accessPackage entity.
*/
class ResourceRoleScopesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the resourceRoleScopes property of the microsoft.graph.accessPackage entity.
     * @param string $accessPackageResourceRoleScopeId The unique identifier of accessPackageResourceRoleScope
     * @return AccessPackageResourceRoleScopeItemRequestBuilder
    */
    public function byAccessPackageResourceRoleScopeId(string $accessPackageResourceRoleScopeId): AccessPackageResourceRoleScopeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackageResourceRoleScope%2Did'] = $accessPackageResourceRoleScopeId;
        return new AccessPackageResourceRoleScopeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ResourceRoleScopesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/entitlementManagement/accessPackages/{accessPackage%2Did}/resourceRoleScopes{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The resource roles and scopes in this access package.
     * @param ResourceRoleScopesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AccessPackageResourceRoleScopeCollectionResponse|null>
     * @throws Exception
    */
    public function get(?ResourceRoleScopesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AccessPackageResourceRoleScopeCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new accessPackageResourceRoleScope for adding a resource role to an access package. The access package resource, for a group, an app, or a SharePoint Online site, must already exist in the access package catalog, and the originId for the resource role retrieved from the list of the resource roles. Once you add the resource role scope to the access package, the user will receive this resource role through any current and future access package assignments.
     * @param AccessPackageResourceRoleScope $body The request body
     * @param ResourceRoleScopesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AccessPackageResourceRoleScope|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/accesspackage-post-resourcerolescopes?view=graph-rest-1.0 Find more info here
    */
    public function post(AccessPackageResourceRoleScope $body, ?ResourceRoleScopesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AccessPackageResourceRoleScope::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The resource roles and scopes in this access package.
     * @param ResourceRoleScopesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ResourceRoleScopesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new accessPackageResourceRoleScope for adding a resource role to an access package. The access package resource, for a group, an app, or a SharePoint Online site, must already exist in the access package catalog, and the originId for the resource role retrieved from the list of the resource roles. Once you add the resource role scope to the access package, the user will receive this resource role through any current and future access package assignments.
     * @param AccessPackageResourceRoleScope $body The request body
     * @param ResourceRoleScopesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AccessPackageResourceRoleScope $body, ?ResourceRoleScopesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ResourceRoleScopesRequestBuilder
    */
    public function withUrl(string $rawUrl): ResourceRoleScopesRequestBuilder {
        return new ResourceRoleScopesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
