<?php

namespace Microsoft\Graph\Generated\Sites\Item\ContentTypes\Item\CopyToDefaultContentLocation;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the copyToDefaultContentLocation method.
*/
class CopyToDefaultContentLocationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CopyToDefaultContentLocationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/sites/{site%2Did}/contentTypes/{contentType%2Did}/copyToDefaultContentLocation');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Copy a file to a default content location in a content type. The file can then be added as a default file or template via a POST operation.
     * @param CopyToDefaultContentLocationPostRequestBody $body The request body
     * @param CopyToDefaultContentLocationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/contenttype-copytodefaultcontentlocation?view=graph-rest-1.0 Find more info here
    */
    public function post(CopyToDefaultContentLocationPostRequestBody $body, ?CopyToDefaultContentLocationRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Copy a file to a default content location in a content type. The file can then be added as a default file or template via a POST operation.
     * @param CopyToDefaultContentLocationPostRequestBody $body The request body
     * @param CopyToDefaultContentLocationRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CopyToDefaultContentLocationPostRequestBody $body, ?CopyToDefaultContentLocationRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return CopyToDefaultContentLocationRequestBuilder
    */
    public function withUrl(string $rawUrl): CopyToDefaultContentLocationRequestBuilder {
        return new CopyToDefaultContentLocationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
