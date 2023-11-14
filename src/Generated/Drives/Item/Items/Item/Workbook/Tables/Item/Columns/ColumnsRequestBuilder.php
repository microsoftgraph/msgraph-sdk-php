<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\Columns;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\Columns\Add\AddRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\Columns\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\Columns\Item\WorkbookTableColumnItemRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\Columns\ItemAtWithIndex\ItemAtWithIndexRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\WorkbookTableColumn;
use Microsoft\Graph\Generated\Models\WorkbookTableColumnCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the columns property of the microsoft.graph.workbookTable entity.
*/
class ColumnsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the add method.
    */
    public function add(): AddRequestBuilder {
        return new AddRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the count method.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the columns property of the microsoft.graph.workbookTable entity.
     * @param string $workbookTableColumnId The unique identifier of workbookTableColumn
     * @return WorkbookTableColumnItemRequestBuilder
    */
    public function byWorkbookTableColumnId(string $workbookTableColumnId): WorkbookTableColumnItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['workbookTableColumn%2Did'] = $workbookTableColumnId;
        return new WorkbookTableColumnItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ColumnsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/workbook/tables/{workbookTable%2Did}/columns{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of tablecolumn objects. This API is available in the following national cloud deployments.
     * @param ColumnsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkbookTableColumnCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/tablecolumn-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?ColumnsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkbookTableColumnCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the itemAt method.
     * @param int $index Usage: index={index}
     * @return ItemAtWithIndexRequestBuilder
    */
    public function itemAtWithIndex(int $index): ItemAtWithIndexRequestBuilder {
        return new ItemAtWithIndexRequestBuilder($this->pathParameters, $this->requestAdapter, $index);
    }

    /**
     * Use this API to create a new TableColumn. This API is available in the following national cloud deployments.
     * @param WorkbookTableColumn $body The request body
     * @param ColumnsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkbookTableColumn|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/table-post-columns?view=graph-rest-1.0 Find more info here
    */
    public function post(WorkbookTableColumn $body, ?ColumnsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkbookTableColumn::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a list of tablecolumn objects. This API is available in the following national cloud deployments.
     * @param ColumnsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ColumnsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Use this API to create a new TableColumn. This API is available in the following national cloud deployments.
     * @param WorkbookTableColumn $body The request body
     * @param ColumnsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(WorkbookTableColumn $body, ?ColumnsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ColumnsRequestBuilder
    */
    public function withUrl(string $rawUrl): ColumnsRequestBuilder {
        return new ColumnsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
