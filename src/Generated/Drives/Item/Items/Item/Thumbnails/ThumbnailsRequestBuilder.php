<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Thumbnails;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Thumbnails\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Thumbnails\Item\ThumbnailSetItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\ThumbnailSet;
use Microsoft\Graph\Generated\Models\ThumbnailSetCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the thumbnails property of the microsoft.graph.driveItem entity.
*/
class ThumbnailsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the thumbnails property of the microsoft.graph.driveItem entity.
     * @param string $thumbnailSetId The unique identifier of thumbnailSet
     * @return ThumbnailSetItemRequestBuilder
    */
    public function byThumbnailSetId(string $thumbnailSetId): ThumbnailSetItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['thumbnailSet%2Did'] = $thumbnailSetId;
        return new ThumbnailSetItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ThumbnailsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/thumbnails{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a collection of ThumbnailSet resources for a DriveItem resource. A DriveItem can be represented by zero or more ThumbnailSet resources.Each thumbnailSet can have one or more thumbnail objects, which are images that represent the item.For example, a thumbnailSet may include thumbnail objects, such as common ones including small, medium, or large. There are many ways to work with thumbnails on OneDrive.Here are the most common ones:
     * @param ThumbnailsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ThumbnailSetCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/driveitem-list-thumbnails?view=graph-rest-1.0 Find more info here
    */
    public function get(?ThumbnailsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ThumbnailSetCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to thumbnails for drives
     * @param ThumbnailSet $body The request body
     * @param ThumbnailsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ThumbnailSet|null>
     * @throws Exception
    */
    public function post(ThumbnailSet $body, ?ThumbnailsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ThumbnailSet::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a collection of ThumbnailSet resources for a DriveItem resource. A DriveItem can be represented by zero or more ThumbnailSet resources.Each thumbnailSet can have one or more thumbnail objects, which are images that represent the item.For example, a thumbnailSet may include thumbnail objects, such as common ones including small, medium, or large. There are many ways to work with thumbnails on OneDrive.Here are the most common ones:
     * @param ThumbnailsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ThumbnailsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to thumbnails for drives
     * @param ThumbnailSet $body The request body
     * @param ThumbnailsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ThumbnailSet $body, ?ThumbnailsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/thumbnails';
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
     * @return ThumbnailsRequestBuilder
    */
    public function withUrl(string $rawUrl): ThumbnailsRequestBuilder {
        return new ThumbnailsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
