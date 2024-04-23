<?php

namespace Microsoft\Graph\Generated\DeviceManagement\IosUpdateStatuses;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\IosUpdateStatuses\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\IosUpdateStatuses\Item\IosUpdateDeviceStatusItemRequestBuilder;
use Microsoft\Graph\Generated\Models\IosUpdateDeviceStatus;
use Microsoft\Graph\Generated\Models\IosUpdateDeviceStatusCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the iosUpdateStatuses property of the microsoft.graph.deviceManagement entity.
*/
class IosUpdateStatusesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the iosUpdateStatuses property of the microsoft.graph.deviceManagement entity.
     * @param string $iosUpdateDeviceStatusId The unique identifier of iosUpdateDeviceStatus
     * @return IosUpdateDeviceStatusItemRequestBuilder
    */
    public function byIosUpdateDeviceStatusId(string $iosUpdateDeviceStatusId): IosUpdateDeviceStatusItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['iosUpdateDeviceStatus%2Did'] = $iosUpdateDeviceStatusId;
        return new IosUpdateDeviceStatusItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new IosUpdateStatusesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/iosUpdateStatuses{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The IOS software update installation statuses for this account.
     * @param IosUpdateStatusesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IosUpdateDeviceStatusCollectionResponse|null>
     * @throws Exception
    */
    public function get(?IosUpdateStatusesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IosUpdateDeviceStatusCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to iosUpdateStatuses for deviceManagement
     * @param IosUpdateDeviceStatus $body The request body
     * @param IosUpdateStatusesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IosUpdateDeviceStatus|null>
     * @throws Exception
    */
    public function post(IosUpdateDeviceStatus $body, ?IosUpdateStatusesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IosUpdateDeviceStatus::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The IOS software update installation statuses for this account.
     * @param IosUpdateStatusesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?IosUpdateStatusesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to iosUpdateStatuses for deviceManagement
     * @param IosUpdateDeviceStatus $body The request body
     * @param IosUpdateStatusesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(IosUpdateDeviceStatus $body, ?IosUpdateStatusesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return IosUpdateStatusesRequestBuilder
    */
    public function withUrl(string $rawUrl): IosUpdateStatusesRequestBuilder {
        return new IosUpdateStatusesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
