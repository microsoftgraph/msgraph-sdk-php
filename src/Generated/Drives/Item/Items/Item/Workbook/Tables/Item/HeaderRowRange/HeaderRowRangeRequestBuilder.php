<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\BoundingRectWithAnotherRange\BoundingRectWithAnotherRangeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\CellWithRowWithColumn\CellWithRowWithColumnRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\Clear\ClearRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\ColumnsAfter\ColumnsAfterRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\ColumnsAfterWithCount\ColumnsAfterWithCountRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\ColumnsBefore\ColumnsBeforeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\ColumnsBeforeWithCount\ColumnsBeforeWithCountRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\ColumnWithColumn\ColumnWithColumnRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\Delete\DeleteRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\EntireColumn\EntireColumnRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\EntireRow\EntireRowRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\Format\FormatRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\Insert\InsertRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\IntersectionWithAnotherRange\IntersectionWithAnotherRangeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\LastCell\LastCellRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\LastColumn\LastColumnRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\LastRow\LastRowRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\Merge\MergeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\OffsetRangeWithRowOffsetWithColumnOffset\OffsetRangeWithRowOffsetWithColumnOffsetRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\ResizedRangeWithDeltaRowsWithDeltaColumns\ResizedRangeWithDeltaRowsWithDeltaColumnsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\RowsAbove\RowsAboveRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\RowsAboveWithCount\RowsAboveWithCountRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\RowsBelow\RowsBelowRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\RowsBelowWithCount\RowsBelowWithCountRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\RowWithRow\RowWithRowRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\Sort\SortRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\Unmerge\UnmergeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\UsedRange\UsedRangeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\UsedRangeWithValuesOnly\UsedRangeWithValuesOnlyRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\VisibleView\VisibleViewRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\HeaderRowRange\Worksheet\WorksheetRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\WorkbookRange;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the headerRowRange method.
*/
class HeaderRowRangeRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the clear method.
    */
    public function clear(): ClearRequestBuilder {
        return new ClearRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the columnsAfter method.
    */
    public function columnsAfter(): ColumnsAfterRequestBuilder {
        return new ColumnsAfterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the columnsBefore method.
    */
    public function columnsBefore(): ColumnsBeforeRequestBuilder {
        return new ColumnsBeforeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the delete method.
    */
    public function deletePath(): DeleteRequestBuilder {
        return new DeleteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the entireColumn method.
    */
    public function entireColumn(): EntireColumnRequestBuilder {
        return new EntireColumnRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the entireRow method.
    */
    public function entireRow(): EntireRowRequestBuilder {
        return new EntireRowRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the format property of the microsoft.graph.workbookRange entity.
    */
    public function format(): FormatRequestBuilder {
        return new FormatRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the insert method.
    */
    public function insert(): InsertRequestBuilder {
        return new InsertRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the lastCell method.
    */
    public function lastCell(): LastCellRequestBuilder {
        return new LastCellRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the lastColumn method.
    */
    public function lastColumn(): LastColumnRequestBuilder {
        return new LastColumnRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the lastRow method.
    */
    public function lastRow(): LastRowRequestBuilder {
        return new LastRowRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the merge method.
    */
    public function merge(): MergeRequestBuilder {
        return new MergeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rowsAbove method.
    */
    public function rowsAbove(): RowsAboveRequestBuilder {
        return new RowsAboveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the rowsBelow method.
    */
    public function rowsBelow(): RowsBelowRequestBuilder {
        return new RowsBelowRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sort property of the microsoft.graph.workbookRange entity.
    */
    public function sort(): SortRequestBuilder {
        return new SortRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unmerge method.
    */
    public function unmerge(): UnmergeRequestBuilder {
        return new UnmergeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the usedRange method.
    */
    public function usedRange(): UsedRangeRequestBuilder {
        return new UsedRangeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the visibleView method.
    */
    public function visibleView(): VisibleViewRequestBuilder {
        return new VisibleViewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the worksheet property of the microsoft.graph.workbookRange entity.
    */
    public function worksheet(): WorksheetRequestBuilder {
        return new WorksheetRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the boundingRect method.
     * @param string $anotherRange Usage: anotherRange='{anotherRange}'
     * @return BoundingRectWithAnotherRangeRequestBuilder
    */
    public function boundingRectWithAnotherRange(string $anotherRange): BoundingRectWithAnotherRangeRequestBuilder {
        return new BoundingRectWithAnotherRangeRequestBuilder($this->pathParameters, $this->requestAdapter, $anotherRange);
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
     * Provides operations to call the columnsAfter method.
     * @param int $count Usage: count={count}
     * @return ColumnsAfterWithCountRequestBuilder
    */
    public function columnsAfterWithCount(int $count): ColumnsAfterWithCountRequestBuilder {
        return new ColumnsAfterWithCountRequestBuilder($this->pathParameters, $this->requestAdapter, $count);
    }

    /**
     * Provides operations to call the columnsBefore method.
     * @param int $count Usage: count={count}
     * @return ColumnsBeforeWithCountRequestBuilder
    */
    public function columnsBeforeWithCount(int $count): ColumnsBeforeWithCountRequestBuilder {
        return new ColumnsBeforeWithCountRequestBuilder($this->pathParameters, $this->requestAdapter, $count);
    }

    /**
     * Provides operations to call the column method.
     * @param int $column Usage: column={column}
     * @return ColumnWithColumnRequestBuilder
    */
    public function columnWithColumn(int $column): ColumnWithColumnRequestBuilder {
        return new ColumnWithColumnRequestBuilder($this->pathParameters, $this->requestAdapter, $column);
    }

    /**
     * Instantiates a new HeaderRowRangeRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/workbook/tables/{workbookTable%2Did}/headerRowRange()');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Gets the range object associated with header row of the table.
     * @param HeaderRowRangeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkbookRange|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/table-headerrowrange?view=graph-rest-1.0 Find more info here
    */
    public function get(?HeaderRowRangeRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkbookRange::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the intersection method.
     * @param string $anotherRange Usage: anotherRange='{anotherRange}'
     * @return IntersectionWithAnotherRangeRequestBuilder
    */
    public function intersectionWithAnotherRange(string $anotherRange): IntersectionWithAnotherRangeRequestBuilder {
        return new IntersectionWithAnotherRangeRequestBuilder($this->pathParameters, $this->requestAdapter, $anotherRange);
    }

    /**
     * Provides operations to call the offsetRange method.
     * @param int $columnOffset Usage: columnOffset={columnOffset}
     * @param int $rowOffset Usage: rowOffset={rowOffset}
     * @return OffsetRangeWithRowOffsetWithColumnOffsetRequestBuilder
    */
    public function offsetRangeWithRowOffsetWithColumnOffset(int $columnOffset, int $rowOffset): OffsetRangeWithRowOffsetWithColumnOffsetRequestBuilder {
        return new OffsetRangeWithRowOffsetWithColumnOffsetRequestBuilder($this->pathParameters, $this->requestAdapter, $columnOffset, $rowOffset);
    }

    /**
     * Provides operations to call the resizedRange method.
     * @param int $deltaColumns Usage: deltaColumns={deltaColumns}
     * @param int $deltaRows Usage: deltaRows={deltaRows}
     * @return ResizedRangeWithDeltaRowsWithDeltaColumnsRequestBuilder
    */
    public function resizedRangeWithDeltaRowsWithDeltaColumns(int $deltaColumns, int $deltaRows): ResizedRangeWithDeltaRowsWithDeltaColumnsRequestBuilder {
        return new ResizedRangeWithDeltaRowsWithDeltaColumnsRequestBuilder($this->pathParameters, $this->requestAdapter, $deltaColumns, $deltaRows);
    }

    /**
     * Provides operations to call the rowsAbove method.
     * @param int $count Usage: count={count}
     * @return RowsAboveWithCountRequestBuilder
    */
    public function rowsAboveWithCount(int $count): RowsAboveWithCountRequestBuilder {
        return new RowsAboveWithCountRequestBuilder($this->pathParameters, $this->requestAdapter, $count);
    }

    /**
     * Provides operations to call the rowsBelow method.
     * @param int $count Usage: count={count}
     * @return RowsBelowWithCountRequestBuilder
    */
    public function rowsBelowWithCount(int $count): RowsBelowWithCountRequestBuilder {
        return new RowsBelowWithCountRequestBuilder($this->pathParameters, $this->requestAdapter, $count);
    }

    /**
     * Provides operations to call the row method.
     * @param int $row Usage: row={row}
     * @return RowWithRowRequestBuilder
    */
    public function rowWithRow(int $row): RowWithRowRequestBuilder {
        return new RowWithRowRequestBuilder($this->pathParameters, $this->requestAdapter, $row);
    }

    /**
     * Gets the range object associated with header row of the table.
     * @param HeaderRowRangeRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?HeaderRowRangeRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
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
     * @return HeaderRowRangeRequestBuilder
    */
    public function withUrl(string $rawUrl): HeaderRowRangeRequestBuilder {
        return new HeaderRowRangeRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
