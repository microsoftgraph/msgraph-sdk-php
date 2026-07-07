<?php

namespace Microsoft\Graph\Generated\Security\Alerts_v2\MicrosoftGraphSecurityMoveAlerts;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\MergeResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the moveAlerts method.
*/
class MicrosoftGraphSecurityMoveAlertsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MicrosoftGraphSecurityMoveAlertsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/alerts_v2/microsoft.graph.security.moveAlerts');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Move one or more alert resources to a new or existing incident.
     * @param MoveAlertsPostRequestBody $body The request body
     * @param MicrosoftGraphSecurityMoveAlertsRequestBuilderPostReque_d3f7a2c3|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MergeResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/security-alert-movealerts?view=graph-rest-1.0 Find more info here
    */
    public function post(MoveAlertsPostRequestBody $body, ?MicrosoftGraphSecurityMoveAlertsRequestBuilderPostReque_d3f7a2c3 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MergeResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Move one or more alert resources to a new or existing incident.
     * @param MoveAlertsPostRequestBody $body The request body
     * @param MicrosoftGraphSecurityMoveAlertsRequestBuilderPostReque_d3f7a2c3|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MoveAlertsPostRequestBody $body, ?MicrosoftGraphSecurityMoveAlertsRequestBuilderPostReque_d3f7a2c3 $requestConfiguration = null): RequestInformation {
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
     * @return MicrosoftGraphSecurityMoveAlertsRequestBuilder
    */
    public function withUrl(string $rawUrl): MicrosoftGraphSecurityMoveAlertsRequestBuilder {
        return new MicrosoftGraphSecurityMoveAlertsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
