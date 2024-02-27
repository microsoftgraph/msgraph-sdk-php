<?php

namespace Microsoft\Graph\Generated\TenantRelationships\DelegatedAdminRelationships;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\DelegatedAdminRelationship;
use Microsoft\Graph\Generated\Models\DelegatedAdminRelationshipCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\TenantRelationships\DelegatedAdminRelationships\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\TenantRelationships\DelegatedAdminRelationships\Item\DelegatedAdminRelationshipItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the delegatedAdminRelationships property of the microsoft.graph.tenantRelationship entity.
*/
class DelegatedAdminRelationshipsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the delegatedAdminRelationships property of the microsoft.graph.tenantRelationship entity.
     * @param string $delegatedAdminRelationshipId The unique identifier of delegatedAdminRelationship
     * @return DelegatedAdminRelationshipItemRequestBuilder
    */
    public function byDelegatedAdminRelationshipId(string $delegatedAdminRelationshipId): DelegatedAdminRelationshipItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['delegatedAdminRelationship%2Did'] = $delegatedAdminRelationshipId;
        return new DelegatedAdminRelationshipItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DelegatedAdminRelationshipsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/tenantRelationships/delegatedAdminRelationships{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the delegatedAdminRelationship objects and their properties.
     * @param DelegatedAdminRelationshipsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DelegatedAdminRelationshipCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/tenantrelationship-list-delegatedadminrelationships?view=graph-rest-1.0 Find more info here
    */
    public function get(?DelegatedAdminRelationshipsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DelegatedAdminRelationshipCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new delegatedAdminRelationship object.
     * @param DelegatedAdminRelationship $body The request body
     * @param DelegatedAdminRelationshipsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DelegatedAdminRelationship|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/tenantrelationship-post-delegatedadminrelationships?view=graph-rest-1.0 Find more info here
    */
    public function post(DelegatedAdminRelationship $body, ?DelegatedAdminRelationshipsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DelegatedAdminRelationship::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the delegatedAdminRelationship objects and their properties.
     * @param DelegatedAdminRelationshipsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DelegatedAdminRelationshipsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new delegatedAdminRelationship object.
     * @param DelegatedAdminRelationship $body The request body
     * @param DelegatedAdminRelationshipsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DelegatedAdminRelationship $body, ?DelegatedAdminRelationshipsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/tenantRelationships/delegatedAdminRelationships';
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
     * @return DelegatedAdminRelationshipsRequestBuilder
    */
    public function withUrl(string $rawUrl): DelegatedAdminRelationshipsRequestBuilder {
        return new DelegatedAdminRelationshipsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
