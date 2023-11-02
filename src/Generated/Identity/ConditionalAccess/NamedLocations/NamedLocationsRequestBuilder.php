<?php

namespace Microsoft\Graph\Generated\Identity\ConditionalAccess\NamedLocations;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Identity\ConditionalAccess\NamedLocations\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Identity\ConditionalAccess\NamedLocations\Item\NamedLocationItemRequestBuilder;
use Microsoft\Graph\Generated\Models\NamedLocation;
use Microsoft\Graph\Generated\Models\NamedLocationCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the namedLocations property of the microsoft.graph.conditionalAccessRoot entity.
*/
class NamedLocationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the namedLocations property of the microsoft.graph.conditionalAccessRoot entity.
     * @param string $namedLocationId The unique identifier of namedLocation
     * @return NamedLocationItemRequestBuilder
    */
    public function byNamedLocationId(string $namedLocationId): NamedLocationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['namedLocation%2Did'] = $namedLocationId;
        return new NamedLocationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new NamedLocationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/conditionalAccess/namedLocations{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of namedLocation objects. This API is available in the following national cloud deployments.
     * @param NamedLocationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<NamedLocationCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/conditionalaccessroot-list-namedlocations?view=graph-rest-1.0 Find more info here
    */
    public function get(?NamedLocationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [NamedLocationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new namedLocation object. Named locations can be either ipNamedLocation or countryNamedLocation objects. This API is available in the following national cloud deployments.
     * @param NamedLocation $body The request body
     * @param NamedLocationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<NamedLocation|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/conditionalaccessroot-post-namedlocations?view=graph-rest-1.0 Find more info here
    */
    public function post(NamedLocation $body, ?NamedLocationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [NamedLocation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of namedLocation objects. This API is available in the following national cloud deployments.
     * @param NamedLocationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?NamedLocationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Create a new namedLocation object. Named locations can be either ipNamedLocation or countryNamedLocation objects. This API is available in the following national cloud deployments.
     * @param NamedLocation $body The request body
     * @param NamedLocationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(NamedLocation $body, ?NamedLocationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return NamedLocationsRequestBuilder
    */
    public function withUrl(string $rawUrl): NamedLocationsRequestBuilder {
        return new NamedLocationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
