<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\ClearFilters\ClearFiltersRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\Columns\ColumnsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\ConvertToRange\ConvertToRangeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\DataBodyRange\DataBodyRangeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\HeaderRowRangeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\Range\RangeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\ReapplyFilters\ReapplyFiltersRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\Rows\RowsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\Sort\SortRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\TotalRowRange\TotalRowRangeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\Worksheet\WorksheetRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\WorkbookTable;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the tables property of the microsoft.graph.workbook entity.
*/
class WorkbookTableItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the clearFilters method.
    */
    public function clearFilters(): ClearFiltersRequestBuilder {
        return new ClearFiltersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the columns property of the microsoft.graph.workbookTable entity.
    */
    public function columns(): ColumnsRequestBuilder {
        return new ColumnsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the convertToRange method.
    */
    public function convertToRange(): ConvertToRangeRequestBuilder {
        return new ConvertToRangeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dataBodyRange method.
    */
    public function dataBodyRange(): DataBodyRangeRequestBuilder {
        return new DataBodyRangeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the headerRowRange method.
    */
    public function headerRowRange(): HeaderRowRangeRequestBuilder {
        return new HeaderRowRangeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the range method.
    */
    public function range(): RangeRequestBuilder {
        return new RangeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the reapplyFilters method.
    */
    public function reapplyFilters(): ReapplyFiltersRequestBuilder {
        return new ReapplyFiltersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the rows property of the microsoft.graph.workbookTable entity.
    */
    public function rows(): RowsRequestBuilder {
        return new RowsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sort property of the microsoft.graph.workbookTable entity.
    */
    public function sort(): SortRequestBuilder {
        return new SortRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the totalRowRange method.
    */
    public function totalRowRange(): TotalRowRangeRequestBuilder {
        return new TotalRowRangeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the worksheet property of the microsoft.graph.workbookTable entity.
    */
    public function worksheet(): WorksheetRequestBuilder {
        return new WorksheetRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WorkbookTableItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/workbook/tables/{workbookTable%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes the table. This API is available in the following national cloud deployments.
     * @param WorkbookTableItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/table-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?WorkbookTableItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Retrieve the properties and relationships of table object. This API is available in the following national cloud deployments.
     * @param WorkbookTableItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/table-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?WorkbookTableItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [WorkbookTable::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the properties of table object. This API is available in the following national cloud deployments.
     * @param WorkbookTable $body The request body
     * @param WorkbookTableItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/table-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(WorkbookTable $body, ?WorkbookTableItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [WorkbookTable::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Deletes the table. This API is available in the following national cloud deployments.
     * @param WorkbookTableItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WorkbookTableItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Retrieve the properties and relationships of table object. This API is available in the following national cloud deployments.
     * @param WorkbookTableItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WorkbookTableItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Update the properties of table object. This API is available in the following national cloud deployments.
     * @param WorkbookTable $body The request body
     * @param WorkbookTableItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(WorkbookTable $body, ?WorkbookTableItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
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
     * @return WorkbookTableItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WorkbookTableItemRequestBuilder {
        return new WorkbookTableItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
