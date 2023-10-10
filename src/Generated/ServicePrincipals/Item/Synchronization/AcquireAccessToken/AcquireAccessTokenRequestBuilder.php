<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\Synchronization\AcquireAccessToken;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the acquireAccessToken method.
*/
class AcquireAccessTokenRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AcquireAccessTokenRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/servicePrincipals/{servicePrincipal%2Did}/synchronization/acquireAccessToken');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Acquire an OAuth access token to authorize the Azure AD provisioning service to provision users into an application. This API is available in the following national cloud deployments.
     * @param AcquireAccessTokenPostRequestBody $body The request body
     * @param AcquireAccessTokenRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/synchronization-synchronization-acquireaccesstoken?view=graph-rest-1.0 Find more info here
    */
    public function post(AcquireAccessTokenPostRequestBody $body, ?AcquireAccessTokenRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Acquire an OAuth access token to authorize the Azure AD provisioning service to provision users into an application. This API is available in the following national cloud deployments.
     * @param AcquireAccessTokenPostRequestBody $body The request body
     * @param AcquireAccessTokenRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AcquireAccessTokenPostRequestBody $body, ?AcquireAccessTokenRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return AcquireAccessTokenRequestBuilder
    */
    public function withUrl(string $rawUrl): AcquireAccessTokenRequestBuilder {
        return new AcquireAccessTokenRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
