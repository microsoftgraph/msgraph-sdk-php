<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileAppConfigurations\Item\DeviceStatuses\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ManagedDeviceMobileAppConfigurationDeviceStatus;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceStatuses property of the microsoft.graph.managedDeviceMobileAppConfiguration entity. Original name: ManagedDeviceMobileAppConfigurationDeviceStatusItemRequestBuilder
*/
class ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_fe086f3e extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_fe086f3e and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceAppManagement/mobileAppConfigurations/{managedDeviceMobileAppConfiguration%2Did}/deviceStatuses/{managedDeviceMobileAppConfigurationDeviceStatus%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property deviceStatuses for deviceAppManagement
     * @param ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_c67f6aed|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_c67f6aed $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * List of ManagedDeviceMobileAppConfigurationDeviceStatus.
     * @param ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_bcbcff21|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagedDeviceMobileAppConfigurationDeviceStatus|null>
     * @throws Exception
    */
    public function get(?ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_bcbcff21 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagedDeviceMobileAppConfigurationDeviceStatus::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property deviceStatuses in deviceAppManagement
     * @param ManagedDeviceMobileAppConfigurationDeviceStatus $body The request body
     * @param ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_f5b61e7b|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ManagedDeviceMobileAppConfigurationDeviceStatus|null>
     * @throws Exception
    */
    public function patch(ManagedDeviceMobileAppConfigurationDeviceStatus $body, ?ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_f5b61e7b $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ManagedDeviceMobileAppConfigurationDeviceStatus::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property deviceStatuses for deviceAppManagement
     * @param ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_c67f6aed|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_c67f6aed $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * List of ManagedDeviceMobileAppConfigurationDeviceStatus.
     * @param ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_bcbcff21|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_bcbcff21 $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property deviceStatuses in deviceAppManagement
     * @param ManagedDeviceMobileAppConfigurationDeviceStatus $body The request body
     * @param ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_f5b61e7b|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ManagedDeviceMobileAppConfigurationDeviceStatus $body, ?ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_f5b61e7b $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_fe086f3e
    */
    public function withUrl(string $rawUrl): ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_fe086f3e {
        return new ManagedDeviceMobileAppConfigurationDeviceStatusItemRequ_fe086f3e($rawUrl, $this->requestAdapter);
    }

}
