<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\TermStores\Item\Sets\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\TermStores\Item\Sets\Item\Children\ChildrenRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\TermStores\Item\Sets\Item\ParentGroup\ParentGroupRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\TermStores\Item\Sets\Item\Relations\RelationsRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Sites\Item\TermStores\Item\Sets\Item\Terms\TermsRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\TermStore\Set;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the sets property of the microsoft.graph.termStore.store entity.
*/
class SetItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the children property of the microsoft.graph.termStore.set entity.
    */
    public function children(): ChildrenRequestBuilder {
        return new ChildrenRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the parentGroup property of the microsoft.graph.termStore.set entity.
    */
    public function parentGroup(): ParentGroupRequestBuilder {
        return new ParentGroupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the relations property of the microsoft.graph.termStore.set entity.
    */
    public function relations(): RelationsRequestBuilder {
        return new RelationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the terms property of the microsoft.graph.termStore.set entity.
    */
    public function terms(): TermsRequestBuilder {
        return new TermsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new SetItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/groups/{group%2Did}/sites/{site%2Did}/termStores/{store%2Did}/sets/{set%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a set object.
     * @param SetItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/termstore-set-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?SetItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a set object.
     * @param SetItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Set|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/termstore-set-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?SetItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Set::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a set object.
     * @param Set $body The request body
     * @param SetItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Set|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/termstore-set-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(Set $body, ?SetItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Set::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a set object.
     * @param SetItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?SetItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/groups/{group%2Did}/sites/{site%2Did}/termStores/{store%2Did}/sets/{set%2Did}';
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
     * Read the properties and relationships of a set object.
     * @param SetItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SetItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a set object.
     * @param Set $body The request body
     * @param SetItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(Set $body, ?SetItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/groups/{group%2Did}/sites/{site%2Did}/termStores/{store%2Did}/sets/{set%2Did}';
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
     * @return SetItemRequestBuilder
    */
    public function withUrl(string $rawUrl): SetItemRequestBuilder {
        return new SetItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
