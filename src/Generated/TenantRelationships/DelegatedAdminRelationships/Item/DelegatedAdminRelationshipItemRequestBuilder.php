<?php

namespace Microsoft\Graph\Generated\TenantRelationships\DelegatedAdminRelationships\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\DelegatedAdminRelationship;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\TenantRelationships\DelegatedAdminRelationships\Item\AccessAssignments\AccessAssignmentsRequestBuilder;
use Microsoft\Graph\Generated\TenantRelationships\DelegatedAdminRelationships\Item\Operations\OperationsRequestBuilder;
use Microsoft\Graph\Generated\TenantRelationships\DelegatedAdminRelationships\Item\Requests\RequestsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the delegatedAdminRelationships property of the microsoft.graph.tenantRelationship entity.
*/
class DelegatedAdminRelationshipItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the accessAssignments property of the microsoft.graph.delegatedAdminRelationship entity.
    */
    public function accessAssignments(): AccessAssignmentsRequestBuilder {
        return new AccessAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the operations property of the microsoft.graph.delegatedAdminRelationship entity.
    */
    public function operations(): OperationsRequestBuilder {
        return new OperationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the requests property of the microsoft.graph.delegatedAdminRelationship entity.
    */
    public function requests(): RequestsRequestBuilder {
        return new RequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DelegatedAdminRelationshipItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/tenantRelationships/delegatedAdminRelationships/{delegatedAdminRelationship%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a delegatedAdminRelationship object. A relationship can only be deleted if it's in the 'created' status. 
     * @param DelegatedAdminRelationshipItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/delegatedadminrelationship-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?DelegatedAdminRelationshipItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties of a delegatedAdminRelationship object.
     * @param DelegatedAdminRelationshipItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DelegatedAdminRelationship|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/delegatedadminrelationship-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?DelegatedAdminRelationshipItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DelegatedAdminRelationship::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a delegatedAdminRelationship object.  The following restrictions apply:- You can update this relationship when its status property is created.- You can update the autoExtendDuration property when status is either created or active.- You can only remove the Microsoft Entra Global Administrator role when the status property is active, which indicates a long-running operation.
     * @param DelegatedAdminRelationship $body The request body
     * @param DelegatedAdminRelationshipItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DelegatedAdminRelationship|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/delegatedadminrelationship-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(DelegatedAdminRelationship $body, ?DelegatedAdminRelationshipItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DelegatedAdminRelationship::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a delegatedAdminRelationship object. A relationship can only be deleted if it's in the 'created' status. 
     * @param DelegatedAdminRelationshipItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DelegatedAdminRelationshipItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read the properties of a delegatedAdminRelationship object.
     * @param DelegatedAdminRelationshipItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DelegatedAdminRelationshipItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a delegatedAdminRelationship object.  The following restrictions apply:- You can update this relationship when its status property is created.- You can update the autoExtendDuration property when status is either created or active.- You can only remove the Microsoft Entra Global Administrator role when the status property is active, which indicates a long-running operation.
     * @param DelegatedAdminRelationship $body The request body
     * @param DelegatedAdminRelationshipItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DelegatedAdminRelationship $body, ?DelegatedAdminRelationshipItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DelegatedAdminRelationshipItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DelegatedAdminRelationshipItemRequestBuilder {
        return new DelegatedAdminRelationshipItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
