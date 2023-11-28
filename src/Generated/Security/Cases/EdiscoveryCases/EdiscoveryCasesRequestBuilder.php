<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\EdiscoveryCase;
use Microsoft\Graph\Generated\Models\Security\EdiscoveryCaseCollectionResponse;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\EdiscoveryCaseItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the ediscoveryCases property of the microsoft.graph.security.casesRoot entity.
*/
class EdiscoveryCasesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the ediscoveryCases property of the microsoft.graph.security.casesRoot entity.
     * @param string $ediscoveryCaseId The unique identifier of ediscoveryCase
     * @return EdiscoveryCaseItemRequestBuilder
    */
    public function byEdiscoveryCaseId(string $ediscoveryCaseId): EdiscoveryCaseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['ediscoveryCase%2Did'] = $ediscoveryCaseId;
        return new EdiscoveryCaseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new EdiscoveryCasesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/cases/ediscoveryCases{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the ediscoveryCase objects and their properties.
     * @param EdiscoveryCasesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EdiscoveryCaseCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-casesroot-list-ediscoverycases?view=graph-rest-1.0 Find more info here
    */
    public function get(?EdiscoveryCasesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EdiscoveryCaseCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new ediscoveryCase object.
     * @param EdiscoveryCase $body The request body
     * @param EdiscoveryCasesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EdiscoveryCase|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-casesroot-post-ediscoverycases?view=graph-rest-1.0 Find more info here
    */
    public function post(EdiscoveryCase $body, ?EdiscoveryCasesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EdiscoveryCase::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the ediscoveryCase objects and their properties.
     * @param EdiscoveryCasesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EdiscoveryCasesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new ediscoveryCase object.
     * @param EdiscoveryCase $body The request body
     * @param EdiscoveryCasesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EdiscoveryCase $body, ?EdiscoveryCasesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return EdiscoveryCasesRequestBuilder
    */
    public function withUrl(string $rawUrl): EdiscoveryCasesRequestBuilder {
        return new EdiscoveryCasesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
