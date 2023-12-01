<?php

namespace Microsoft\Graph\Generated\Drives\Item\EscapedList\Operations;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Drives\Item\EscapedList\Operations\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\EscapedList\Operations\Item\RichLongRunningOperationItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\RichLongRunningOperation;
use Microsoft\Graph\Generated\Models\RichLongRunningOperationCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the operations property of the microsoft.graph.list entity.
*/
class OperationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the operations property of the microsoft.graph.list entity.
     * @param string $richLongRunningOperationId The unique identifier of richLongRunningOperation
     * @return RichLongRunningOperationItemRequestBuilder
    */
    public function byRichLongRunningOperationId(string $richLongRunningOperationId): RichLongRunningOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['richLongRunningOperation%2Did'] = $richLongRunningOperationId;
        return new RichLongRunningOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new OperationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/drives/{drive%2Did}/list/operations{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The collection of long-running operations on the list.
     * @param OperationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RichLongRunningOperationCollectionResponse|null>
     * @throws Exception
    */
    public function get(?OperationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RichLongRunningOperationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to operations for drives
     * @param RichLongRunningOperation $body The request body
     * @param OperationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RichLongRunningOperation|null>
     * @throws Exception
    */
    public function post(RichLongRunningOperation $body, ?OperationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RichLongRunningOperation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The collection of long-running operations on the list.
     * @param OperationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OperationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to operations for drives
     * @param RichLongRunningOperation $body The request body
     * @param OperationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RichLongRunningOperation $body, ?OperationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return OperationsRequestBuilder
    */
    public function withUrl(string $rawUrl): OperationsRequestBuilder {
        return new OperationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
