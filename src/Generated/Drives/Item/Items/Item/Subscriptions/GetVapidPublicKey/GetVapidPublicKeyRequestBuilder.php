<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Subscriptions\GetVapidPublicKey;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getVapidPublicKey method.
*/
class GetVapidPublicKeyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetVapidPublicKeyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/subscriptions/getVapidPublicKey()');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the public key information required to validate push notifications according to RFC 8292 specifications.
     * @param GetVapidPublicKeyRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetVapidPublicKeyGetResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/subscription-getvapidpublickey?view=graph-rest-1.0 Find more info here
    */
    public function get(?GetVapidPublicKeyRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetVapidPublicKeyGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the public key information required to validate push notifications according to RFC 8292 specifications.
     * @param GetVapidPublicKeyRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetVapidPublicKeyRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GetVapidPublicKeyRequestBuilder
    */
    public function withUrl(string $rawUrl): GetVapidPublicKeyRequestBuilder {
        return new GetVapidPublicKeyRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
