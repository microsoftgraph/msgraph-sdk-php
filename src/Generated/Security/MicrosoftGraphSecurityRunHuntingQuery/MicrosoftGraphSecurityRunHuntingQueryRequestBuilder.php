<?php

namespace Microsoft\Graph\Generated\Security\MicrosoftGraphSecurityRunHuntingQuery;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\HuntingQueryResults;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the runHuntingQuery method.
*/
class MicrosoftGraphSecurityRunHuntingQueryRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphSecurityRunHuntingQueryRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/microsoft.graph.security.runHuntingQuery');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke action runHuntingQuery
     * @param RunHuntingQueryPostRequestBody $body The request body
     * @param MicrosoftGraphSecurityRunHuntingQueryRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<HuntingQueryResults|null>
     * @throws Exception
    */
    public function post(RunHuntingQueryPostRequestBody $body, ?MicrosoftGraphSecurityRunHuntingQueryRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [HuntingQueryResults::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke action runHuntingQuery
     * @param RunHuntingQueryPostRequestBody $body The request body
     * @param MicrosoftGraphSecurityRunHuntingQueryRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RunHuntingQueryPostRequestBody $body, ?MicrosoftGraphSecurityRunHuntingQueryRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphSecurityRunHuntingQueryRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphSecurityRunHuntingQueryRequestBuilder {
        return new MicrosoftGraphSecurityRunHuntingQueryRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
