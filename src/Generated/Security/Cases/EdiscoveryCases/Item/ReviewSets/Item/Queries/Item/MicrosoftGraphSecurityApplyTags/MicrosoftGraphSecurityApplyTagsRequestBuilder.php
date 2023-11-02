<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\ReviewSets\Item\Queries\Item\MicrosoftGraphSecurityApplyTags;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the applyTags method.
*/
class MicrosoftGraphSecurityApplyTagsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphSecurityApplyTagsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/cases/ediscoveryCases/{ediscoveryCase%2Did}/reviewSets/{ediscoveryReviewSet%2Did}/queries/{ediscoveryReviewSetQuery%2Did}/microsoft.graph.security.applyTags');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Apply tags to files in an eDiscovery review set. For details, see Tag documents in a review set in eDiscovery. This API is available in the following national cloud deployments.
     * @param ApplyTagsPostRequestBody $body The request body
     * @param MicrosoftGraphSecurityApplyTagsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-ediscoveryreviewsetquery-applytags?view=graph-rest-1.0 Find more info here
    */
    public function post(ApplyTagsPostRequestBody $body, ?MicrosoftGraphSecurityApplyTagsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Apply tags to files in an eDiscovery review set. For details, see Tag documents in a review set in eDiscovery. This API is available in the following national cloud deployments.
     * @param ApplyTagsPostRequestBody $body The request body
     * @param MicrosoftGraphSecurityApplyTagsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ApplyTagsPostRequestBody $body, ?MicrosoftGraphSecurityApplyTagsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphSecurityApplyTagsRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphSecurityApplyTagsRequestBuilder {
        return new MicrosoftGraphSecurityApplyTagsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
