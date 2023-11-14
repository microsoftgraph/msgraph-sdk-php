<?php

namespace Microsoft\Graph\Generated\Policies\AuthenticationStrengthPolicies\Item\UpdateAllowedCombinations;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UpdateAllowedCombinationsResult;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the updateAllowedCombinations method.
*/
class UpdateAllowedCombinationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new UpdateAllowedCombinationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/authenticationStrengthPolicies/{authenticationStrengthPolicy%2Did}/updateAllowedCombinations');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Update the allowedCombinations property of an authenticationStrengthPolicy object. To update other properties of an authenticationStrengthPolicy object, use the Update authenticationStrengthPolicy method. This API is available in the following national cloud deployments.
     * @param UpdateAllowedCombinationsPostRequestBody $body The request body
     * @param UpdateAllowedCombinationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UpdateAllowedCombinationsResult|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authenticationstrengthpolicy-updateallowedcombinations?view=graph-rest-1.0 Find more info here
    */
    public function post(UpdateAllowedCombinationsPostRequestBody $body, ?UpdateAllowedCombinationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UpdateAllowedCombinationsResult::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the allowedCombinations property of an authenticationStrengthPolicy object. To update other properties of an authenticationStrengthPolicy object, use the Update authenticationStrengthPolicy method. This API is available in the following national cloud deployments.
     * @param UpdateAllowedCombinationsPostRequestBody $body The request body
     * @param UpdateAllowedCombinationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UpdateAllowedCombinationsPostRequestBody $body, ?UpdateAllowedCombinationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UpdateAllowedCombinationsRequestBuilder
    */
    public function withUrl(string $rawUrl): UpdateAllowedCombinationsRequestBuilder {
        return new UpdateAllowedCombinationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
