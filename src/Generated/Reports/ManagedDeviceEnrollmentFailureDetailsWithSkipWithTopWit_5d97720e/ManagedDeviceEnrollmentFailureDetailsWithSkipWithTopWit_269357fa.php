<?php

namespace Microsoft\Graph\Generated\Reports\ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWit_5d97720e;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Report;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the managedDeviceEnrollmentFailureDetails method. Original name: managedDeviceEnrollmentFailureDetailsWithSkipWithTopWithFilterWithSkipTokenRequestBuilder
*/
class ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWit_269357fa extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWit_269357fa and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $filter Usage: filter='{filter}'
     * @param int|null $skip Usage: skip={skip}
     * @param string|null $skipToken Usage: skipToken='{skipToken}'
     * @param int|null $top Usage: top={top}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $filter = null, ?int $skip = null, ?string $skipToken = null, ?int $top = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/managedDeviceEnrollmentFailureDetails(skip={skip},top={top},filter=\'{filter}\',skipToken=\'{skipToken}\')');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['filter'] = $filter;
            $urlTplParams['skip'] = $skip;
            $urlTplParams['skipToken'] = $skipToken;
            $urlTplParams['top'] = $top;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function managedDeviceEnrollmentFailureDetails
     * @param ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWit_1322d823|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Report|null>
     * @throws Exception
    */
    public function get(?ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWit_1322d823 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Report::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function managedDeviceEnrollmentFailureDetails
     * @param ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWit_1322d823|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWit_1322d823 $requestConfiguration = null): RequestInformation {
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
     * @return ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWit_269357fa
    */
    public function withUrl(string $rawUrl): ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWit_269357fa {
        return new ManagedDeviceEnrollmentFailureDetailsWithSkipWithTopWit_269357fa($rawUrl, $this->requestAdapter);
    }

}
