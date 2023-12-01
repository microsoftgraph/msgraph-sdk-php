<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Comments;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Comments\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Comments\Item\WorkbookCommentItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\WorkbookComment;
use Microsoft\Graph\Generated\Models\WorkbookCommentCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the comments property of the microsoft.graph.workbook entity.
*/
class CommentsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the comments property of the microsoft.graph.workbook entity.
     * @param string $workbookCommentId The unique identifier of workbookComment
     * @return WorkbookCommentItemRequestBuilder
    */
    public function byWorkbookCommentId(string $workbookCommentId): WorkbookCommentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['workbookComment%2Did'] = $workbookCommentId;
        return new WorkbookCommentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CommentsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/workbook/comments{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Represents a collection of comments in a workbook.
     * @param CommentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkbookCommentCollectionResponse|null>
     * @throws Exception
    */
    public function get(?CommentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkbookCommentCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to comments for drives
     * @param WorkbookComment $body The request body
     * @param CommentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkbookComment|null>
     * @throws Exception
    */
    public function post(WorkbookComment $body, ?CommentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkbookComment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Represents a collection of comments in a workbook.
     * @param CommentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CommentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to comments for drives
     * @param WorkbookComment $body The request body
     * @param CommentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(WorkbookComment $body, ?CommentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CommentsRequestBuilder
    */
    public function withUrl(string $rawUrl): CommentsRequestBuilder {
        return new CommentsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
