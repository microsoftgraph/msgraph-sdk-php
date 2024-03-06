<?php

namespace Microsoft\Graph\Generated\TenantRelationships\DelegatedAdminRelationships\Item\AccessAssignments\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\DelegatedAdminAccessAssignment;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the accessAssignments property of the microsoft.graph.delegatedAdminRelationship entity.
*/
class DelegatedAdminAccessAssignmentItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DelegatedAdminAccessAssignmentItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/tenantRelationships/delegatedAdminRelationships/{delegatedAdminRelationship%2Did}/accessAssignments/{delegatedAdminAccessAssignment%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a delegatedAdminAccessAssignment object.
     * @param DelegatedAdminAccessAssignmentItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/delegatedadminaccessassignment-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?DelegatedAdminAccessAssignmentItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties of a delegatedAdminAccessAssignment object.
     * @param DelegatedAdminAccessAssignmentItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DelegatedAdminAccessAssignment|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/delegatedadminaccessassignment-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?DelegatedAdminAccessAssignmentItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DelegatedAdminAccessAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a delegatedAdminAccessAssignment object.
     * @param DelegatedAdminAccessAssignment $body The request body
     * @param DelegatedAdminAccessAssignmentItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DelegatedAdminAccessAssignment|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/delegatedadminaccessassignment-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(DelegatedAdminAccessAssignment $body, ?DelegatedAdminAccessAssignmentItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DelegatedAdminAccessAssignment::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a delegatedAdminAccessAssignment object.
     * @param DelegatedAdminAccessAssignmentItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DelegatedAdminAccessAssignmentItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/tenantRelationships/delegatedAdminRelationships/{delegatedAdminRelationship%2Did}/accessAssignments/{delegatedAdminAccessAssignment%2Did}';
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
     * Read the properties of a delegatedAdminAccessAssignment object.
     * @param DelegatedAdminAccessAssignmentItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DelegatedAdminAccessAssignmentItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a delegatedAdminAccessAssignment object.
     * @param DelegatedAdminAccessAssignment $body The request body
     * @param DelegatedAdminAccessAssignmentItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DelegatedAdminAccessAssignment $body, ?DelegatedAdminAccessAssignmentItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/tenantRelationships/delegatedAdminRelationships/{delegatedAdminRelationship%2Did}/accessAssignments/{delegatedAdminAccessAssignment%2Did}';
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
     * @return DelegatedAdminAccessAssignmentItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DelegatedAdminAccessAssignmentItemRequestBuilder {
        return new DelegatedAdminAccessAssignmentItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
