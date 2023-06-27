<?php

namespace Microsoft\Graph\Generated\DeviceManagement\MobileThreatDefenseConnectors;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
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
     * @param string $mobileThreatDefenseConnectorId Unique identifier of the item
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
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/mobileThreatDefenseConnectors{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List properties and relationships of the mobileThreatDefenseConnector objects.
     * @param MobileThreatDefenseConnectorsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/intune-onboarding-mobilethreatdefenseconnector-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?MobileThreatDefenseConnectorsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [MobileThreatDefenseConnectorCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create a new mobileThreatDefenseConnector object.
     * @param MobileThreatDefenseConnector $body The request body
     * @param MobileThreatDefenseConnectorsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/intune-onboarding-mobilethreatdefenseconnector-create?view=graph-rest-1.0 Find more info here
    */
    public function post(MobileThreatDefenseConnector $body, ?MobileThreatDefenseConnectorsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [MobileThreatDefenseConnector::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
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
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
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
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
