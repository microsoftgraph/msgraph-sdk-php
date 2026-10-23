<?php

namespace Microsoft\Graph\Generated\Devices\Provision;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\ProvisionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the provision method.
*/
class ProvisionRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ProvisionRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/devices/provision');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Provision a device on behalf of an approved Virtual Desktop Infrastructure (VDI) provider. This action wraps the Zero Touch Deployment (ZTD) protocol to create a device in a pending state in the customer's directory. The device can't be used for authentication until it completes its registration. The created device is stamped with a system label that identifies the approved VDI provider. Only VDI applications on Microsoft's approved list of VDI providers can successfully call this action. Calls from other applications are blocked even when the application is granted the required permission.
     * @param ProvisionPostRequestBody $body The request body
     * @param ProvisionRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ProvisionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/device-provision?view=graph-rest-1.0 Find more info here
    */
    public function post(ProvisionPostRequestBody $body, ?ProvisionRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ProvisionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provision a device on behalf of an approved Virtual Desktop Infrastructure (VDI) provider. This action wraps the Zero Touch Deployment (ZTD) protocol to create a device in a pending state in the customer's directory. The device can't be used for authentication until it completes its registration. The created device is stamped with a system label that identifies the approved VDI provider. Only VDI applications on Microsoft's approved list of VDI providers can successfully call this action. Calls from other applications are blocked even when the application is granted the required permission.
     * @param ProvisionPostRequestBody $body The request body
     * @param ProvisionRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ProvisionPostRequestBody $body, ?ProvisionRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ProvisionRequestBuilder
    */
    public function withUrl(string $rawUrl): ProvisionRequestBuilder {
        return new ProvisionRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
