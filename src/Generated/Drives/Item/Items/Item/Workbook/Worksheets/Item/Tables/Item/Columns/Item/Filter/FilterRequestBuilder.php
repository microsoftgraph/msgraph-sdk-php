<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Tables\Item\Columns\Item\Filter;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Tables\Item\Columns\Item\Filter\Apply\ApplyRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Tables\Item\Columns\Item\Filter\ApplyBottomItemsFilter\ApplyBottomItemsFilterRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Tables\Item\Columns\Item\Filter\ApplyBottomPercentFilter\ApplyBottomPercentFilterRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Tables\Item\Columns\Item\Filter\ApplyCellColorFilter\ApplyCellColorFilterRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Tables\Item\Columns\Item\Filter\ApplyCustomFilter\ApplyCustomFilterRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Tables\Item\Columns\Item\Filter\ApplyDynamicFilter\ApplyDynamicFilterRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Tables\Item\Columns\Item\Filter\ApplyFontColorFilter\ApplyFontColorFilterRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Tables\Item\Columns\Item\Filter\ApplyIconFilter\ApplyIconFilterRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Tables\Item\Columns\Item\Filter\ApplyTopItemsFilter\ApplyTopItemsFilterRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Tables\Item\Columns\Item\Filter\ApplyTopPercentFilter\ApplyTopPercentFilterRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Tables\Item\Columns\Item\Filter\ApplyValuesFilter\ApplyValuesFilterRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Tables\Item\Columns\Item\Filter\Clear\ClearRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\WorkbookFilter;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the filter property of the microsoft.graph.workbookTableColumn entity.
*/
class FilterRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the apply method.
    */
    public function apply(): ApplyRequestBuilder {
        return new ApplyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the applyBottomItemsFilter method.
    */
    public function applyBottomItemsFilter(): ApplyBottomItemsFilterRequestBuilder {
        return new ApplyBottomItemsFilterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the applyBottomPercentFilter method.
    */
    public function applyBottomPercentFilter(): ApplyBottomPercentFilterRequestBuilder {
        return new ApplyBottomPercentFilterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the applyCellColorFilter method.
    */
    public function applyCellColorFilter(): ApplyCellColorFilterRequestBuilder {
        return new ApplyCellColorFilterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the applyCustomFilter method.
    */
    public function applyCustomFilter(): ApplyCustomFilterRequestBuilder {
        return new ApplyCustomFilterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the applyDynamicFilter method.
    */
    public function applyDynamicFilter(): ApplyDynamicFilterRequestBuilder {
        return new ApplyDynamicFilterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the applyFontColorFilter method.
    */
    public function applyFontColorFilter(): ApplyFontColorFilterRequestBuilder {
        return new ApplyFontColorFilterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the applyIconFilter method.
    */
    public function applyIconFilter(): ApplyIconFilterRequestBuilder {
        return new ApplyIconFilterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the applyTopItemsFilter method.
    */
    public function applyTopItemsFilter(): ApplyTopItemsFilterRequestBuilder {
        return new ApplyTopItemsFilterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the applyTopPercentFilter method.
    */
    public function applyTopPercentFilter(): ApplyTopPercentFilterRequestBuilder {
        return new ApplyTopPercentFilterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the applyValuesFilter method.
    */
    public function applyValuesFilter(): ApplyValuesFilterRequestBuilder {
        return new ApplyValuesFilterRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the clear method.
    */
    public function clear(): ClearRequestBuilder {
        return new ClearRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new FilterRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/workbook/worksheets/{workbookWorksheet%2Did}/tables/{workbookTable%2Did}/columns/{workbookTableColumn%2Did}/filter{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property filter for drives
     * @param FilterRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?FilterRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Retrieve the filter applied to the column. Read-only.
     * @param FilterRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkbookFilter|null>
     * @throws Exception
    */
    public function get(?FilterRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkbookFilter::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property filter in drives
     * @param WorkbookFilter $body The request body
     * @param FilterRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkbookFilter|null>
     * @throws Exception
    */
    public function patch(WorkbookFilter $body, ?FilterRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkbookFilter::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property filter for drives
     * @param FilterRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?FilterRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Retrieve the filter applied to the column. Read-only.
     * @param FilterRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?FilterRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property filter in drives
     * @param WorkbookFilter $body The request body
     * @param FilterRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(WorkbookFilter $body, ?FilterRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return FilterRequestBuilder
    */
    public function withUrl(string $rawUrl): FilterRequestBuilder {
        return new FilterRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
