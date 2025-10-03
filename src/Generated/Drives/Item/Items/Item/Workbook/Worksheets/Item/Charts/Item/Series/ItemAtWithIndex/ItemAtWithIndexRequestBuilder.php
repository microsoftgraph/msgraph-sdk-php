<?php

namespace Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\Item\Series\ItemAtWithIndex;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\Item\Series\ItemAtWithIndex\Format\FormatRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\Item\Series\ItemAtWithIndex\Points\PointsRequestBuilder;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Generated\Models\WorkbookChartSeries;
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
     * Provides operations to manage the format property of the microsoft.graph.workbookChartSeries entity.
    */
    public function format(): FormatRequestBuilder {
        return new FormatRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the points property of the microsoft.graph.workbookChartSeries entity.
    */
    public function points(): PointsRequestBuilder {
        return new PointsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ItemAtWithIndexRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param int|null $index Usage: index={index}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?int $index = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/workbook/worksheets/{workbookWorksheet%2Did}/charts/{workbookChart%2Did}/series/itemAt(index={index})');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['index'] = $index;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieves a series based on its position in the collection
     * @param ItemAtWithIndexRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkbookChartSeries|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/chartseriescollection-itemat?view=graph-rest-1.0 Find more info here
    */
    public function get(?ItemAtWithIndexRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkbookChartSeries::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieves a series based on its position in the collection
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
