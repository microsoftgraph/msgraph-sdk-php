<?php

namespace Microsoft\Graph\Generated\Reports\ManagedDeviceEnrollmentFailureDetails;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Report;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the managedDeviceEnrollmentFailureDetails method.
*/
class ManagedDeviceEnrollmentFailureDetailsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ManagedDeviceEnrollmentFailureDetailsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/managedDeviceEnrollmentFailureDetails()');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function managedDeviceEnrollmentFailureDetails
     * @param ManagedDeviceEnrollmentFailureDetailsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Report|null>
     * @throws Exception
    */
    public function get(?ManagedDeviceEnrollmentFailureDetailsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Report::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function managedDeviceEnrollmentFailureDetails
     * @param ManagedDeviceEnrollmentFailureDetailsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ManagedDeviceEnrollmentFailureDetailsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
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
     * @return ManagedDeviceEnrollmentFailureDetailsRequestBuilder
    */
    public function withUrl(string $rawUrl): ManagedDeviceEnrollmentFailureDetailsRequestBuilder {
        return new ManagedDeviceEnrollmentFailureDetailsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
