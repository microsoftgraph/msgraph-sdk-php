<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\ReviewSets\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\EdiscoveryReviewSet;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\ReviewSets\Item\MicrosoftGraphSecurityAddToReviewSet\MicrosoftGraphSecurityAddToReviewSetRequestBuilder;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\ReviewSets\Item\MicrosoftGraphSecurityExport\MicrosoftGraphSecurityExportRequestBuilder;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\ReviewSets\Item\Queries\QueriesRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the reviewSets property of the microsoft.graph.security.ediscoveryCase entity.
*/
class EdiscoveryReviewSetItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the addToReviewSet method.
    */
    public function microsoftGraphSecurityAddToReviewSet(): MicrosoftGraphSecurityAddToReviewSetRequestBuilder {
        return new MicrosoftGraphSecurityAddToReviewSetRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the export method.
    */
    public function microsoftGraphSecurityExport(): MicrosoftGraphSecurityExportRequestBuilder {
        return new MicrosoftGraphSecurityExportRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the queries property of the microsoft.graph.security.ediscoveryReviewSet entity.
    */
    public function queries(): QueriesRequestBuilder {
        return new QueriesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new EdiscoveryReviewSetItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/cases/ediscoveryCases/{ediscoveryCase%2Did}/reviewSets/{ediscoveryReviewSet%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property reviewSets for security
     * @param EdiscoveryReviewSetItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?EdiscoveryReviewSetItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of an ediscoveryReviewSet object.
     * @param EdiscoveryReviewSetItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EdiscoveryReviewSet|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-ediscoveryreviewset-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?EdiscoveryReviewSetItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EdiscoveryReviewSet::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property reviewSets in security
     * @param EdiscoveryReviewSet $body The request body
     * @param EdiscoveryReviewSetItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EdiscoveryReviewSet|null>
     * @throws Exception
    */
    public function patch(EdiscoveryReviewSet $body, ?EdiscoveryReviewSetItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EdiscoveryReviewSet::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property reviewSets for security
     * @param EdiscoveryReviewSetItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?EdiscoveryReviewSetItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of an ediscoveryReviewSet object.
     * @param EdiscoveryReviewSetItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EdiscoveryReviewSetItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property reviewSets in security
     * @param EdiscoveryReviewSet $body The request body
     * @param EdiscoveryReviewSetItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(EdiscoveryReviewSet $body, ?EdiscoveryReviewSetItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return EdiscoveryReviewSetItemRequestBuilder
    */
    public function withUrl(string $rawUrl): EdiscoveryReviewSetItemRequestBuilder {
        return new EdiscoveryReviewSetItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
