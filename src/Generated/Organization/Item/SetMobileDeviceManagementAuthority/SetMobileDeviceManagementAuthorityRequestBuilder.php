<?php

namespace Microsoft\Graph\Generated\Organization\Item\SetMobileDeviceManagementAuthority;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the setMobileDeviceManagementAuthority method.
*/
class SetMobileDeviceManagementAuthorityRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SetMobileDeviceManagementAuthorityRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/organization/{organization%2Did}/setMobileDeviceManagementAuthority');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Set mobile device management authority
     * @param SetMobileDeviceManagementAuthorityRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SetMobileDeviceManagementAuthorityPostResponse|null>
     * @throws Exception
    */
    public function post(?SetMobileDeviceManagementAuthorityRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SetMobileDeviceManagementAuthorityPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Set mobile device management authority
     * @param SetMobileDeviceManagementAuthorityRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?SetMobileDeviceManagementAuthorityRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return SetMobileDeviceManagementAuthorityRequestBuilder
    */
    public function withUrl(string $rawUrl): SetMobileDeviceManagementAuthorityRequestBuilder {
        return new SetMobileDeviceManagementAuthorityRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
