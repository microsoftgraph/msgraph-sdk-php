<?php

namespace Microsoft\Graph\Generated\DeviceManagement\ExchangeConnectors\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\ExchangeConnectors\Item\Sync\SyncRequestBuilder;
use Microsoft\Graph\Generated\Models\DeviceManagementExchangeConnector;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the exchangeConnectors property of the microsoft.graph.deviceManagement entity.
*/
class DeviceManagementExchangeConnectorItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the sync method.
    */
    public function sync(): SyncRequestBuilder {
        return new SyncRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new DeviceManagementExchangeConnectorItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/exchangeConnectors/{deviceManagementExchangeConnector%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Deletes a deviceManagementExchangeConnector.
     * @param DeviceManagementExchangeConnectorItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-onboarding-devicemanagementexchangeconnector-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?DeviceManagementExchangeConnectorItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read properties and relationships of the deviceManagementExchangeConnector object.
     * @param DeviceManagementExchangeConnectorItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementExchangeConnector|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-onboarding-devicemanagementexchangeconnector-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?DeviceManagementExchangeConnectorItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementExchangeConnector::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a deviceManagementExchangeConnector object.
     * @param DeviceManagementExchangeConnector $body The request body
     * @param DeviceManagementExchangeConnectorItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DeviceManagementExchangeConnector|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-onboarding-devicemanagementexchangeconnector-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(DeviceManagementExchangeConnector $body, ?DeviceManagementExchangeConnectorItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DeviceManagementExchangeConnector::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Deletes a deviceManagementExchangeConnector.
     * @param DeviceManagementExchangeConnectorItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DeviceManagementExchangeConnectorItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Read properties and relationships of the deviceManagementExchangeConnector object.
     * @param DeviceManagementExchangeConnectorItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DeviceManagementExchangeConnectorItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a deviceManagementExchangeConnector object.
     * @param DeviceManagementExchangeConnector $body The request body
     * @param DeviceManagementExchangeConnectorItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DeviceManagementExchangeConnector $body, ?DeviceManagementExchangeConnectorItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DeviceManagementExchangeConnectorItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DeviceManagementExchangeConnectorItemRequestBuilder {
        return new DeviceManagementExchangeConnectorItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
