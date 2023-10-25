<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Application\ApplicationRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\CloseSession\CloseSessionRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Comments\CommentsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\CreateSession\CreateSessionRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\FunctionsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Names\NamesRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\RefreshSession\RefreshSessionRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\SessionInfoResourceWithKey\SessionInfoResourceWithKeyRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\TableRowOperationResultWithKey\TableRowOperationResultWithKeyRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\TablesRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\WorksheetsRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Workbook;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the workbook property of the microsoft.graph.driveItem entity.
*/
class WorkbookRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the application property of the microsoft.graph.workbook entity.
    */
    public function application(): ApplicationRequestBuilder {
        return new ApplicationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the closeSession method.
    */
    public function closeSession(): CloseSessionRequestBuilder {
        return new CloseSessionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the comments property of the microsoft.graph.workbook entity.
    */
    public function comments(): CommentsRequestBuilder {
        return new CommentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the createSession method.
    */
    public function createSession(): CreateSessionRequestBuilder {
        return new CreateSessionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the functions property of the microsoft.graph.workbook entity.
    */
    public function functions(): FunctionsRequestBuilder {
        return new FunctionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the names property of the microsoft.graph.workbook entity.
    */
    public function names(): NamesRequestBuilder {
        return new NamesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the operations property of the microsoft.graph.workbook entity.
    */
    public function operations(): OperationsRequestBuilder {
        return new OperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the refreshSession method.
    */
    public function refreshSession(): RefreshSessionRequestBuilder {
        return new RefreshSessionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tables property of the microsoft.graph.workbook entity.
    */
    public function tables(): TablesRequestBuilder {
        return new TablesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the worksheets property of the microsoft.graph.workbook entity.
    */
    public function worksheets(): WorksheetsRequestBuilder {
        return new WorksheetsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WorkbookRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/workbook{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property workbook for drives
     * @param WorkbookRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?WorkbookRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
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
     * For files that are Excel spreadsheets, accesses the workbook API to work with the spreadsheet's contents. Nullable.
     * @param WorkbookRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?WorkbookRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Workbook::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property workbook in drives
     * @param Workbook $body The request body
     * @param WorkbookRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(Workbook $body, ?WorkbookRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [Workbook::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to call the sessionInfoResource method.
     * @param string $key Usage: key='{key}'
     * @return SessionInfoResourceWithKeyRequestBuilder
    */
    public function sessionInfoResourceWithKey(string $key): SessionInfoResourceWithKeyRequestBuilder {
        return new SessionInfoResourceWithKeyRequestBuilder($this->pathParameters, $this->requestAdapter, $key);
    }

    /**
     * Provides operations to call the tableRowOperationResult method.
     * @param string $key Usage: key='{key}'
     * @return TableRowOperationResultWithKeyRequestBuilder
    */
    public function tableRowOperationResultWithKey(string $key): TableRowOperationResultWithKeyRequestBuilder {
        return new TableRowOperationResultWithKeyRequestBuilder($this->pathParameters, $this->requestAdapter, $key);
    }

    /**
     * Delete navigation property workbook for drives
     * @param WorkbookRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WorkbookRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json, application/json");
        return $requestInfo;
    }

    /**
     * For files that are Excel spreadsheets, accesses the workbook API to work with the spreadsheet's contents. Nullable.
     * @param WorkbookRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WorkbookRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Update the navigation property workbook in drives
     * @param Workbook $body The request body
     * @param WorkbookRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Workbook $body, ?WorkbookRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WorkbookRequestBuilder
    */
    public function withUrl(string $rawUrl): WorkbookRequestBuilder {
        return new WorkbookRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
