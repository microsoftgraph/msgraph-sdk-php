<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\ItemWithName;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\ItemWithName\Axes\AxesRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\ItemWithName\DataLabels\DataLabelsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\ItemWithName\Format\FormatRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\ItemWithName\Image\ImageRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\ItemWithName\ImageWithWidth\ImageWithWidthRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\ItemWithName\ImageWithWidthWithHeight\ImageWithWidthWithHeightRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\ItemWithName\ImageWithWidthWithHeightWithFittingMode\ImageWithWidthWithHeightWithFittingModeRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\ItemWithName\Legend\LegendRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\ItemWithName\Series\SeriesRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\ItemWithName\SetData\SetDataRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\ItemWithName\SetPosition\SetPositionRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\ItemWithName\Title\TitleRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\ItemWithName\Worksheet\WorksheetRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\WorkbookChart;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the item method.
*/
class ItemWithNameRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the axes property of the microsoft.graph.workbookChart entity.
    */
    public function axes(): AxesRequestBuilder {
        return new AxesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the dataLabels property of the microsoft.graph.workbookChart entity.
    */
    public function dataLabels(): DataLabelsRequestBuilder {
        return new DataLabelsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the format property of the microsoft.graph.workbookChart entity.
    */
    public function format(): FormatRequestBuilder {
        return new FormatRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the image method.
    */
    public function image(): ImageRequestBuilder {
        return new ImageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the legend property of the microsoft.graph.workbookChart entity.
    */
    public function legend(): LegendRequestBuilder {
        return new LegendRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the series property of the microsoft.graph.workbookChart entity.
    */
    public function series(): SeriesRequestBuilder {
        return new SeriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the setData method.
    */
    public function setData(): SetDataRequestBuilder {
        return new SetDataRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the setPosition method.
    */
    public function setPosition(): SetPositionRequestBuilder {
        return new SetPositionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the title property of the microsoft.graph.workbookChart entity.
    */
    public function title(): TitleRequestBuilder {
        return new TitleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the worksheet property of the microsoft.graph.workbookChart entity.
    */
    public function worksheet(): WorksheetRequestBuilder {
        return new WorksheetRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ItemWithNameRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $name Usage: name='{name}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $name = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/workbook/worksheets/{workbookWorksheet%2Did}/charts/item(name=\'{name}\')');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['name'] = $name;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function item
     * @param ItemWithNameRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkbookChart|null>
     * @throws Exception
    */
    public function get(?ItemWithNameRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkbookChart::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the image method.
     * @param int $width Usage: width={width}
     * @return ImageWithWidthRequestBuilder
    */
    public function imageWithWidth(int $width): ImageWithWidthRequestBuilder {
        return new ImageWithWidthRequestBuilder($this->pathParameters, $this->requestAdapter, $width);
    }

    /**
     * Provides operations to call the image method.
     * @param int $height Usage: height={height}
     * @param int $width Usage: width={width}
     * @return ImageWithWidthWithHeightRequestBuilder
    */
    public function imageWithWidthWithHeight(int $height, int $width): ImageWithWidthWithHeightRequestBuilder {
        return new ImageWithWidthWithHeightRequestBuilder($this->pathParameters, $this->requestAdapter, $height, $width);
    }

    /**
     * Provides operations to call the image method.
     * @param string $fittingMode Usage: fittingMode='{fittingMode}'
     * @param int $height Usage: height={height}
     * @param int $width Usage: width={width}
     * @return ImageWithWidthWithHeightWithFittingModeRequestBuilder
    */
    public function imageWithWidthWithHeightWithFittingMode(string $fittingMode, int $height, int $width): ImageWithWidthWithHeightWithFittingModeRequestBuilder {
        return new ImageWithWidthWithHeightWithFittingModeRequestBuilder($this->pathParameters, $this->requestAdapter, $fittingMode, $height, $width);
    }

    /**
     * Invoke function item
     * @param ItemWithNameRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ItemWithNameRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ItemWithNameRequestBuilder
    */
    public function withUrl(string $rawUrl): ItemWithNameRequestBuilder {
        return new ItemWithNameRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
