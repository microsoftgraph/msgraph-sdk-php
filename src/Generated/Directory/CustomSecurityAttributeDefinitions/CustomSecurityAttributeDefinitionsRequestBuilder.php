<?php

namespace Microsoft\Graph\Generated\Directory\CustomSecurityAttributeDefinitions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Directory\CustomSecurityAttributeDefinitions\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Directory\CustomSecurityAttributeDefinitions\Item\CustomSecurityAttributeDefinitionItemRequestBuilder;
use Microsoft\Graph\Generated\Models\CustomSecurityAttributeDefinition;
use Microsoft\Graph\Generated\Models\CustomSecurityAttributeDefinitionCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the customSecurityAttributeDefinitions property of the microsoft.graph.directory entity.
*/
class CustomSecurityAttributeDefinitionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the customSecurityAttributeDefinitions property of the microsoft.graph.directory entity.
     * @param string $customSecurityAttributeDefinitionId The unique identifier of customSecurityAttributeDefinition
     * @return CustomSecurityAttributeDefinitionItemRequestBuilder
    */
    public function byCustomSecurityAttributeDefinitionId(string $customSecurityAttributeDefinitionId): CustomSecurityAttributeDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['customSecurityAttributeDefinition%2Did'] = $customSecurityAttributeDefinitionId;
        return new CustomSecurityAttributeDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CustomSecurityAttributeDefinitionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/customSecurityAttributeDefinitions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the customSecurityAttributeDefinition objects and their properties.
     * @param CustomSecurityAttributeDefinitionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomSecurityAttributeDefinitionCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/directory-list-customsecurityattributedefinitions?view=graph-rest-1.0 Find more info here
    */
    public function get(?CustomSecurityAttributeDefinitionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomSecurityAttributeDefinitionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new customSecurityAttributeDefinition object.
     * @param CustomSecurityAttributeDefinition $body The request body
     * @param CustomSecurityAttributeDefinitionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomSecurityAttributeDefinition|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/directory-post-customsecurityattributedefinitions?view=graph-rest-1.0 Find more info here
    */
    public function post(CustomSecurityAttributeDefinition $body, ?CustomSecurityAttributeDefinitionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomSecurityAttributeDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the customSecurityAttributeDefinition objects and their properties.
     * @param CustomSecurityAttributeDefinitionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CustomSecurityAttributeDefinitionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new customSecurityAttributeDefinition object.
     * @param CustomSecurityAttributeDefinition $body The request body
     * @param CustomSecurityAttributeDefinitionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CustomSecurityAttributeDefinition $body, ?CustomSecurityAttributeDefinitionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/directory/customSecurityAttributeDefinitions';
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
     * @return CustomSecurityAttributeDefinitionsRequestBuilder
    */
    public function withUrl(string $rawUrl): CustomSecurityAttributeDefinitionsRequestBuilder {
        return new CustomSecurityAttributeDefinitionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
