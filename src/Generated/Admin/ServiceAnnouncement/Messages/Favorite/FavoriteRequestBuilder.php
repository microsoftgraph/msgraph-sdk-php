<?php

namespace Microsoft\Graph\Generated\Admin\ServiceAnnouncement\Messages\Favorite;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the favorite method.
*/
class FavoriteRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new FavoriteRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/serviceAnnouncement/messages/favorite');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Change the status of a list of serviceUpdateMessages to favorite for the signed in user.
     * @param FavoritePostRequestBody $body The request body
     * @param FavoriteRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FavoritePostResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/serviceupdatemessage-favorite?view=graph-rest-1.0 Find more info here
    */
    public function post(FavoritePostRequestBody $body, ?FavoriteRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FavoritePostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Change the status of a list of serviceUpdateMessages to favorite for the signed in user.
     * @param FavoritePostRequestBody $body The request body
     * @param FavoriteRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(FavoritePostRequestBody $body, ?FavoriteRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return FavoriteRequestBuilder
    */
    public function withUrl(string $rawUrl): FavoriteRequestBuilder {
        return new FavoriteRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
