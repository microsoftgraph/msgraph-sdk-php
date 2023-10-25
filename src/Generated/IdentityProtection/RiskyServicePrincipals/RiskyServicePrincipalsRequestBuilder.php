<?php

namespace Microsoft\Graph\Generated\IdentityProtection\RiskyServicePrincipals;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\IdentityProtection\RiskyServicePrincipals\ConfirmCompromised\ConfirmCompromisedRequestBuilder;
use Microsoft\Graph\Generated\IdentityProtection\RiskyServicePrincipals\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\IdentityProtection\RiskyServicePrincipals\Dismiss\DismissRequestBuilder;
use Microsoft\Graph\Generated\IdentityProtection\RiskyServicePrincipals\Item\RiskyServicePrincipalItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\RiskyServicePrincipal;
use Microsoft\Graph\Generated\Models\RiskyServicePrincipalCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the riskyServicePrincipals property of the microsoft.graph.identityProtectionRoot entity.
*/
class RiskyServicePrincipalsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the confirmCompromised method.
    */
    public function confirmCompromised(): ConfirmCompromisedRequestBuilder {
        return new ConfirmCompromisedRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the dismiss method.
    */
    public function dismiss(): DismissRequestBuilder {
        return new DismissRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the riskyServicePrincipals property of the microsoft.graph.identityProtectionRoot entity.
     * @param string $riskyServicePrincipalId The unique identifier of riskyServicePrincipal
     * @return RiskyServicePrincipalItemRequestBuilder
    */
    public function byRiskyServicePrincipalId(string $riskyServicePrincipalId): RiskyServicePrincipalItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['riskyServicePrincipal%2Did'] = $riskyServicePrincipalId;
        return new RiskyServicePrincipalItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RiskyServicePrincipalsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityProtection/riskyServicePrincipals{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve the properties and relationships of riskyServicePrincipal objects. This API is available in the following national cloud deployments.
     * @param RiskyServicePrincipalsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/identityprotectionroot-list-riskyserviceprincipals?view=graph-rest-1.0 Find more info here
    */
    public function get(?RiskyServicePrincipalsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [RiskyServicePrincipalCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create new navigation property to riskyServicePrincipals for identityProtection
     * @param RiskyServicePrincipal $body The request body
     * @param RiskyServicePrincipalsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function post(RiskyServicePrincipal $body, ?RiskyServicePrincipalsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [RiskyServicePrincipal::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Retrieve the properties and relationships of riskyServicePrincipal objects. This API is available in the following national cloud deployments.
     * @param RiskyServicePrincipalsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RiskyServicePrincipalsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to riskyServicePrincipals for identityProtection
     * @param RiskyServicePrincipal $body The request body
     * @param RiskyServicePrincipalsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RiskyServicePrincipal $body, ?RiskyServicePrincipalsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RiskyServicePrincipalsRequestBuilder
    */
    public function withUrl(string $rawUrl): RiskyServicePrincipalsRequestBuilder {
        return new RiskyServicePrincipalsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
