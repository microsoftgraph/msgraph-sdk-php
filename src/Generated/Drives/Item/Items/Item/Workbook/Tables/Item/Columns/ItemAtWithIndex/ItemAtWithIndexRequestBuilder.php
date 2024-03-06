<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\Columns\ItemAtWithIndex;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\Columns\ItemAtWithIndex\DataBodyRange\DataBodyRangeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\Columns\ItemAtWithIndex\Filter\FilterRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\Columns\ItemAtWithIndex\HeaderRowRange\HeaderRowRangeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\Columns\ItemAtWithIndex\Range\RangeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\Columns\ItemAtWithIndex\TotalRowRange\TotalRowRangeRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\WorkbookTableColumn;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the itemAt method.
*/
class ItemAtWithIndexRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the dataBodyRange method.
    */
    public function dataBodyRange(): DataBodyRangeRequestBuilder {
        return new DataBodyRangeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the filter property of the microsoft.graph.workbookTableColumn entity.
    */
    public function filter(): FilterRequestBuilder {
        return new FilterRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to call the totalRowRange method.
    */
    public function totalRowRange(): TotalRowRangeRequestBuilder {
        return new TotalRowRangeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ItemAtWithIndexRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param int|null $index Usage: index={index}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?int $index = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/workbook/tables/{workbookTable%2Did}/columns/itemAt(index={index})');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['index'] = $index;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function itemAt
     * @param ItemAtWithIndexRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkbookTableColumn|null>
     * @throws Exception
    */
    public function get(?ItemAtWithIndexRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkbookTableColumn::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function itemAt
     * @param ItemAtWithIndexRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ItemAtWithIndexRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ItemAtWithIndexRequestBuilder
    */
    public function withUrl(string $rawUrl): ItemAtWithIndexRequestBuilder {
        return new ItemAtWithIndexRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
