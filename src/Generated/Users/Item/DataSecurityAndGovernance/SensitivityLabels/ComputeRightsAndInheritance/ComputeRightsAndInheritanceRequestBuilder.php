<?php

namespace Microsoft\\Graph\\Generated\Users\Item\DataSecurityAndGovernance\SensitivityLabels\ComputeRightsAndInheritance;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Models\ComputeRightsAndInheritanceResult;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the computeRightsAndInheritance method.
*/
class ComputeRightsAndInheritanceRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ComputeRightsAndInheritanceRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/dataSecurityAndGovernance/sensitivityLabels/computeRightsAndInheritance');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Computes the rights and inheritance for sensitivity labels based on the input content and labels.
     * @param ComputeRightsAndInheritancePostRequestBody $body The request body
     * @param ComputeRightsAndInheritanceRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ComputeRightsAndInheritanceResult|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/sensitivitylabel-computerightsandinheritance?view=graph-rest-1.0 Find more info here
    */
    public function post(ComputeRightsAndInheritancePostRequestBody $body, ?ComputeRightsAndInheritanceRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ComputeRightsAndInheritanceResult::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Computes the rights and inheritance for sensitivity labels based on the input content and labels.
     * @param ComputeRightsAndInheritancePostRequestBody $body The request body
     * @param ComputeRightsAndInheritanceRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ComputeRightsAndInheritancePostRequestBody $body, ?ComputeRightsAndInheritanceRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ComputeRightsAndInheritanceRequestBuilder
    */
    public function withUrl(string $rawUrl): ComputeRightsAndInheritanceRequestBuilder {
        return new ComputeRightsAndInheritanceRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
