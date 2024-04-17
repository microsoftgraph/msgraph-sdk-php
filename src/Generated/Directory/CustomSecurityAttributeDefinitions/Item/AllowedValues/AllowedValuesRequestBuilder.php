<?php

namespace Microsoft\Graph\Generated\Directory\CustomSecurityAttributeDefinitions\Item\AllowedValues;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Directory\CustomSecurityAttributeDefinitions\Item\AllowedValues\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Directory\CustomSecurityAttributeDefinitions\Item\AllowedValues\Item\AllowedValueItemRequestBuilder;
use Microsoft\Graph\Generated\Models\AllowedValue;
use Microsoft\Graph\Generated\Models\AllowedValueCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the allowedValues property of the microsoft.graph.customSecurityAttributeDefinition entity.
*/
class AllowedValuesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the allowedValues property of the microsoft.graph.customSecurityAttributeDefinition entity.
     * @param string $allowedValueId The unique identifier of allowedValue
     * @return AllowedValueItemRequestBuilder
    */
    public function byAllowedValueId(string $allowedValueId): AllowedValueItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['allowedValue%2Did'] = $allowedValueId;
        return new AllowedValueItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AllowedValuesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/customSecurityAttributeDefinitions/{customSecurityAttributeDefinition%2Did}/allowedValues{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the allowedValue objects and their properties.
     * @param AllowedValuesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AllowedValueCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/customsecurityattributedefinition-list-allowedvalues?view=graph-rest-1.0 Find more info here
    */
    public function get(?AllowedValuesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AllowedValueCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new allowedValue object.
     * @param AllowedValue $body The request body
     * @param AllowedValuesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AllowedValue|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/customsecurityattributedefinition-post-allowedvalues?view=graph-rest-1.0 Find more info here
    */
    public function post(AllowedValue $body, ?AllowedValuesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AllowedValue::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the allowedValue objects and their properties.
     * @param AllowedValuesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AllowedValuesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new allowedValue object.
     * @param AllowedValue $body The request body
     * @param AllowedValuesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AllowedValue $body, ?AllowedValuesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AllowedValuesRequestBuilder
    */
    public function withUrl(string $rawUrl): AllowedValuesRequestBuilder {
        return new AllowedValuesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
