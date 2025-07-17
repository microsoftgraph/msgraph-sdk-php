<?php

namespace Microsoft\Graph\Generated\Communications\Calls\Item\AddLargeGalleryView;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\AddLargeGalleryViewOperation;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the addLargeGalleryView method.
*/
class AddLargeGalleryViewRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AddLargeGalleryViewRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/communications/calls/{call%2Did}/addLargeGalleryView');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Add the large gallery view to a call.  For details about how to identify a large gallery view participant in a roster so that you can retrieve the relevant data to subscribe to the video feed, see Identify large gallery view participants in a roster.
     * @param AddLargeGalleryViewPostRequestBody $body The request body
     * @param AddLargeGalleryViewRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AddLargeGalleryViewOperation|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/call-addlargegalleryview?view=graph-rest-1.0 Find more info here
    */
    public function post(AddLargeGalleryViewPostRequestBody $body, ?AddLargeGalleryViewRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AddLargeGalleryViewOperation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Add the large gallery view to a call.  For details about how to identify a large gallery view participant in a roster so that you can retrieve the relevant data to subscribe to the video feed, see Identify large gallery view participants in a roster.
     * @param AddLargeGalleryViewPostRequestBody $body The request body
     * @param AddLargeGalleryViewRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AddLargeGalleryViewPostRequestBody $body, ?AddLargeGalleryViewRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AddLargeGalleryViewRequestBuilder
    */
    public function withUrl(string $rawUrl): AddLargeGalleryViewRequestBuilder {
        return new AddLargeGalleryViewRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
