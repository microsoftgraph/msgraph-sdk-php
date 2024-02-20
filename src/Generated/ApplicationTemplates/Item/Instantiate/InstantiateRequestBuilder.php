<?php

namespace Microsoft\Graph\Generated\ApplicationTemplates\Item\Instantiate;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ApplicationServicePrincipal;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the instantiate method.
*/
class InstantiateRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new InstantiateRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/applicationTemplates/{applicationTemplate%2Did}/instantiate');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Add an instance of an application from the Microsoft Entra application gallery into your directory. You can also use this API to instantiate non-gallery apps. Use the following ID for the applicationTemplate object: 8adf8e6e-67b2-4cf2-a259-e3dc5476c621.
     * @param InstantiatePostRequestBody $body The request body
     * @param InstantiateRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ApplicationServicePrincipal|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/applicationtemplate-instantiate?view=graph-rest-1.0 Find more info here
    */
    public function post(InstantiatePostRequestBody $body, ?InstantiateRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ApplicationServicePrincipal::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Add an instance of an application from the Microsoft Entra application gallery into your directory. You can also use this API to instantiate non-gallery apps. Use the following ID for the applicationTemplate object: 8adf8e6e-67b2-4cf2-a259-e3dc5476c621.
     * @param InstantiatePostRequestBody $body The request body
     * @param InstantiateRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(InstantiatePostRequestBody $body, ?InstantiateRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return InstantiateRequestBuilder
    */
    public function withUrl(string $rawUrl): InstantiateRequestBuilder {
        return new InstantiateRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
