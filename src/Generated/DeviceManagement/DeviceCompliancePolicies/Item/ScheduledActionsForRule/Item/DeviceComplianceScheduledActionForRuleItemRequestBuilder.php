<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicies\Item\ScheduledActionsForRule\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicies\Item\ScheduledActionsForRule\Item\ScheduledActionConfigurations\ScheduledActionConfigurationsRequestBuilder;
use Microsoft\Graph\Generated\Models\DeviceComplianceScheduledActionForRule;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the scheduledActionsForRule property of the microsoft.graph.deviceCompliancePolicy entity.
*/
class DeviceComplianceScheduledActionForRuleItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the scheduledActionConfigurations property of the microsoft.graph.deviceComplianceScheduledActionForRule entity.
    */
    public function scheduledActionConfigurations(): ScheduledActionConfigurationsRequestBuilder {
        return new ScheduledActionConfigurationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DeviceComplianceScheduledActionForRuleItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/deviceCompliancePolicies/{deviceCompliancePolicy%2Did}/scheduledActionsForRule/{deviceComplianceScheduledActionForRule%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes a deviceComplianceScheduledActionForRule.
     * @param DeviceComplianceScheduledActionForRuleItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-deviceconfig-devicecompliancescheduledactionforrule-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?DeviceComplianceScheduledActionForRuleItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read properties and relationships of the deviceComplianceScheduledActionForRule object.
     * @param DeviceComplianceScheduledActionForRuleItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceComplianceScheduledActionForRule|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-deviceconfig-devicecompliancescheduledactionforrule-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?DeviceComplianceScheduledActionForRuleItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceComplianceScheduledActionForRule::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a deviceComplianceScheduledActionForRule object.
     * @param DeviceComplianceScheduledActionForRule $body The request body
     * @param DeviceComplianceScheduledActionForRuleItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceComplianceScheduledActionForRule|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-deviceconfig-devicecompliancescheduledactionforrule-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(DeviceComplianceScheduledActionForRule $body, ?DeviceComplianceScheduledActionForRuleItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceComplianceScheduledActionForRule::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Deletes a deviceComplianceScheduledActionForRule.
     * @param DeviceComplianceScheduledActionForRuleItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DeviceComplianceScheduledActionForRuleItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read properties and relationships of the deviceComplianceScheduledActionForRule object.
     * @param DeviceComplianceScheduledActionForRuleItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceComplianceScheduledActionForRuleItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a deviceComplianceScheduledActionForRule object.
     * @param DeviceComplianceScheduledActionForRule $body The request body
     * @param DeviceComplianceScheduledActionForRuleItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceComplianceScheduledActionForRule $body, ?DeviceComplianceScheduledActionForRuleItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DeviceComplianceScheduledActionForRuleItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceComplianceScheduledActionForRuleItemRequestBuilder {
        return new DeviceComplianceScheduledActionForRuleItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
