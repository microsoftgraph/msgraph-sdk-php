<?php

namespace Microsoft\\Graph\\Generated\Security\Cases\EdiscoveryCases\Item\Searches\Item\NoncustodialSources;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Generated\Models\Security\EdiscoveryNoncustodialDataSourceCollectionResponse;
use Microsoft\\Graph\\Generated\Security\Cases\EdiscoveryCases\Item\Searches\Item\NoncustodialSources\Count\CountRequestBuilder;
use Microsoft\\Graph\\Generated\Security\Cases\EdiscoveryCases\Item\Searches\Item\NoncustodialSources\Item\EdiscoveryNoncustodialDataSourceItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the noncustodialSources property of the microsoft.graph.security.ediscoverySearch entity.
*/
class NoncustodialSourcesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the noncustodialSources property of the microsoft.graph.security.ediscoverySearch entity.
     * @param string $ediscoveryNoncustodialDataSourceId The unique identifier of ediscoveryNoncustodialDataSource
     * @return EdiscoveryNoncustodialDataSourceItemRequestBuilder
    */
    public function byEdiscoveryNoncustodialDataSourceId(string $ediscoveryNoncustodialDataSourceId): EdiscoveryNoncustodialDataSourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['ediscoveryNoncustodialDataSource%2Did'] = $ediscoveryNoncustodialDataSourceId;
        return new EdiscoveryNoncustodialDataSourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new NoncustodialSourcesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/cases/ediscoveryCases/{ediscoveryCase%2Did}/searches/{ediscoverySearch%2Did}/noncustodialSources{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * noncustodialDataSource sources that are included in the eDiscovery search
     * @param NoncustodialSourcesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EdiscoveryNoncustodialDataSourceCollectionResponse|null>
     * @throws Exception
    */
    public function get(?NoncustodialSourcesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EdiscoveryNoncustodialDataSourceCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * noncustodialDataSource sources that are included in the eDiscovery search
     * @param NoncustodialSourcesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?NoncustodialSourcesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return NoncustodialSourcesRequestBuilder
    */
    public function withUrl(string $rawUrl): NoncustodialSourcesRequestBuilder {
        return new NoncustodialSourcesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
