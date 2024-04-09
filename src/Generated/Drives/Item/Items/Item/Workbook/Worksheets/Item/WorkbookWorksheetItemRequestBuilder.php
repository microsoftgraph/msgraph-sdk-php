<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\CellWithRowWithColumn\CellWithRowWithColumnRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\ChartsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Names\NamesRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\PivotTables\PivotTablesRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Protection\ProtectionRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Range\RangeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\RangeWithAddress\RangeWithAddressRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Tables\TablesRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\UsedRange\UsedRangeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\UsedRangeWithValuesOnly\UsedRangeWithValuesOnlyRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\WorkbookWorksheet;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the worksheets property of the microsoft.graph.workbook entity.
*/
class WorkbookWorksheetItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the charts property of the microsoft.graph.workbookWorksheet entity.
    */
    public function charts(): ChartsRequestBuilder {
        return new ChartsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the names property of the microsoft.graph.workbookWorksheet entity.
    */
    public function names(): NamesRequestBuilder {
        return new NamesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the pivotTables property of the microsoft.graph.workbookWorksheet entity.
    */
    public function pivotTables(): PivotTablesRequestBuilder {
        return new PivotTablesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the protection property of the microsoft.graph.workbookWorksheet entity.
    */
    public function protection(): ProtectionRequestBuilder {
        return new ProtectionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the range method.
    */
    public function range(): RangeRequestBuilder {
        return new RangeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tables property of the microsoft.graph.workbookWorksheet entity.
    */
    public function tables(): TablesRequestBuilder {
        return new TablesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the usedRange method.
    */
    public function usedRange(): UsedRangeRequestBuilder {
        return new UsedRangeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cell method.
     * @param int $column Usage: column={column}
     * @param int $row Usage: row={row}
     * @return CellWithRowWithColumnRequestBuilder
    */
    public function cellWithRowWithColumn(int $column, int $row): CellWithRowWithColumnRequestBuilder {
        return new CellWithRowWithColumnRequestBuilder($this->pathParameters, $this->requestAdapter, $column, $row);
    }

    /**
     * Instantiates a new WorkbookWorksheetItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/workbook/worksheets/{workbookWorksheet%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes the worksheet from the workbook.
     * @param WorkbookWorksheetItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/worksheet-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?WorkbookWorksheetItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Retrieve the properties and relationships of worksheet object.
     * @param WorkbookWorksheetItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkbookWorksheet|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/worksheet-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?WorkbookWorksheetItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkbookWorksheet::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of worksheet object.
     * @param WorkbookWorksheet $body The request body
     * @param WorkbookWorksheetItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkbookWorksheet|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/worksheet-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(WorkbookWorksheet $body, ?WorkbookWorksheetItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkbookWorksheet::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the range method.
     * @param string $address Usage: address='{address}'
     * @return RangeWithAddressRequestBuilder
    */
    public function rangeWithAddress(string $address): RangeWithAddressRequestBuilder {
        return new RangeWithAddressRequestBuilder($this->pathParameters, $this->requestAdapter, $address);
    }

    /**
     * Deletes the worksheet from the workbook.
     * @param WorkbookWorksheetItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WorkbookWorksheetItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Retrieve the properties and relationships of worksheet object.
     * @param WorkbookWorksheetItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WorkbookWorksheetItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of worksheet object.
     * @param WorkbookWorksheet $body The request body
     * @param WorkbookWorksheetItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(WorkbookWorksheet $body, ?WorkbookWorksheetItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Provides operations to call the usedRange method.
     * @param bool $valuesOnly Usage: valuesOnly={valuesOnly}
     * @return UsedRangeWithValuesOnlyRequestBuilder
    */
    public function usedRangeWithValuesOnly(bool $valuesOnly): UsedRangeWithValuesOnlyRequestBuilder {
        return new UsedRangeWithValuesOnlyRequestBuilder($this->pathParameters, $this->requestAdapter, $valuesOnly);
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WorkbookWorksheetItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WorkbookWorksheetItemRequestBuilder {
        return new WorkbookWorksheetItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
