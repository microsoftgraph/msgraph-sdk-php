<?php

namespace Microsoft\Graph\Generated\RoleManagement\Directory\RoleDefinitions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UnifiedRoleDefinition;
use Microsoft\Graph\Generated\Models\UnifiedRoleDefinitionCollectionResponse;
use Microsoft\Graph\Generated\RoleManagement\Directory\RoleDefinitions\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\Directory\RoleDefinitions\Item\UnifiedRoleDefinitionItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the roleDefinitions property of the microsoft.graph.rbacApplication entity.
*/
class RoleDefinitionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleDefinitions property of the microsoft.graph.rbacApplication entity.
     * @param string $unifiedRoleDefinitionId The unique identifier of unifiedRoleDefinition
     * @return UnifiedRoleDefinitionItemRequestBuilder
    */
    public function byUnifiedRoleDefinitionId(string $unifiedRoleDefinitionId): UnifiedRoleDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleDefinition%2Did'] = $unifiedRoleDefinitionId;
        return new UnifiedRoleDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RoleDefinitionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/roleManagement/directory/roleDefinitions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of unifiedRoleDefinition objects for the provider. The following RBAC providers are currently supported:- directory (Microsoft Entra ID)- entitlement management (Microsoft Entra Entitlement Management)
     * @param RoleDefinitionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UnifiedRoleDefinitionCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/rbacapplication-list-roledefinitions?view=graph-rest-1.0 Find more info here
    */
    public function get(?RoleDefinitionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleDefinitionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new custom unifiedRoleDefinition object. This feature requires a Microsoft Entra ID P1 or P2 license.
     * @param UnifiedRoleDefinition $body The request body
     * @param RoleDefinitionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UnifiedRoleDefinition|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/rbacapplication-post-roledefinitions?view=graph-rest-1.0 Find more info here
    */
    public function post(UnifiedRoleDefinition $body, ?RoleDefinitionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of unifiedRoleDefinition objects for the provider. The following RBAC providers are currently supported:- directory (Microsoft Entra ID)- entitlement management (Microsoft Entra Entitlement Management)
     * @param RoleDefinitionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RoleDefinitionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new custom unifiedRoleDefinition object. This feature requires a Microsoft Entra ID P1 or P2 license.
     * @param UnifiedRoleDefinition $body The request body
     * @param RoleDefinitionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UnifiedRoleDefinition $body, ?RoleDefinitionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RoleDefinitionsRequestBuilder
    */
    public function withUrl(string $rawUrl): RoleDefinitionsRequestBuilder {
        return new RoleDefinitionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
