<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Application\ApplicationRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Comments\CommentsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Comments\Item\WorkbookCommentItemRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\FunctionsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\MicrosoftGraphCloseSession\CloseSessionRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\MicrosoftGraphCreateSession\CreateSessionRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\MicrosoftGraphRefreshSession\RefreshSessionRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\MicrosoftGraphSessionInfoResourceWithKey\SessionInfoResourceWithKeyRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\MicrosoftGraphTableRowOperationResultWithKey\TableRowOperationResultWithKeyRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Names\Item\WorkbookNamedItemItemRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Names\NamesRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Operations\Item\WorkbookOperationItemRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item\WorkbookTableItemRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\TablesRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\WorkbookWorksheetItemRequestBuilder;
use Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\WorksheetsRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Workbook;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the workbook property of the microsoft.graph.driveItem entity.
*/
class WorkbookRequestBuilder 
{
    /**
     * Provides operations to manage the application property of the microsoft.graph.workbook entity.
    */
    public function application(): ApplicationRequestBuilder {
        return new ApplicationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the comments property of the microsoft.graph.workbook entity.
    */
    public function comments(): CommentsRequestBuilder {
        return new CommentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the functions property of the microsoft.graph.workbook entity.
    */
    public function functions(): FunctionsRequestBuilder {
        return new FunctionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the closeSession method.
    */
    public function microsoftGraphCloseSession(): CloseSessionRequestBuilder {
        return new CloseSessionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the createSession method.
    */
    public function microsoftGraphCreateSession(): CreateSessionRequestBuilder {
        return new CreateSessionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the refreshSession method.
    */
    public function microsoftGraphRefreshSession(): RefreshSessionRequestBuilder {
        return new RefreshSessionRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the tables property of the microsoft.graph.workbook entity.
    */
    public function tables(): TablesRequestBuilder {
        return new TablesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the worksheets property of the microsoft.graph.workbook entity.
    */
    public function worksheets(): WorksheetsRequestBuilder {
        return new WorksheetsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the comments property of the microsoft.graph.workbook entity.
     * @param string $id Unique identifier of the item
     * @return WorkbookCommentItemRequestBuilder
    */
    public function commentsById(string $id): WorkbookCommentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['workbookComment%2Did'] = $id;
        return new WorkbookCommentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WorkbookRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/drives/{drive%2Did}/items/{driveItem%2Did}/workbook{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
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
     * Provides operations to call the sessionInfoResource method.
     * @param string $key Usage: key='{key}'
     * @return SessionInfoResourceWithKeyRequestBuilder
    */
    public function microsoftGraphSessionInfoResourceWithKey(string $key): SessionInfoResourceWithKeyRequestBuilder {
        return new SessionInfoResourceWithKeyRequestBuilder($this->pathParameters, $this->requestAdapter, $key);
    }

    /**
     * Provides operations to call the tableRowOperationResult method.
     * @param string $key Usage: key='{key}'
     * @return TableRowOperationResultWithKeyRequestBuilder
    */
    public function microsoftGraphTableRowOperationResultWithKey(string $key): TableRowOperationResultWithKeyRequestBuilder {
        return new TableRowOperationResultWithKeyRequestBuilder($this->pathParameters, $this->requestAdapter, $key);
    }

    /**
     * Provides operations to manage the names property of the microsoft.graph.workbook entity.
     * @param string $id Unique identifier of the item
     * @return WorkbookNamedItemItemRequestBuilder
    */
    public function namesById(string $id): WorkbookNamedItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['workbookNamedItem%2Did'] = $id;
        return new WorkbookNamedItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the operations property of the microsoft.graph.workbook entity.
     * @param string $id Unique identifier of the item
     * @return WorkbookOperationItemRequestBuilder
    */
    public function operationsById(string $id): WorkbookOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['workbookOperation%2Did'] = $id;
        return new WorkbookOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
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
     * Provides operations to manage the tables property of the microsoft.graph.workbook entity.
     * @param string $id Unique identifier of the item
     * @return WorkbookTableItemRequestBuilder
    */
    public function tablesById(string $id): WorkbookTableItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['workbookTable%2Did'] = $id;
        return new WorkbookTableItemRequestBuilder($urlTplParams, $this->requestAdapter);
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
     * For files that are Excel spreadsheets, accesses the workbook API to work with the spreadsheet's contents. Nullable.
     * @param WorkbookRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WorkbookRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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

    /**
     * Provides operations to manage the worksheets property of the microsoft.graph.workbook entity.
     * @param string $id Unique identifier of the item
     * @return WorkbookWorksheetItemRequestBuilder
    */
    public function worksheetsById(string $id): WorkbookWorksheetItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['workbookWorksheet%2Did'] = $id;
        return new WorkbookWorksheetItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
