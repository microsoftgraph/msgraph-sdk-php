<?php

namespace Microsoft\Graph\Generated\DeviceManagement\VirtualEndpoint\ServicePlans;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\VirtualEndpoint\ServicePlans\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\VirtualEndpoint\ServicePlans\Item\CloudPcServicePlanItemRequestBuilder;
use Microsoft\Graph\Generated\Models\CloudPcServicePlanCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the servicePlans property of the microsoft.graph.virtualEndpoint entity.
*/
class ServicePlansRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the servicePlans property of the microsoft.graph.virtualEndpoint entity.
     * @param string $cloudPcServicePlanId The unique identifier of cloudPcServicePlan
     * @return CloudPcServicePlanItemRequestBuilder
    */
    public function byCloudPcServicePlanId(string $cloudPcServicePlanId): CloudPcServicePlanItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPcServicePlan%2Did'] = $cloudPcServicePlanId;
        return new CloudPcServicePlanItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ServicePlansRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/servicePlans{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List the currently available service plans that an organization can purchase for their Cloud PCs. For examples of currently available service plans, see Windows 365 compare plans and pricing. Currently, the Microsoft Graph API is available for Windows 365 Enterprise.
     * @param ServicePlansRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcServicePlanCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/virtualendpoint-list-serviceplans?view=graph-rest-1.0 Find more info here
    */
    public function get(?ServicePlansRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcServicePlanCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List the currently available service plans that an organization can purchase for their Cloud PCs. For examples of currently available service plans, see Windows 365 compare plans and pricing. Currently, the Microsoft Graph API is available for Windows 365 Enterprise.
     * @param ServicePlansRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ServicePlansRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ServicePlansRequestBuilder
    */
    public function withUrl(string $rawUrl): ServicePlansRequestBuilder {
        return new ServicePlansRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
