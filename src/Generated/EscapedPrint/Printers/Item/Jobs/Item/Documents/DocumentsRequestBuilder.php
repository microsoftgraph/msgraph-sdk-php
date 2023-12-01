<?php

namespace Microsoft\Graph\Generated\EscapedPrint\Printers\Item\Jobs\Item\Documents;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\EscapedPrint\Printers\Item\Jobs\Item\Documents\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\EscapedPrint\Printers\Item\Jobs\Item\Documents\Item\PrintDocumentItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\PrintDocument;
use Microsoft\Graph\Generated\Models\PrintDocumentCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the documents property of the microsoft.graph.printJob entity.
*/
class DocumentsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the documents property of the microsoft.graph.printJob entity.
     * @param string $printDocumentId The unique identifier of printDocument
     * @return PrintDocumentItemRequestBuilder
    */
    public function byPrintDocumentId(string $printDocumentId): PrintDocumentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['printDocument%2Did'] = $printDocumentId;
        return new PrintDocumentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DocumentsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/print/printers/{printer%2Did}/jobs/{printJob%2Did}/documents{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get documents from print
     * @param DocumentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PrintDocumentCollectionResponse|null>
     * @throws Exception
    */
    public function get(?DocumentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PrintDocumentCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to documents for print
     * @param PrintDocument $body The request body
     * @param DocumentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PrintDocument|null>
     * @throws Exception
    */
    public function post(PrintDocument $body, ?DocumentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PrintDocument::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get documents from print
     * @param DocumentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DocumentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to documents for print
     * @param PrintDocument $body The request body
     * @param DocumentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PrintDocument $body, ?DocumentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DocumentsRequestBuilder
    */
    public function withUrl(string $rawUrl): DocumentsRequestBuilder {
        return new DocumentsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
