<?php

namespace Microsoft\Graph\Generated\Sites\Item\Onenote\Notebooks\GetRecentNotebooksWithIncludePersonalNotebooks;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getRecentNotebooks method.
*/
class GetRecentNotebooksWithIncludePersonalNotebooksRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetRecentNotebooksWithIncludePersonalNotebooksRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param bool|null $includePersonalNotebooks Usage: includePersonalNotebooks={includePersonalNotebooks}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?bool $includePersonalNotebooks = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/sites/{site%2Did}/onenote/notebooks/getRecentNotebooks(includePersonalNotebooks={includePersonalNotebooks}){?%24count,%24filter,%24search,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['includePersonalNotebooks'] = $includePersonalNotebooks;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function getRecentNotebooks
     * @param GetRecentNotebooksWithIncludePersonalNotebooksRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetRecentNotebooksWithIncludePersonalNotebooksGetResponse|null>
     * @throws Exception
    */
    public function get(?GetRecentNotebooksWithIncludePersonalNotebooksRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetRecentNotebooksWithIncludePersonalNotebooksGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function getRecentNotebooks
     * @param GetRecentNotebooksWithIncludePersonalNotebooksRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetRecentNotebooksWithIncludePersonalNotebooksRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GetRecentNotebooksWithIncludePersonalNotebooksRequestBuilder
    */
    public function withUrl(string $rawUrl): GetRecentNotebooksWithIncludePersonalNotebooksRequestBuilder {
        return new GetRecentNotebooksWithIncludePersonalNotebooksRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
