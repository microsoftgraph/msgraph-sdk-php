<?php

namespace Microsoft\Graph\Generated\DeviceManagement\VirtualEndpoint\OnPremisesConnections;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\VirtualEndpoint\OnPremisesConnections\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\VirtualEndpoint\OnPremisesConnections\Item\CloudPcOnPremisesConnectionItemRequestBuilder;
use Microsoft\Graph\Generated\Models\CloudPcOnPremisesConnection;
use Microsoft\Graph\Generated\Models\CloudPcOnPremisesConnectionCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the onPremisesConnections property of the microsoft.graph.virtualEndpoint entity.
*/
class OnPremisesConnectionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the onPremisesConnections property of the microsoft.graph.virtualEndpoint entity.
     * @param string $cloudPcOnPremisesConnectionId The unique identifier of cloudPcOnPremisesConnection
     * @return CloudPcOnPremisesConnectionItemRequestBuilder
    */
    public function byCloudPcOnPremisesConnectionId(string $cloudPcOnPremisesConnectionId): CloudPcOnPremisesConnectionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['cloudPcOnPremisesConnection%2Did'] = $cloudPcOnPremisesConnectionId;
        return new CloudPcOnPremisesConnectionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new OnPremisesConnectionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/virtualEndpoint/onPremisesConnections{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List properties and relationships of the cloudPcOnPremisesConnection objects.
     * @param OnPremisesConnectionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcOnPremisesConnectionCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/virtualendpoint-list-onpremisesconnections?view=graph-rest-1.0 Find more info here
    */
    public function get(?OnPremisesConnectionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcOnPremisesConnectionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new cloudPcOnPremisesConnection object for provisioning Cloud PCs.
     * @param CloudPcOnPremisesConnection $body The request body
     * @param OnPremisesConnectionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CloudPcOnPremisesConnection|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/virtualendpoint-post-onpremisesconnections?view=graph-rest-1.0 Find more info here
    */
    public function post(CloudPcOnPremisesConnection $body, ?OnPremisesConnectionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CloudPcOnPremisesConnection::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List properties and relationships of the cloudPcOnPremisesConnection objects.
     * @param OnPremisesConnectionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OnPremisesConnectionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new cloudPcOnPremisesConnection object for provisioning Cloud PCs.
     * @param CloudPcOnPremisesConnection $body The request body
     * @param OnPremisesConnectionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CloudPcOnPremisesConnection $body, ?OnPremisesConnectionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/deviceManagement/virtualEndpoint/onPremisesConnections';
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
     * @return OnPremisesConnectionsRequestBuilder
    */
    public function withUrl(string $rawUrl): OnPremisesConnectionsRequestBuilder {
        return new OnPremisesConnectionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
