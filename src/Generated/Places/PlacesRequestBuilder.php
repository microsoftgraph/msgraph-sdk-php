<?php

namespace Microsoft\Graph\Generated\Places;

use Microsoft\Graph\Generated\Places\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Places\GraphRoom\GraphRoomRequestBuilder;
use Microsoft\Graph\Generated\Places\Item\PlaceItemRequestBuilder;
use Microsoft\Kiota\Abstractions\RequestAdapter;

/**
 * Builds and executes requests for operations under /places
*/
class PlacesRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to room.
    */
    public function graphRoom(): GraphRoomRequestBuilder {
        return new GraphRoomRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the collection of place entities.
     * @param string $placeId Unique identifier of the item
     * @return PlaceItemRequestBuilder
    */
    public function byPlaceId(string $placeId): PlaceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['place%2Did'] = $placeId;
        return new PlaceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PlacesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/places';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

}
