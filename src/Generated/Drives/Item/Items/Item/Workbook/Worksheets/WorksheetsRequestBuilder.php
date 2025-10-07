<?php

namespace Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Workbook\Worksheets;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Add\AddRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Count\CountRequestBuilder;
use Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\WorkbookWorksheetItemRequestBuilder;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Generated\Models\WorkbookWorksheet;
use Microsoft\\Graph\\Generated\Models\WorkbookWorksheetCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the worksheets property of the microsoft.graph.workbook entity.
*/
class WorksheetsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the add method.
    */
    public function add(): AddRequestBuilder {
        return new AddRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the worksheets property of the microsoft.graph.workbook entity.
     * @param string $workbookWorksheetId The unique identifier of workbookWorksheet
     * @return WorkbookWorksheetItemRequestBuilder
    */
    public function byWorkbookWorksheetId(string $workbookWorksheetId): WorkbookWorksheetItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['workbookWorksheet%2Did'] = $workbookWorksheetId;
        return new WorkbookWorksheetItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WorksheetsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/workbook/worksheets{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Represents a collection of worksheets associated with the workbook. Read-only.
     * @param WorksheetsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkbookWorksheetCollectionResponse|null>
     * @throws Exception
    */
    public function get(?WorksheetsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkbookWorksheetCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to worksheets for drives
     * @param WorkbookWorksheet $body The request body
     * @param WorksheetsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkbookWorksheet|null>
     * @throws Exception
    */
    public function post(WorkbookWorksheet $body, ?WorksheetsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkbookWorksheet::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Represents a collection of worksheets associated with the workbook. Read-only.
     * @param WorksheetsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WorksheetsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to worksheets for drives
     * @param WorkbookWorksheet $body The request body
     * @param WorksheetsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(WorkbookWorksheet $body, ?WorksheetsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WorksheetsRequestBuilder
    */
    public function withUrl(string $rawUrl): WorksheetsRequestBuilder {
        return new WorksheetsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
