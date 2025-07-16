<?php

namespace Microsoft\Graph\Generated\AuditLogs\SignIns\ConfirmSafe;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the confirmSafe method.
*/
class ConfirmSafeRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ConfirmSafeRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/auditLogs/signIns/confirmSafe');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Mark an event in Microsoft Entra sign-in logs as safe. Admins can either mark the events flagged as risky by Microsoft Entra ID Protection as safe, or they can mark unflagged events as safe. For details about investigating Identity Protection risks, see How to investigate risk.
     * @param ConfirmSafePostRequestBody $body The request body
     * @param ConfirmSafeRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/signin-confirmsafe?view=graph-rest-1.0 Find more info here
    */
    public function post(ConfirmSafePostRequestBody $body, ?ConfirmSafeRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Mark an event in Microsoft Entra sign-in logs as safe. Admins can either mark the events flagged as risky by Microsoft Entra ID Protection as safe, or they can mark unflagged events as safe. For details about investigating Identity Protection risks, see How to investigate risk.
     * @param ConfirmSafePostRequestBody $body The request body
     * @param ConfirmSafeRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ConfirmSafePostRequestBody $body, ?ConfirmSafeRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ConfirmSafeRequestBuilder
    */
    public function withUrl(string $rawUrl): ConfirmSafeRequestBuilder {
        return new ConfirmSafeRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
