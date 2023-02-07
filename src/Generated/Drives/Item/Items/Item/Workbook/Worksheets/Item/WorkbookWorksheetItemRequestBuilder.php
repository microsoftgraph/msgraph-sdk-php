<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\ChartsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\Item\WorkbookChartItemRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\MicrosoftGraphCellWithRowWithColumn\MicrosoftGraphCellWithRowWithColumnRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\MicrosoftGraphRange\MicrosoftGraphRangeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\MicrosoftGraphRangeWithAddress\MicrosoftGraphRangeWithAddressRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\MicrosoftGraphUsedRange\MicrosoftGraphUsedRangeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\MicrosoftGraphUsedRangeWithValuesOnly\MicrosoftGraphUsedRangeWithValuesOnlyRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Names\Item\WorkbookNamedItemItemRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Names\NamesRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\PivotTables\Item\WorkbookPivotTableItemRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\PivotTables\PivotTablesRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Protection\ProtectionRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Tables\Item\WorkbookTableItemRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Tables\TablesRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\WorkbookWorksheet;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the worksheets property of the microsoft.graph.workbook entity.
*/
class WorkbookWorksheetItemRequestBuilder 
{
    /**
     * Provides operations to manage the charts property of the microsoft.graph.workbookWorksheet entity.
    */
    public function charts(): ChartsRequestBuilder {
        return new ChartsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the range method.
    */
    public function microsoftGraphRange(): MicrosoftGraphRangeRequestBuilder {
        return new MicrosoftGraphRangeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the usedRange method.
    */
    public function microsoftGraphUsedRange(): MicrosoftGraphUsedRangeRequestBuilder {
        return new MicrosoftGraphUsedRangeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the names property of the microsoft.graph.workbookWorksheet entity.
    */
    public function names(): NamesRequestBuilder {
        return new NamesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
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
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the tables property of the microsoft.graph.workbookWorksheet entity.
    */
    public function tables(): TablesRequestBuilder {
        return new TablesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the charts property of the microsoft.graph.workbookWorksheet entity.
     * @param string $id Unique identifier of the item
     * @return WorkbookChartItemRequestBuilder
    */
    public function chartsById(string $id): WorkbookChartItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['workbookChart%2Did'] = $id;
        return new WorkbookChartItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WorkbookWorksheetItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/workbook/worksheets/{workbookWorksheet%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property worksheets for drives
     * @param WorkbookWorksheetItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?WorkbookWorksheetItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
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
     * Represents a collection of worksheets associated with the workbook. Read-only.
     * @param WorkbookWorksheetItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?WorkbookWorksheetItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [WorkbookWorksheet::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the cell method.
     * @param int $column Usage: column={column}
     * @param int $row Usage: row={row}
     * @return MicrosoftGraphCellWithRowWithColumnRequestBuilder
    */
    public function microsoftGraphCellWithRowWithColumn(int $column, int $row): MicrosoftGraphCellWithRowWithColumnRequestBuilder {
        return new MicrosoftGraphCellWithRowWithColumnRequestBuilder($this->pathParameters, $this->requestAdapter, $column, $row);
    }

    /**
     * Provides operations to call the range method.
     * @param string $address Usage: address='{address}'
     * @return MicrosoftGraphRangeWithAddressRequestBuilder
    */
    public function microsoftGraphRangeWithAddress(string $address): MicrosoftGraphRangeWithAddressRequestBuilder {
        return new MicrosoftGraphRangeWithAddressRequestBuilder($this->pathParameters, $this->requestAdapter, $address);
    }

    /**
     * Provides operations to call the usedRange method.
     * @param bool $valuesOnly Usage: valuesOnly={valuesOnly}
     * @return MicrosoftGraphUsedRangeWithValuesOnlyRequestBuilder
    */
    public function microsoftGraphUsedRangeWithValuesOnly(bool $valuesOnly): MicrosoftGraphUsedRangeWithValuesOnlyRequestBuilder {
        return new MicrosoftGraphUsedRangeWithValuesOnlyRequestBuilder($this->pathParameters, $this->requestAdapter, $valuesOnly);
    }

    /**
     * Provides operations to manage the names property of the microsoft.graph.workbookWorksheet entity.
     * @param string $id Unique identifier of the item
     * @return WorkbookNamedItemItemRequestBuilder
    */
    public function namesById(string $id): WorkbookNamedItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['workbookNamedItem%2Did'] = $id;
        return new WorkbookNamedItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property worksheets in drives
     * @param WorkbookWorksheet $body The request body
     * @param WorkbookWorksheetItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(WorkbookWorksheet $body, ?WorkbookWorksheetItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [WorkbookWorksheet::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the pivotTables property of the microsoft.graph.workbookWorksheet entity.
     * @param string $id Unique identifier of the item
     * @return WorkbookPivotTableItemRequestBuilder
    */
    public function pivotTablesById(string $id): WorkbookPivotTableItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['workbookPivotTable%2Did'] = $id;
        return new WorkbookPivotTableItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the tables property of the microsoft.graph.workbookWorksheet entity.
     * @param string $id Unique identifier of the item
     * @return WorkbookTableItemRequestBuilder
    */
    public function tablesById(string $id): WorkbookTableItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['workbookTable%2Did'] = $id;
        return new WorkbookTableItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property worksheets for drives
     * @param WorkbookWorksheetItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WorkbookWorksheetItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Represents a collection of worksheets associated with the workbook. Read-only.
     * @param WorkbookWorksheetItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WorkbookWorksheetItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property worksheets in drives
     * @param WorkbookWorksheet $body The request body
     * @param WorkbookWorksheetItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(WorkbookWorksheet $body, ?WorkbookWorksheetItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
