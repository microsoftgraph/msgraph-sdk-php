<?php

namespace Microsoft\Graph\Generated\DeviceManagement\ManagedDeviceOverview;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ManagedDeviceOverview;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the managedDeviceOverview property of the microsoft.graph.deviceManagement entity.
*/
class ManagedDeviceOverviewRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ManagedDeviceOverviewRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/managedDeviceOverview{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Read properties and relationships of the managedDeviceOverview object.
     * @param ManagedDeviceOverviewRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagedDeviceOverview|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-devices-manageddeviceoverview-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?ManagedDeviceOverviewRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagedDeviceOverview::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Read properties and relationships of the managedDeviceOverview object.
     * @param ManagedDeviceOverviewRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ManagedDeviceOverviewRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ManagedDeviceOverviewRequestBuilder
    */
    public function withUrl(string $rawUrl): ManagedDeviceOverviewRequestBuilder {
        return new ManagedDeviceOverviewRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
