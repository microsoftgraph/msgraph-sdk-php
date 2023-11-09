<?php

namespace Microsoft\Graph\Generated\Applications\Item\SetVerifiedPublisher;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the setVerifiedPublisher method.
*/
class SetVerifiedPublisherRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SetVerifiedPublisherRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/applications/{application%2Did}/setVerifiedPublisher');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Set the verifiedPublisher on an application. For more information, including prerequisites to setting a verified publisher, see Publisher verification. This API is available in the following national cloud deployments.
     * @param SetVerifiedPublisherPostRequestBody $body The request body
     * @param SetVerifiedPublisherRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/application-setverifiedpublisher?view=graph-rest-1.0 Find more info here
    */
    public function post(SetVerifiedPublisherPostRequestBody $body, ?SetVerifiedPublisherRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Set the verifiedPublisher on an application. For more information, including prerequisites to setting a verified publisher, see Publisher verification. This API is available in the following national cloud deployments.
     * @param SetVerifiedPublisherPostRequestBody $body The request body
     * @param SetVerifiedPublisherRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SetVerifiedPublisherPostRequestBody $body, ?SetVerifiedPublisherRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json, application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return SetVerifiedPublisherRequestBuilder
    */
    public function withUrl(string $rawUrl): SetVerifiedPublisherRequestBuilder {
        return new SetVerifiedPublisherRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
