<?php

namespace Microsoft\Graph\Generated\Users\Item\Onenote\Notebooks\Item\Sections\Item\CopyToNotebook;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\OnenoteOperation;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the copyToNotebook method.
*/
class CopyToNotebookRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new CopyToNotebookRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/onenote/notebooks/{notebook%2Did}/sections/{onenoteSection%2Did}/copyToNotebook');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * For Copy operations, you follow an asynchronous calling pattern:  First call the Copy action, and then poll the operation endpoint for the result. This API is available in the following national cloud deployments.
     * @param CopyToNotebookPostRequestBody $body The request body
     * @param CopyToNotebookRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OnenoteOperation|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/section-copytonotebook?view=graph-rest-1.0 Find more info here
    */
    public function post(CopyToNotebookPostRequestBody $body, ?CopyToNotebookRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OnenoteOperation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * For Copy operations, you follow an asynchronous calling pattern:  First call the Copy action, and then poll the operation endpoint for the result. This API is available in the following national cloud deployments.
     * @param CopyToNotebookPostRequestBody $body The request body
     * @param CopyToNotebookRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CopyToNotebookPostRequestBody $body, ?CopyToNotebookRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CopyToNotebookRequestBuilder
    */
    public function withUrl(string $rawUrl): CopyToNotebookRequestBuilder {
        return new CopyToNotebookRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
