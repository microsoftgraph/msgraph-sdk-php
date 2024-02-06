<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicies\Item\ScheduledActionsForRule;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicies\Item\ScheduledActionsForRule\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicies\Item\ScheduledActionsForRule\Item\DeviceComplianceScheduledActionForRuleItemRequestBuilder;
use Microsoft\Graph\Generated\Models\DeviceComplianceScheduledActionForRule;
use Microsoft\Graph\Generated\Models\DeviceComplianceScheduledActionForRuleCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the scheduledActionsForRule property of the microsoft.graph.deviceCompliancePolicy entity.
*/
class ScheduledActionsForRuleRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the scheduledActionsForRule property of the microsoft.graph.deviceCompliancePolicy entity.
     * @param string $deviceComplianceScheduledActionForRuleId The unique identifier of deviceComplianceScheduledActionForRule
     * @return DeviceComplianceScheduledActionForRuleItemRequestBuilder
    */
    public function byDeviceComplianceScheduledActionForRuleId(string $deviceComplianceScheduledActionForRuleId): DeviceComplianceScheduledActionForRuleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['deviceComplianceScheduledActionForRule%2Did'] = $deviceComplianceScheduledActionForRuleId;
        return new DeviceComplianceScheduledActionForRuleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ScheduledActionsForRuleRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/deviceCompliancePolicies/{deviceCompliancePolicy%2Did}/scheduledActionsForRule{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List properties and relationships of the deviceComplianceScheduledActionForRule objects.
     * @param ScheduledActionsForRuleRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceComplianceScheduledActionForRuleCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-deviceconfig-devicecompliancescheduledactionforrule-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?ScheduledActionsForRuleRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceComplianceScheduledActionForRuleCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new deviceComplianceScheduledActionForRule object.
     * @param DeviceComplianceScheduledActionForRule $body The request body
     * @param ScheduledActionsForRuleRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceComplianceScheduledActionForRule|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-deviceconfig-devicecompliancescheduledactionforrule-create?view=graph-rest-1.0 Find more info here
    */
    public function post(DeviceComplianceScheduledActionForRule $body, ?ScheduledActionsForRuleRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceComplianceScheduledActionForRule::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List properties and relationships of the deviceComplianceScheduledActionForRule objects.
     * @param ScheduledActionsForRuleRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ScheduledActionsForRuleRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new deviceComplianceScheduledActionForRule object.
     * @param DeviceComplianceScheduledActionForRule $body The request body
     * @param ScheduledActionsForRuleRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeviceComplianceScheduledActionForRule $body, ?ScheduledActionsForRuleRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ScheduledActionsForRuleRequestBuilder
    */
    public function withUrl(string $rawUrl): ScheduledActionsForRuleRequestBuilder {
        return new ScheduledActionsForRuleRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
