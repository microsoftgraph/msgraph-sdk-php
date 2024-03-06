<?php

namespace Microsoft\Graph\Generated\Organization\Item\Branding\Localizations\Item\Favicon;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Provides operations to manage the media for the organization entity.
*/
class FaviconRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new FaviconRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/organization/{organization%2Did}/branding/localizations/{organizationalBrandingLocalization%2Did}/favicon');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * A custom icon (favicon) to replace a default Microsoft product favicon on a Microsoft Entra tenant.
     * @param FaviconRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/organizationalbranding-list-localizations?view=graph-rest-1.0 Find more info here
    */
    public function get(?FaviconRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * A custom icon (favicon) to replace a default Microsoft product favicon on a Microsoft Entra tenant.
     * @param StreamInterface $body Binary request body
     * @param string $contentType The request body content type.
     * @param FaviconRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function put(StreamInterface $body, string $contentType, ?FaviconRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $contentType, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * A custom icon (favicon) to replace a default Microsoft product favicon on a Microsoft Entra tenant.
     * @param FaviconRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?FaviconRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "image/bmp, image/jpg, image/jpeg, image/gif, image/vnd.microsoft.icon, image/png, image/tiff, application/json");
        return $requestInfo;
    }

    /**
     * A custom icon (favicon) to replace a default Microsoft product favicon on a Microsoft Entra tenant.
     * @param StreamInterface $body Binary request body
     * @param string $contentType The request body content type.
     * @param FaviconRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(StreamInterface $body, string $contentType, ?FaviconRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setStreamContent($body, $contentType);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return FaviconRequestBuilder
    */
    public function withUrl(string $rawUrl): FaviconRequestBuilder {
        return new FaviconRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
