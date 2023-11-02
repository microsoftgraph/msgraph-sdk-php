<?php

namespace Microsoft\Graph\Generated\Shares\Item\EscapedList\Items\Item\DocumentSetVersions\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\DocumentSetVersion;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Shares\Item\EscapedList\Items\Item\DocumentSetVersions\Item\Fields\FieldsRequestBuilder;
use Microsoft\Graph\Generated\Shares\Item\EscapedList\Items\Item\DocumentSetVersions\Item\Restore\RestoreRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the documentSetVersions property of the microsoft.graph.listItem entity.
*/
class DocumentSetVersionItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the fields property of the microsoft.graph.listItemVersion entity.
    */
    public function fields(): FieldsRequestBuilder {
        return new FieldsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the restore method.
    */
    public function restore(): RestoreRequestBuilder {
        return new RestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DocumentSetVersionItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/shares/{sharedDriveItem%2Did}/list/items/{listItem%2Did}/documentSetVersions/{documentSetVersion%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a version of a document set in a list. This API is available in the following national cloud deployments.
     * @param DocumentSetVersionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/documentsetversion-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?DocumentSetVersionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a documentSetVersion object. This API is available in the following national cloud deployments.
     * @param DocumentSetVersionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DocumentSetVersion|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/documentsetversion-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?DocumentSetVersionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DocumentSetVersion::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property documentSetVersions in shares
     * @param DocumentSetVersion $body The request body
     * @param DocumentSetVersionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DocumentSetVersion|null>
     * @throws Exception
    */
    public function patch(DocumentSetVersion $body, ?DocumentSetVersionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DocumentSetVersion::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a version of a document set in a list. This API is available in the following national cloud deployments.
     * @param DocumentSetVersionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DocumentSetVersionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a documentSetVersion object. This API is available in the following national cloud deployments.
     * @param DocumentSetVersionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DocumentSetVersionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property documentSetVersions in shares
     * @param DocumentSetVersion $body The request body
     * @param DocumentSetVersionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DocumentSetVersion $body, ?DocumentSetVersionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DocumentSetVersionItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DocumentSetVersionItemRequestBuilder {
        return new DocumentSetVersionItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
