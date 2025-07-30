<?php

namespace Microsoft\Graph\Generated\Identity\ConditionalAccess\Evaluate;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the evaluate method.
*/
class EvaluateRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new EvaluateRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/conditionalAccess/evaluate');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Evaluates the applicability of Conditional Access Policies in your tenant based on the provided sign-in properties.
     * @param EvaluatePostRequestBody $body The request body
     * @param EvaluateRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EvaluatePostResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/conditionalaccessroot-evaluate?view=graph-rest-1.0 Find more info here
    */
    public function post(EvaluatePostRequestBody $body, ?EvaluateRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EvaluatePostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Evaluates the applicability of Conditional Access Policies in your tenant based on the provided sign-in properties.
     * @param EvaluatePostRequestBody $body The request body
     * @param EvaluateRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EvaluatePostRequestBody $body, ?EvaluateRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return EvaluateRequestBuilder
    */
    public function withUrl(string $rawUrl): EvaluateRequestBuilder {
        return new EvaluateRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
