<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Searches\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\EdiscoverySearch;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Searches\Item\AdditionalSources\AdditionalSourcesRequestBuilder;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Searches\Item\AdditionalSources\Item\DataSourceItemRequestBuilder as MicrosoftGraphGeneratedSecurityCasesEdiscoveryCasesItemSearchesItemAdditionalSourcesItemDataSourceItemRequestBuilder;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Searches\Item\AddToReviewSetOperation\AddToReviewSetOperationRequestBuilder;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Searches\Item\CustodianSources\CustodianSourcesRequestBuilder;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Searches\Item\CustodianSources\Item\DataSourceItemRequestBuilder as MicrosoftGraphGeneratedSecurityCasesEdiscoveryCasesItemSearchesItemCustodianSourcesItemDataSourceItemRequestBuilder;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Searches\Item\EstimateStatistics\EstimateStatisticsRequestBuilder;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Searches\Item\LastEstimateStatisticsOperation\LastEstimateStatisticsOperationRequestBuilder;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Searches\Item\NoncustodialSources\Item\EdiscoveryNoncustodialDataSourceItemRequestBuilder;
use Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Searches\Item\NoncustodialSources\NoncustodialSourcesRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class EdiscoverySearchItemRequestBuilder 
{
    /**
     * The additionalSources property
    */
    public function additionalSources(): AdditionalSourcesRequestBuilder {
        return new AdditionalSourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The addToReviewSetOperation property
    */
    public function addToReviewSetOperation(): AddToReviewSetOperationRequestBuilder {
        return new AddToReviewSetOperationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The custodianSources property
    */
    public function custodianSources(): CustodianSourcesRequestBuilder {
        return new CustodianSourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The estimateStatistics property
    */
    public function estimateStatistics(): EstimateStatisticsRequestBuilder {
        return new EstimateStatisticsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The lastEstimateStatisticsOperation property
    */
    public function lastEstimateStatisticsOperation(): LastEstimateStatisticsOperationRequestBuilder {
        return new LastEstimateStatisticsOperationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The noncustodialSources property
    */
    public function noncustodialSources(): NoncustodialSourcesRequestBuilder {
        return new NoncustodialSourcesRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Generated.security.cases.ediscoveryCases.item.searches.item.additionalSources.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedSecurityCasesEdiscoveryCasesItemSearchesItemAdditionalSourcesItemDataSourceItemRequestBuilder
    */
    public function additionalSourcesById(string $id): MicrosoftGraphGeneratedSecurityCasesEdiscoveryCasesItemSearchesItemAdditionalSourcesItemDataSourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['dataSource%2Did'] = $id;
        return new MicrosoftGraphGeneratedSecurityCasesEdiscoveryCasesItemSearchesItemAdditionalSourcesItemDataSourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new EdiscoverySearchItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/security/cases/ediscoveryCases/{ediscoveryCase%2Did}/searches/{ediscoverySearch%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property searches for security
     * @param EdiscoverySearchItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?EdiscoverySearchItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Returns a list of eDiscoverySearch objects associated with this case.
     * @param EdiscoverySearchItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?EdiscoverySearchItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
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
     * Update the navigation property searches in security
     * @param EdiscoverySearch $body 
     * @param EdiscoverySearchItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(EdiscoverySearch $body, ?EdiscoverySearchItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.security.cases.ediscoveryCases.item.searches.item.custodianSources.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedSecurityCasesEdiscoveryCasesItemSearchesItemCustodianSourcesItemDataSourceItemRequestBuilder
    */
    public function custodianSourcesById(string $id): MicrosoftGraphGeneratedSecurityCasesEdiscoveryCasesItemSearchesItemCustodianSourcesItemDataSourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['dataSource%2Did'] = $id;
        return new MicrosoftGraphGeneratedSecurityCasesEdiscoveryCasesItemSearchesItemCustodianSourcesItemDataSourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property searches for security
     * @param EdiscoverySearchItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?EdiscoverySearchItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Returns a list of eDiscoverySearch objects associated with this case.
     * @param EdiscoverySearchItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?EdiscoverySearchItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(EdiscoverySearch::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.security.cases.ediscoveryCases.item.searches.item.noncustodialSources.item collection
     * @param string $id Unique identifier of the item
     * @return EdiscoveryNoncustodialDataSourceItemRequestBuilder
    */
    public function noncustodialSourcesById(string $id): EdiscoveryNoncustodialDataSourceItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['ediscoveryNoncustodialDataSource%2Did'] = $id;
        return new EdiscoveryNoncustodialDataSourceItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property searches in security
     * @param EdiscoverySearch $body 
     * @param EdiscoverySearchItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(EdiscoverySearch $body, ?EdiscoverySearchItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(EdiscoverySearch::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

}
