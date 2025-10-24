<?php

namespace Microsoft\\Graph\\Generated\IdentityGovernance\EntitlementManagement\Catalogs;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\IdentityGovernance\EntitlementManagement\Catalogs\Count\CountRequestBuilder;
use Microsoft\\Graph\\Generated\IdentityGovernance\EntitlementManagement\Catalogs\Item\AccessPackageCatalogItemRequestBuilder;
use Microsoft\\Graph\\Generated\Models\AccessPackageCatalog;
use Microsoft\\Graph\\Generated\Models\AccessPackageCatalogCollectionResponse;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the catalogs property of the microsoft.graph.entitlementManagement entity.
*/
class CatalogsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the catalogs property of the microsoft.graph.entitlementManagement entity.
     * @param string $accessPackageCatalogId The unique identifier of accessPackageCatalog
     * @return AccessPackageCatalogItemRequestBuilder
    */
    public function byAccessPackageCatalogId(string $accessPackageCatalogId): AccessPackageCatalogItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackageCatalog%2Did'] = $accessPackageCatalogId;
        return new AccessPackageCatalogItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CatalogsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/entitlementManagement/catalogs{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of accessPackageCatalog objects.
     * @param CatalogsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AccessPackageCatalogCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/entitlementmanagement-list-catalogs?view=graph-rest-1.0 Find more info here
    */
    public function get(?CatalogsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AccessPackageCatalogCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new accessPackageCatalog object.
     * @param AccessPackageCatalog $body The request body
     * @param CatalogsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AccessPackageCatalog|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/entitlementmanagement-post-catalogs?view=graph-rest-1.0 Find more info here
    */
    public function post(AccessPackageCatalog $body, ?CatalogsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AccessPackageCatalog::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a list of accessPackageCatalog objects.
     * @param CatalogsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CatalogsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new accessPackageCatalog object.
     * @param AccessPackageCatalog $body The request body
     * @param CatalogsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AccessPackageCatalog $body, ?CatalogsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CatalogsRequestBuilder
    */
    public function withUrl(string $rawUrl): CatalogsRequestBuilder {
        return new CatalogsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
