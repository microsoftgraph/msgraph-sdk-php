<?php

namespace Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Workbook\TableRowOperationResultWithKey;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Generated\Models\WorkbookTableRow;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the tableRowOperationResult method.
*/
class TableRowOperationResultWithKeyRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new TableRowOperationResultWithKeyRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $key Usage: key='{key}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $key = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/workbook/tableRowOperationResult(key=\'{key}\')');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['key'] = $key;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * This function is the last in a series of steps to create a workbookTableRow resource asynchronously. A best practice to create multiple table rows is to batch them in one create tableRow operation and carry out the operation asynchronously. An asynchronous request to create table rows involves the following steps:1. Issue an async Create tableRow request and get the query URL returned in the Location response header.2. Use the query URL returned from step 1 to issue the Get workbookOperation request and get the operation ID for step 3.     Alternatively, for convenience, after you get a succeeded operationStatus result, you can get the query URL from the resourceLocation property of the workbookOperation returned in the response, and apply the query URL to step 3. 3. Use the query URL returned from step 2 as the GET request URL for this function tableRowOperationResult. A successful function call returns the new table rows in a workbookTableRow resource. This function does not do anything if called independently.
     * @param TableRowOperationResultWithKeyRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WorkbookTableRow|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/workbook-tablerowoperationresult?view=graph-rest-1.0 Find more info here
    */
    public function get(?TableRowOperationResultWithKeyRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WorkbookTableRow::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * This function is the last in a series of steps to create a workbookTableRow resource asynchronously. A best practice to create multiple table rows is to batch them in one create tableRow operation and carry out the operation asynchronously. An asynchronous request to create table rows involves the following steps:1. Issue an async Create tableRow request and get the query URL returned in the Location response header.2. Use the query URL returned from step 1 to issue the Get workbookOperation request and get the operation ID for step 3.     Alternatively, for convenience, after you get a succeeded operationStatus result, you can get the query URL from the resourceLocation property of the workbookOperation returned in the response, and apply the query URL to step 3. 3. Use the query URL returned from step 2 as the GET request URL for this function tableRowOperationResult. A successful function call returns the new table rows in a workbookTableRow resource. This function does not do anything if called independently.
     * @param TableRowOperationResultWithKeyRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TableRowOperationResultWithKeyRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return TableRowOperationResultWithKeyRequestBuilder
    */
    public function withUrl(string $rawUrl): TableRowOperationResultWithKeyRequestBuilder {
        return new TableRowOperationResultWithKeyRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
