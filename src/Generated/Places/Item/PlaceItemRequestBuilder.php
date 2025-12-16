<?php

namespace Microsoft\Graph\Generated\Places\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Place;
use Microsoft\Graph\Generated\Places\Item\CheckIns\CheckInsRequestBuilder;
use Microsoft\Graph\Generated\Places\Item\Descendants\DescendantsRequestBuilder;
use Microsoft\Graph\Generated\Places\Item\GraphBuilding\GraphBuildingRequestBuilder;
use Microsoft\Graph\Generated\Places\Item\GraphDesk\GraphDeskRequestBuilder;
use Microsoft\Graph\Generated\Places\Item\GraphFloor\GraphFloorRequestBuilder;
use Microsoft\Graph\Generated\Places\Item\GraphRoom\GraphRoomRequestBuilder;
use Microsoft\Graph\Generated\Places\Item\GraphRoomList\GraphRoomListRequestBuilder;
use Microsoft\Graph\Generated\Places\Item\GraphSection\GraphSectionRequestBuilder;
use Microsoft\Graph\Generated\Places\Item\GraphWorkspace\GraphWorkspaceRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the collection of place entities.
*/
class PlaceItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the checkIns property of the microsoft.graph.place entity.
    */
    public function checkIns(): CheckInsRequestBuilder {
        return new CheckInsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the descendants method.
    */
    public function descendants(): DescendantsRequestBuilder {
        return new DescendantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to building.
    */
    public function graphBuilding(): GraphBuildingRequestBuilder {
        return new GraphBuildingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to desk.
    */
    public function graphDesk(): GraphDeskRequestBuilder {
        return new GraphDeskRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to floor.
    */
    public function graphFloor(): GraphFloorRequestBuilder {
        return new GraphFloorRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to room.
    */
    public function graphRoom(): GraphRoomRequestBuilder {
        return new GraphRoomRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to roomList.
    */
    public function graphRoomList(): GraphRoomListRequestBuilder {
        return new GraphRoomListRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to section.
    */
    public function graphSection(): GraphSectionRequestBuilder {
        return new GraphSectionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Casts the previous resource to workspace.
    */
    public function graphWorkspace(): GraphWorkspaceRequestBuilder {
        return new GraphWorkspaceRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new PlaceItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/places/{place%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a place object. You can also use this method to delete the following child object types: building, floor, section, or desk.
     * @param PlaceItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/place-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?PlaceItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Update the properties of place object that can be a building, floor, section, desk, room, workspace, or roomList. You can identify the place by specifying the id property.
     * @param Place $body The request body
     * @param PlaceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Place|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/place-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(Place $body, ?PlaceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Place::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a place object. You can also use this method to delete the following child object types: building, floor, section, or desk.
     * @param PlaceItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?PlaceItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of place object that can be a building, floor, section, desk, room, workspace, or roomList. You can identify the place by specifying the id property.
     * @param Place $body The request body
     * @param PlaceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Place $body, ?PlaceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PlaceItemRequestBuilder
    */
    public function withUrl(string $rawUrl): PlaceItemRequestBuilder {
        return new PlaceItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
