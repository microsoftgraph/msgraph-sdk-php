<?php

namespace Microsoft\Graph\Generated\Sites\Item\TermStores\Item\Sets\Item\ParentGroup\Sets\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\TermStore\Set;
use Microsoft\Graph\Generated\Sites\Item\TermStores\Item\Sets\Item\ParentGroup\Sets\Item\Children\ChildrenRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\TermStores\Item\Sets\Item\ParentGroup\Sets\Item\Children\Item\TermItemRequestBuilder as MicrosoftGraphGeneratedSitesItemTermStoresItemSetsItemParentGroupSetsItemChildrenItemTermItemRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\TermStores\Item\Sets\Item\ParentGroup\Sets\Item\Relations\Item\RelationItemRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\TermStores\Item\Sets\Item\ParentGroup\Sets\Item\Relations\RelationsRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\TermStores\Item\Sets\Item\ParentGroup\Sets\Item\Terms\Item\TermItemRequestBuilder as MicrosoftGraphGeneratedSitesItemTermStoresItemSetsItemParentGroupSetsItemTermsItemTermItemRequestBuilder;
use Microsoft\Graph\Generated\Sites\Item\TermStores\Item\Sets\Item\ParentGroup\Sets\Item\Terms\TermsRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class SetItemRequestBuilder 
{
    /**
     * The children property
    */
    public function children(): ChildrenRequestBuilder {
        return new ChildrenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The relations property
    */
    public function relations(): RelationsRequestBuilder {
        return new RelationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The terms property
    */
    public function terms(): TermsRequestBuilder {
        return new TermsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph\Generated.sites.item.termStores.item.sets.item.parentGroup.sets.item.children.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedSitesItemTermStoresItemSetsItemParentGroupSetsItemChildrenItemTermItemRequestBuilder
    */
    public function childrenById(string $id): MicrosoftGraphGeneratedSitesItemTermStoresItemSetsItemParentGroupSetsItemChildrenItemTermItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['term%2Did'] = $id;
        return new MicrosoftGraphGeneratedSitesItemTermStoresItemSetsItemParentGroupSetsItemChildrenItemTermItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SetItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/sites/{site%2Did}/termStores/{store%2Did}/sets/{set%2Did}/parentGroup/sets/{set%2Did1}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property sets for sites
     * @param SetItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?SetItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * All sets under the group in a term [store].
     * @param SetItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?SetItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property sets in sites
     * @param Set $body 
     * @param SetItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(Set $body, ?SetItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Delete navigation property sets for sites
     * @param SetItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?SetItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
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
     * All sets under the group in a term [store].
     * @param SetItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?SetItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(Set::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property sets in sites
     * @param Set $body 
     * @param SetItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(Set $body, ?SetItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(Set::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.sites.item.termStores.item.sets.item.parentGroup.sets.item.relations.item collection
     * @param string $id Unique identifier of the item
     * @return RelationItemRequestBuilder
    */
    public function relationsById(string $id): RelationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['relation%2Did'] = $id;
        return new RelationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.sites.item.termStores.item.sets.item.parentGroup.sets.item.terms.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphGeneratedSitesItemTermStoresItemSetsItemParentGroupSetsItemTermsItemTermItemRequestBuilder
    */
    public function termsById(string $id): MicrosoftGraphGeneratedSitesItemTermStoresItemSetsItemParentGroupSetsItemTermsItemTermItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['term%2Did'] = $id;
        return new MicrosoftGraphGeneratedSitesItemTermStoresItemSetsItemParentGroupSetsItemTermsItemTermItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
