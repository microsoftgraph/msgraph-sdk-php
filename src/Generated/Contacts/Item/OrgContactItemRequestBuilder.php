<?php

namespace Microsoft\Graph\Generated\Contacts\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Contacts\Item\CheckMemberGroups\CheckMemberGroupsRequestBuilder;
use Microsoft\Graph\Generated\Contacts\Item\CheckMemberObjects\CheckMemberObjectsRequestBuilder;
use Microsoft\Graph\Generated\Contacts\Item\DirectReports\DirectReportsRequestBuilder;
use Microsoft\Graph\Generated\Contacts\Item\GetMemberGroups\GetMemberGroupsRequestBuilder;
use Microsoft\Graph\Generated\Contacts\Item\GetMemberObjects\GetMemberObjectsRequestBuilder;
use Microsoft\Graph\Generated\Contacts\Item\Manager\ManagerRequestBuilder;
use Microsoft\Graph\Generated\Contacts\Item\MemberOf\MemberOfRequestBuilder;
use Microsoft\Graph\Generated\Contacts\Item\Restore\RestoreRequestBuilder;
use Microsoft\Graph\Generated\Contacts\Item\TransitiveMemberOf\TransitiveMemberOfRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\OrgContact;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the collection of orgContact entities.
*/
class OrgContactItemRequestBuilder 
{
    /**
     * Provides operations to call the checkMemberGroups method.
    */
    public function checkMemberGroups(): CheckMemberGroupsRequestBuilder {
        return new CheckMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the checkMemberObjects method.
    */
    public function checkMemberObjects(): CheckMemberObjectsRequestBuilder {
        return new CheckMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the directReports property of the microsoft.graph.orgContact entity.
    */
    public function directReports(): DirectReportsRequestBuilder {
        return new DirectReportsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMemberGroups method.
    */
    public function getMemberGroups(): GetMemberGroupsRequestBuilder {
        return new GetMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMemberObjects method.
    */
    public function getMemberObjects(): GetMemberObjectsRequestBuilder {
        return new GetMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the manager property of the microsoft.graph.orgContact entity.
    */
    public function manager(): ManagerRequestBuilder {
        return new ManagerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the memberOf property of the microsoft.graph.orgContact entity.
    */
    public function memberOf(): MemberOfRequestBuilder {
        return new MemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to call the restore method.
    */
    public function restore(): RestoreRequestBuilder {
        return new RestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the transitiveMemberOf property of the microsoft.graph.orgContact entity.
    */
    public function transitiveMemberOf(): TransitiveMemberOfRequestBuilder {
        return new TransitiveMemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Instantiates a new OrgContactItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/contacts/{orgContact%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete entity from contacts by key (id)
     * @param OrgContactItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?OrgContactItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
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
     * Provides operations to manage the directReports property of the microsoft.graph.orgContact entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Contacts\Item\DirectReports\Item\DirectoryObjectItemRequestBuilder
    */
    public function directReportsById(string $id): \Microsoft\Graph\Generated\Contacts\Item\DirectReports\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Contacts\Item\DirectReports\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Get the properties and relationships of an organizational contact.
     * @param OrgContactItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/orgcontact-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?OrgContactItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [OrgContact::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the memberOf property of the microsoft.graph.orgContact entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Contacts\Item\MemberOf\Item\DirectoryObjectItemRequestBuilder
    */
    public function memberOfById(string $id): \Microsoft\Graph\Generated\Contacts\Item\MemberOf\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Contacts\Item\MemberOf\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update entity in contacts by key (id)
     * @param OrgContact $body The request body
     * @param OrgContactItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(OrgContact $body, ?OrgContactItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [OrgContact::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete entity from contacts by key (id)
     * @param OrgContactItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?OrgContactItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Get the properties and relationships of an organizational contact.
     * @param OrgContactItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OrgContactItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update entity in contacts by key (id)
     * @param OrgContact $body The request body
     * @param OrgContactItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(OrgContact $body, ?OrgContactItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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

    /**
     * Provides operations to manage the transitiveMemberOf property of the microsoft.graph.orgContact entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\Contacts\Item\TransitiveMemberOf\Item\DirectoryObjectItemRequestBuilder
    */
    public function transitiveMemberOfById(string $id): \Microsoft\Graph\Generated\Contacts\Item\TransitiveMemberOf\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Generated\Contacts\Item\TransitiveMemberOf\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
