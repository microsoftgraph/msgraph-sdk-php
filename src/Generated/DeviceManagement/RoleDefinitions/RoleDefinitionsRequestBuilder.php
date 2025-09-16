<?php

namespace Microsoft\Graph\Generated\DeviceManagement\RoleDefinitions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\RoleDefinitions\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\RoleDefinitions\Item\RoleDefinitionItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\RoleDefinition;
use Microsoft\Graph\Generated\Models\RoleDefinitionCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the roleDefinitions property of the microsoft.graph.deviceManagement entity.
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
     * Provides operations to manage the roleDefinitions property of the microsoft.graph.deviceManagement entity.
     * @param string $roleDefinitionId The unique identifier of roleDefinition
     * @return RoleDefinitionItemRequestBuilder
    */
    public function byRoleDefinitionId(string $roleDefinitionId): RoleDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['roleDefinition%2Did'] = $roleDefinitionId;
        return new RoleDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RoleDefinitionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/roleDefinitions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List properties and relationships of the roleDefinition objects.
     * @param RoleDefinitionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RoleDefinitionCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-rbac-roledefinition-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?RoleDefinitionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RoleDefinitionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new roleDefinition object.
     * @param RoleDefinition $body The request body
     * @param RoleDefinitionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RoleDefinition|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-rbac-roledefinition-create?view=graph-rest-1.0 Find more info here
    */
    public function post(RoleDefinition $body, ?RoleDefinitionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RoleDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List properties and relationships of the roleDefinition objects.
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
     * Create a new roleDefinition object.
     * @param RoleDefinition $body The request body
     * @param RoleDefinitionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RoleDefinition $body, ?RoleDefinitionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
