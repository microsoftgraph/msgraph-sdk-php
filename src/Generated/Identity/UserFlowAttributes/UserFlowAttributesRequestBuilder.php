<?php

namespace Microsoft\Graph\Generated\Identity\UserFlowAttributes;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Identity\UserFlowAttributes\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Identity\UserFlowAttributes\Item\IdentityUserFlowAttributeItemRequestBuilder;
use Microsoft\Graph\Generated\Models\IdentityUserFlowAttribute;
use Microsoft\Graph\Generated\Models\IdentityUserFlowAttributeCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the userFlowAttributes property of the microsoft.graph.identityContainer entity.
*/
class UserFlowAttributesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userFlowAttributes property of the microsoft.graph.identityContainer entity.
     * @param string $identityUserFlowAttributeId The unique identifier of identityUserFlowAttribute
     * @return IdentityUserFlowAttributeItemRequestBuilder
    */
    public function byIdentityUserFlowAttributeId(string $identityUserFlowAttributeId): IdentityUserFlowAttributeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['identityUserFlowAttribute%2Did'] = $identityUserFlowAttributeId;
        return new IdentityUserFlowAttributeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new UserFlowAttributesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/userFlowAttributes{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of identityUserFlowAttribute objects. This API is available in the following national cloud deployments.
     * @param UserFlowAttributesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IdentityUserFlowAttributeCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identityuserflowattribute-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?UserFlowAttributesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IdentityUserFlowAttributeCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new custom identityUserFlowAttribute object. This API is available in the following national cloud deployments.
     * @param IdentityUserFlowAttribute $body The request body
     * @param UserFlowAttributesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IdentityUserFlowAttribute|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identityuserflowattribute-post?view=graph-rest-1.0 Find more info here
    */
    public function post(IdentityUserFlowAttribute $body, ?UserFlowAttributesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IdentityUserFlowAttribute::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a list of identityUserFlowAttribute objects. This API is available in the following national cloud deployments.
     * @param UserFlowAttributesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UserFlowAttributesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Create a new custom identityUserFlowAttribute object. This API is available in the following national cloud deployments.
     * @param IdentityUserFlowAttribute $body The request body
     * @param UserFlowAttributesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(IdentityUserFlowAttribute $body, ?UserFlowAttributesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return UserFlowAttributesRequestBuilder
    */
    public function withUrl(string $rawUrl): UserFlowAttributesRequestBuilder {
        return new UserFlowAttributesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
