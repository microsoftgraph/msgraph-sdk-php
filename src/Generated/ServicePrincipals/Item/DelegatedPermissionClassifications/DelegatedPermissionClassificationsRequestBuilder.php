<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\DelegatedPermissionClassifications;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\DelegatedPermissionClassification;
use Microsoft\Graph\Generated\Models\DelegatedPermissionClassificationCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\ServicePrincipals\Item\DelegatedPermissionClassifications\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\DelegatedPermissionClassifications\Item\DelegatedPermissionClassificationItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the delegatedPermissionClassifications property of the microsoft.graph.servicePrincipal entity.
*/
class DelegatedPermissionClassificationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the delegatedPermissionClassifications property of the microsoft.graph.servicePrincipal entity.
     * @param string $delegatedPermissionClassificationId The unique identifier of delegatedPermissionClassification
     * @return DelegatedPermissionClassificationItemRequestBuilder
    */
    public function byDelegatedPermissionClassificationId(string $delegatedPermissionClassificationId): DelegatedPermissionClassificationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['delegatedPermissionClassification%2Did'] = $delegatedPermissionClassificationId;
        return new DelegatedPermissionClassificationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DelegatedPermissionClassificationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/servicePrincipals/{servicePrincipal%2Did}/delegatedPermissionClassifications{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get delegatedPermissionClassifications from servicePrincipals
     * @param DelegatedPermissionClassificationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DelegatedPermissionClassificationCollectionResponse|null>
     * @throws Exception
    */
    public function get(?DelegatedPermissionClassificationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DelegatedPermissionClassificationCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to delegatedPermissionClassifications for servicePrincipals
     * @param DelegatedPermissionClassification $body The request body
     * @param DelegatedPermissionClassificationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DelegatedPermissionClassification|null>
     * @throws Exception
    */
    public function post(DelegatedPermissionClassification $body, ?DelegatedPermissionClassificationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DelegatedPermissionClassification::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get delegatedPermissionClassifications from servicePrincipals
     * @param DelegatedPermissionClassificationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DelegatedPermissionClassificationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to delegatedPermissionClassifications for servicePrincipals
     * @param DelegatedPermissionClassification $body The request body
     * @param DelegatedPermissionClassificationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DelegatedPermissionClassification $body, ?DelegatedPermissionClassificationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DelegatedPermissionClassificationsRequestBuilder
    */
    public function withUrl(string $rawUrl): DelegatedPermissionClassificationsRequestBuilder {
        return new DelegatedPermissionClassificationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
