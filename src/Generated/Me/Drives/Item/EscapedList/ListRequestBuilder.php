<?php

namespace Microsoft\Graph\Generated\Me\Drives\Item\EscapedList;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Me\Drives\Item\EscapedList\Columns\ColumnsRequestBuilder;
use Microsoft\Graph\Generated\Me\Drives\Item\EscapedList\Columns\Item\ColumnDefinitionItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Drives\Item\EscapedList\ContentTypes\ContentTypesRequestBuilder;
use Microsoft\Graph\Generated\Me\Drives\Item\EscapedList\ContentTypes\Item\ContentTypeItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Drives\Item\EscapedList\Drive\DriveRequestBuilder;
use Microsoft\Graph\Generated\Me\Drives\Item\EscapedList\Items\Item\ListItemItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Drives\Item\EscapedList\Items\ItemsRequestBuilder;
use Microsoft\Graph\Generated\Me\Drives\Item\EscapedList\Operations\Item\RichLongRunningOperationItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Drives\Item\EscapedList\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Generated\Me\Drives\Item\EscapedList\Subscriptions\Item\SubscriptionItemRequestBuilder;
use Microsoft\Graph\Generated\Me\Drives\Item\EscapedList\Subscriptions\SubscriptionsRequestBuilder;
use Microsoft\Graph\Generated\Models\EscapedList;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the list property of the microsoft.graph.drive entity.
*/
class ListRequestBuilder 
{
    /**
     * Provides operations to manage the columns property of the microsoft.graph.list entity.
    */
    public function columns(): ColumnsRequestBuilder {
        return new ColumnsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the contentTypes property of the microsoft.graph.list entity.
    */
    public function contentTypes(): ContentTypesRequestBuilder {
        return new ContentTypesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the drive property of the microsoft.graph.list entity.
    */
    public function drive(): DriveRequestBuilder {
        return new DriveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the items property of the microsoft.graph.list entity.
    */
    public function items(): ItemsRequestBuilder {
        return new ItemsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the operations property of the microsoft.graph.list entity.
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
     * Provides operations to manage the subscriptions property of the microsoft.graph.list entity.
    */
    public function subscriptions(): SubscriptionsRequestBuilder {
        return new SubscriptionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the columns property of the microsoft.graph.list entity.
     * @param string $id Unique identifier of the item
     * @return ColumnDefinitionItemRequestBuilder
    */
    public function columnsById(string $id): ColumnDefinitionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['columnDefinition%2Did'] = $id;
        return new ColumnDefinitionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ListRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/me/drives/{drive%2Did}/list{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Provides operations to manage the contentTypes property of the microsoft.graph.list entity.
     * @param string $id Unique identifier of the item
     * @return ContentTypeItemRequestBuilder
    */
    public function contentTypesById(string $id): ContentTypeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['contentType%2Did'] = $id;
        return new ContentTypeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property list for me
     * @param ListRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?ListRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * For drives in SharePoint, the underlying document library list. Read-only. Nullable.
     * @param ListRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?ListRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [EscapedList::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the items property of the microsoft.graph.list entity.
     * @param string $id Unique identifier of the item
     * @return ListItemItemRequestBuilder
    */
    public function itemsById(string $id): ListItemItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['listItem%2Did'] = $id;
        return new ListItemItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the operations property of the microsoft.graph.list entity.
     * @param string $id Unique identifier of the item
     * @return RichLongRunningOperationItemRequestBuilder
    */
    public function operationsById(string $id): RichLongRunningOperationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['richLongRunningOperation%2Did'] = $id;
        return new RichLongRunningOperationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property list in me
     * @param EscapedList $body The request body
     * @param ListRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(EscapedList $body, ?ListRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [EscapedList::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the subscriptions property of the microsoft.graph.list entity.
     * @param string $id Unique identifier of the item
     * @return SubscriptionItemRequestBuilder
    */
    public function subscriptionsById(string $id): SubscriptionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['subscription%2Did'] = $id;
        return new SubscriptionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property list for me
     * @param ListRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ListRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * For drives in SharePoint, the underlying document library list. Read-only. Nullable.
     * @param ListRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ListRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property list in me
     * @param EscapedList $body The request body
     * @param ListRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(EscapedList $body, ?ListRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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

}
