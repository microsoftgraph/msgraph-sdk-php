<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\Synchronization\Jobs\Item\ProvisionOnDemand;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\StringKeyStringValuePair;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the provisionOnDemand method.
*/
class ProvisionOnDemandRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ProvisionOnDemandRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/servicePrincipals/{servicePrincipal%2Did}/synchronization/jobs/{synchronizationJob%2Did}/provisionOnDemand');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Select a user and provision the account on-demand. The rate limit for this API is 5 requests per 10 seconds.  This API is available in the following national cloud deployments.
     * @param ProvisionOnDemandPostRequestBody $body The request body
     * @param ProvisionOnDemandRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StringKeyStringValuePair|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/synchronization-synchronizationjob-provisionondemand?view=graph-rest-1.0 Find more info here
    */
    public function post(ProvisionOnDemandPostRequestBody $body, ?ProvisionOnDemandRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [StringKeyStringValuePair::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Select a user and provision the account on-demand. The rate limit for this API is 5 requests per 10 seconds.  This API is available in the following national cloud deployments.
     * @param ProvisionOnDemandPostRequestBody $body The request body
     * @param ProvisionOnDemandRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ProvisionOnDemandPostRequestBody $body, ?ProvisionOnDemandRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ProvisionOnDemandRequestBuilder
    */
    public function withUrl(string $rawUrl): ProvisionOnDemandRequestBuilder {
        return new ProvisionOnDemandRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
