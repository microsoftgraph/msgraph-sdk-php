<?php

namespace Microsoft\Graph\Generated\Security\Labels\Categories\Item\Subcategories;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\SubcategoryTemplate;
use Microsoft\Graph\Generated\Models\Security\SubcategoryTemplateCollectionResponse;
use Microsoft\Graph\Generated\Security\Labels\Categories\Item\Subcategories\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Security\Labels\Categories\Item\Subcategories\Item\SubcategoryTemplateItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the subcategories property of the microsoft.graph.security.categoryTemplate entity.
*/
class SubcategoriesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the subcategories property of the microsoft.graph.security.categoryTemplate entity.
     * @param string $subcategoryTemplateId The unique identifier of subcategoryTemplate
     * @return SubcategoryTemplateItemRequestBuilder
    */
    public function bySubcategoryTemplateId(string $subcategoryTemplateId): SubcategoryTemplateItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['subcategoryTemplate%2Did'] = $subcategoryTemplateId;
        return new SubcategoryTemplateItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SubcategoriesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/labels/categories/{categoryTemplate%2Did}/subcategories{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of subcategories subcategoryTemplate associated with a category template.
     * @param SubcategoriesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SubcategoryTemplateCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-categorytemplate-list-subcategories?view=graph-rest-1.0 Find more info here
    */
    public function get(?SubcategoriesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SubcategoryTemplateCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new subcategoryTemplate object.
     * @param SubcategoryTemplate $body The request body
     * @param SubcategoriesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SubcategoryTemplate|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-categorytemplate-post-subcategories?view=graph-rest-1.0 Find more info here
    */
    public function post(SubcategoryTemplate $body, ?SubcategoriesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SubcategoryTemplate::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of subcategories subcategoryTemplate associated with a category template.
     * @param SubcategoriesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SubcategoriesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new subcategoryTemplate object.
     * @param SubcategoryTemplate $body The request body
     * @param SubcategoriesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SubcategoryTemplate $body, ?SubcategoriesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SubcategoriesRequestBuilder
    */
    public function withUrl(string $rawUrl): SubcategoriesRequestBuilder {
        return new SubcategoriesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
