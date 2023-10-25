<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\ReviewSets\Item\MicrosoftGraphSecurityAddToReviewSet;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the addToReviewSet method.
*/
class MicrosoftGraphSecurityAddToReviewSetRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphSecurityAddToReviewSetRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/cases/ediscoveryCases/{ediscoveryCase%2Did}/reviewSets/{ediscoveryReviewSet%2Did}/microsoft.graph.security.addToReviewSet');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Start the process of adding a collection from Microsoft 365 services to a review set. After the operation is created, you can get the status of the operation by retrieving the Location parameter from the response headers. The location provides a URL that will return a Add to review set operation. This API is available in the following national cloud deployments.
     * @param AddToReviewSetPostRequestBody $body The request body
     * @param MicrosoftGraphSecurityAddToReviewSetRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/security-ediscoveryreviewset-addtoreviewset?view=graph-rest-1.0 Find more info here
    */
    public function post(AddToReviewSetPostRequestBody $body, ?MicrosoftGraphSecurityAddToReviewSetRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
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
     * Start the process of adding a collection from Microsoft 365 services to a review set. After the operation is created, you can get the status of the operation by retrieving the Location parameter from the response headers. The location provides a URL that will return a Add to review set operation. This API is available in the following national cloud deployments.
     * @param AddToReviewSetPostRequestBody $body The request body
     * @param MicrosoftGraphSecurityAddToReviewSetRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AddToReviewSetPostRequestBody $body, ?MicrosoftGraphSecurityAddToReviewSetRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphSecurityAddToReviewSetRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphSecurityAddToReviewSetRequestBuilder {
        return new MicrosoftGraphSecurityAddToReviewSetRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
