<?php

namespace Microsoft\Graph\Generated\Applications\Item\ExtensionProperties;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Applications\Item\ExtensionProperties\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Applications\Item\ExtensionProperties\Item\ExtensionPropertyItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ExtensionProperty;
use Microsoft\Graph\Generated\Models\ExtensionPropertyCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the extensionProperties property of the microsoft.graph.application entity.
*/
class ExtensionPropertiesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the extensionProperties property of the microsoft.graph.application entity.
     * @param string $extensionPropertyId The unique identifier of extensionProperty
     * @return ExtensionPropertyItemRequestBuilder
    */
    public function byExtensionPropertyId(string $extensionPropertyId): ExtensionPropertyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['extensionProperty%2Did'] = $extensionPropertyId;
        return new ExtensionPropertyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ExtensionPropertiesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/applications/{application%2Did}/extensionProperties{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve the list of directory extension definitions, represented by extensionProperty objects on an application.
     * @param ExtensionPropertiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExtensionPropertyCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/application-list-extensionproperty?view=graph-rest-1.0 Find more info here
    */
    public function get(?ExtensionPropertiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExtensionPropertyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new directory extension definition, represented by an extensionProperty object.
     * @param ExtensionProperty $body The request body
     * @param ExtensionPropertiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExtensionProperty|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/application-post-extensionproperty?view=graph-rest-1.0 Find more info here
    */
    public function post(ExtensionProperty $body, ?ExtensionPropertiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExtensionProperty::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve the list of directory extension definitions, represented by extensionProperty objects on an application.
     * @param ExtensionPropertiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ExtensionPropertiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new directory extension definition, represented by an extensionProperty object.
     * @param ExtensionProperty $body The request body
     * @param ExtensionPropertiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ExtensionProperty $body, ?ExtensionPropertiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ExtensionPropertiesRequestBuilder
    */
    public function withUrl(string $rawUrl): ExtensionPropertiesRequestBuilder {
        return new ExtensionPropertiesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
