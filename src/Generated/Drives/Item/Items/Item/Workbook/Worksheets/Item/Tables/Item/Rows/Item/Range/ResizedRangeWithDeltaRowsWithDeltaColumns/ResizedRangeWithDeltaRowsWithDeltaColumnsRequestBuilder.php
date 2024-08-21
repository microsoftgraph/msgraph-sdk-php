<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Tables\Item\Rows\Item\Range\ResizedRangeWithDeltaRowsWithDeltaColumns;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\WorkbookRange;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the resizedRange method.
*/
class ResizedRangeWithDeltaRowsWithDeltaColumnsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ResizedRangeWithDeltaRowsWithDeltaColumnsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param int|null $deltaColumns Usage: deltaColumns={deltaColumns}
     * @param int|null $deltaRows Usage: deltaRows={deltaRows}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?int $deltaColumns = null, ?int $deltaRows = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/workbook/worksheets/{workbookWorksheet%2Did}/tables/{workbookTable%2Did}/rows/{workbookTableRow%2Did}/range()/resizedRange(deltaRows={deltaRows},deltaColumns={deltaColumns})');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['deltaColumns'] = $deltaColumns;
            $urlTplParams['deltaRows'] = $deltaRows;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function resizedRange
     * @param ResizedRangeWithDeltaRowsWithDeltaColumnsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkbookRange|null>
     * @throws Exception
    */
    public function get(?ResizedRangeWithDeltaRowsWithDeltaColumnsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkbookRange::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function resizedRange
     * @param ResizedRangeWithDeltaRowsWithDeltaColumnsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ResizedRangeWithDeltaRowsWithDeltaColumnsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ResizedRangeWithDeltaRowsWithDeltaColumnsRequestBuilder
    */
    public function withUrl(string $rawUrl): ResizedRangeWithDeltaRowsWithDeltaColumnsRequestBuilder {
        return new ResizedRangeWithDeltaRowsWithDeltaColumnsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
