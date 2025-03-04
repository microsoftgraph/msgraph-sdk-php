<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\Assign\AssignRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\DeviceSettingStateSummaries\DeviceSettingStateSummariesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\DeviceStatuses\DeviceStatusesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\DeviceStatusOverview\DeviceStatusOverviewRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\GetOmaSettingPlainTextValueWithSecretReferenceValueId\GetOmaSettingPlainTextValueWithSecretReferenceValueIdRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\UserStatuses\UserStatusesRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\UserStatusOverview\UserStatusOverviewRequestBuilder;
use Microsoft\Graph\Generated\Models\DeviceConfiguration;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deviceConfigurations property of the microsoft.graph.deviceManagement entity.
*/
class DeviceConfigurationItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the assign method.
    */
    public function assign(): AssignRequestBuilder {
        return new AssignRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.deviceConfiguration entity.
    */
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceSettingStateSummaries property of the microsoft.graph.deviceConfiguration entity.
    */
    public function deviceSettingStateSummaries(): DeviceSettingStateSummariesRequestBuilder {
        return new DeviceSettingStateSummariesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceStatuses property of the microsoft.graph.deviceConfiguration entity.
    */
    public function deviceStatuses(): DeviceStatusesRequestBuilder {
        return new DeviceStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the deviceStatusOverview property of the microsoft.graph.deviceConfiguration entity.
    */
    public function deviceStatusOverview(): DeviceStatusOverviewRequestBuilder {
        return new DeviceStatusOverviewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userStatuses property of the microsoft.graph.deviceConfiguration entity.
    */
    public function userStatuses(): UserStatusesRequestBuilder {
        return new UserStatusesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userStatusOverview property of the microsoft.graph.deviceConfiguration entity.
    */
    public function userStatusOverview(): UserStatusOverviewRequestBuilder {
        return new UserStatusOverviewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DeviceConfigurationItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/deviceConfigurations/{deviceConfiguration%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes a iosGeneralDeviceConfiguration.
     * @param DeviceConfigurationItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-deviceconfig-iosgeneraldeviceconfiguration-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?DeviceConfigurationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read properties and relationships of the windows10GeneralConfiguration object.
     * @param DeviceConfigurationItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceConfiguration|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-deviceconfig-windows10generalconfiguration-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?DeviceConfigurationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Provides operations to call the getOmaSettingPlainTextValue method.
     * @param string $secretReferenceValueId Usage: secretReferenceValueId='{secretReferenceValueId}'
     * @return GetOmaSettingPlainTextValueWithSecretReferenceValueIdRequestBuilder
    */
    public function getOmaSettingPlainTextValueWithSecretReferenceValueId(string $secretReferenceValueId): GetOmaSettingPlainTextValueWithSecretReferenceValueIdRequestBuilder {
        return new GetOmaSettingPlainTextValueWithSecretReferenceValueIdRequestBuilder($this->pathParameters, $this->requestAdapter, $secretReferenceValueId);
    }

    /**
     * Update the properties of a windows10GeneralConfiguration object.
     * @param DeviceConfiguration $body The request body
     * @param DeviceConfigurationItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceConfiguration|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-deviceconfig-windows10generalconfiguration-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(DeviceConfiguration $body, ?DeviceConfigurationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceConfiguration::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Deletes a iosGeneralDeviceConfiguration.
     * @param DeviceConfigurationItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DeviceConfigurationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read properties and relationships of the windows10GeneralConfiguration object.
     * @param DeviceConfigurationItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceConfigurationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a windows10GeneralConfiguration object.
     * @param DeviceConfiguration $body The request body
     * @param DeviceConfigurationItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceConfiguration $body, ?DeviceConfigurationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DeviceConfigurationItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceConfigurationItemRequestBuilder {
        return new DeviceConfigurationItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
