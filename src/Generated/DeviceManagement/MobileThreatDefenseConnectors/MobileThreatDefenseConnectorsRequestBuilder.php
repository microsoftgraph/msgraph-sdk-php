<?php

namespace Microsoft\Graph\Generated\DeviceManagement\MobileThreatDefenseConnectors;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\MobileThreatDefenseConnectors\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\MobileThreatDefenseConnectors\Item\MobileThreatDefenseConnectorItemRequestBuilder;
use Microsoft\Graph\Generated\Models\MobileThreatDefenseConnector;
use Microsoft\Graph\Generated\Models\MobileThreatDefenseConnectorCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the mobileThreatDefenseConnectors property of the microsoft.graph.deviceManagement entity.
*/
class MobileThreatDefenseConnectorsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mobileThreatDefenseConnectors property of the microsoft.graph.deviceManagement entity.
     * @param string $mobileThreatDefenseConnectorId The unique identifier of mobileThreatDefenseConnector
     * @return MobileThreatDefenseConnectorItemRequestBuilder
    */
    public function byMobileThreatDefenseConnectorId(string $mobileThreatDefenseConnectorId): MobileThreatDefenseConnectorItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mobileThreatDefenseConnector%2Did'] = $mobileThreatDefenseConnectorId;
        return new MobileThreatDefenseConnectorItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MobileThreatDefenseConnectorsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/mobileThreatDefenseConnectors{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List properties and relationships of the mobileThreatDefenseConnector objects.
     * @param MobileThreatDefenseConnectorsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MobileThreatDefenseConnectorCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-onboarding-mobilethreatdefenseconnector-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?MobileThreatDefenseConnectorsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MobileThreatDefenseConnectorCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new mobileThreatDefenseConnector object.
     * @param MobileThreatDefenseConnector $body The request body
     * @param MobileThreatDefenseConnectorsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MobileThreatDefenseConnector|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/intune-onboarding-mobilethreatdefenseconnector-create?view=graph-rest-1.0 Find more info here
    */
    public function post(MobileThreatDefenseConnector $body, ?MobileThreatDefenseConnectorsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MobileThreatDefenseConnector::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List properties and relationships of the mobileThreatDefenseConnector objects.
     * @param MobileThreatDefenseConnectorsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MobileThreatDefenseConnectorsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new mobileThreatDefenseConnector object.
     * @param MobileThreatDefenseConnector $body The request body
     * @param MobileThreatDefenseConnectorsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MobileThreatDefenseConnector $body, ?MobileThreatDefenseConnectorsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MobileThreatDefenseConnectorsRequestBuilder
    */
    public function withUrl(string $rawUrl): MobileThreatDefenseConnectorsRequestBuilder {
        return new MobileThreatDefenseConnectorsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
