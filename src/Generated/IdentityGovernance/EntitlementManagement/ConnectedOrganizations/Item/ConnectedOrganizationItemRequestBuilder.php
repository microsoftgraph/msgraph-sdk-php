<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ConnectedOrganizations\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ConnectedOrganizations\Item\ExternalSponsors\ExternalSponsorsRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ConnectedOrganizations\Item\InternalSponsors\InternalSponsorsRequestBuilder;
use Microsoft\Graph\Generated\Models\ConnectedOrganization;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the connectedOrganizations property of the microsoft.graph.entitlementManagement entity.
*/
class ConnectedOrganizationItemRequestBuilder 
{
    /**
     * Provides operations to manage the externalSponsors property of the microsoft.graph.connectedOrganization entity.
    */
    public function externalSponsors(): ExternalSponsorsRequestBuilder {
        return new ExternalSponsorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the internalSponsors property of the microsoft.graph.connectedOrganization entity.
    */
    public function internalSponsors(): InternalSponsorsRequestBuilder {
        return new InternalSponsorsRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Instantiates a new ConnectedOrganizationItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/identityGovernance/entitlementManagement/connectedOrganizations/{connectedOrganization%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property connectedOrganizations for identityGovernance
     * @param ConnectedOrganizationItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?ConnectedOrganizationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
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
     * Gets an item from the Microsoft/Graph/Generated.identityGovernance.entitlementManagement.connectedOrganizations.item.externalSponsors.item collection
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ConnectedOrganizations\Item\ExternalSponsors\Item\DirectoryObjectItemRequestBuilder
    */
    public function externalSponsorsById(string $id): \Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ConnectedOrganizations\Item\ExternalSponsors\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ConnectedOrganizations\Item\ExternalSponsors\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * References to a directory or domain of another organization whose users can request access.
     * @param ConnectedOrganizationItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?ConnectedOrganizationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ConnectedOrganization::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft/Graph/Generated.identityGovernance.entitlementManagement.connectedOrganizations.item.internalSponsors.item collection
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ConnectedOrganizations\Item\InternalSponsors\Item\DirectoryObjectItemRequestBuilder
    */
    public function internalSponsorsById(string $id): \Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ConnectedOrganizations\Item\InternalSponsors\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ConnectedOrganizations\Item\InternalSponsors\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property connectedOrganizations in identityGovernance
     * @param ConnectedOrganization $body The request body
     * @param ConnectedOrganizationItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(ConnectedOrganization $body, ?ConnectedOrganizationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ConnectedOrganization::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property connectedOrganizations for identityGovernance
     * @param ConnectedOrganizationItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ConnectedOrganizationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * References to a directory or domain of another organization whose users can request access.
     * @param ConnectedOrganizationItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ConnectedOrganizationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property connectedOrganizations in identityGovernance
     * @param ConnectedOrganization $body The request body
     * @param ConnectedOrganizationItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ConnectedOrganization $body, ?ConnectedOrganizationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
