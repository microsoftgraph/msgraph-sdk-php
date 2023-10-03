<?php

namespace Microsoft\Graph\Generated\DeviceManagement\VerifyWindowsEnrollmentAutoDiscoveryWithDomainName;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the verifyWindowsEnrollmentAutoDiscovery method.
*/
class VerifyWindowsEnrollmentAutoDiscoveryWithDomainNameRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new VerifyWindowsEnrollmentAutoDiscoveryWithDomainNameRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $domainName Usage: domainName='{domainName}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $domainName = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/verifyWindowsEnrollmentAutoDiscovery(domainName=\'{domainName}\')');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['domainName'] = $domainName;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function verifyWindowsEnrollmentAutoDiscovery
     * @param VerifyWindowsEnrollmentAutoDiscoveryWithDomainNameRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?VerifyWindowsEnrollmentAutoDiscoveryWithDomainNameRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [VerifyWindowsEnrollmentAutoDiscoveryWithDomainNameGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Invoke function verifyWindowsEnrollmentAutoDiscovery
     * @param VerifyWindowsEnrollmentAutoDiscoveryWithDomainNameRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?VerifyWindowsEnrollmentAutoDiscoveryWithDomainNameRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return VerifyWindowsEnrollmentAutoDiscoveryWithDomainNameRequestBuilder
    */
    public function withUrl(string $rawUrl): VerifyWindowsEnrollmentAutoDiscoveryWithDomainNameRequestBuilder {
        return new VerifyWindowsEnrollmentAutoDiscoveryWithDomainNameRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
