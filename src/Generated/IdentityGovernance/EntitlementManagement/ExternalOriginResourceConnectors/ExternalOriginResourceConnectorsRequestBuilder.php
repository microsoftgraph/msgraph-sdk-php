<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ExternalOriginResourceConnectors;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ExternalOriginResourceConnectors\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ExternalOriginResourceConnectors\Item\ExternalOriginResourceConnectorItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ExternalOriginResourceConnector;
use Microsoft\Graph\Generated\Models\ExternalOriginResourceConnectorCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the externalOriginResourceConnectors property of the microsoft.graph.entitlementManagement entity.
*/
class ExternalOriginResourceConnectorsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the externalOriginResourceConnectors property of the microsoft.graph.entitlementManagement entity.
     * @param string $externalOriginResourceConnectorId The unique identifier of externalOriginResourceConnector
     * @return ExternalOriginResourceConnectorItemRequestBuilder
    */
    public function byExternalOriginResourceConnectorId(string $externalOriginResourceConnectorId): ExternalOriginResourceConnectorItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['externalOriginResourceConnector%2Did'] = $externalOriginResourceConnectorId;
        return new ExternalOriginResourceConnectorItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ExternalOriginResourceConnectorsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/entitlementManagement/externalOriginResourceConnectors{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of externalOriginResourceConnector objects and their properties.
     * @param ExternalOriginResourceConnectorsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExternalOriginResourceConnectorCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/entitlementmanagement-list-externaloriginresourceconnectors?view=graph-rest-1.0 Find more info here
    */
    public function get(?ExternalOriginResourceConnectorsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExternalOriginResourceConnectorCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Creates a new externalOriginResourceConnector object.
     * @param ExternalOriginResourceConnector $body The request body
     * @param ExternalOriginResourceConnectorsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExternalOriginResourceConnector|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/entitlementmanagement-post-externaloriginresourceconnectors?view=graph-rest-1.0 Find more info here
    */
    public function post(ExternalOriginResourceConnector $body, ?ExternalOriginResourceConnectorsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExternalOriginResourceConnector::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of externalOriginResourceConnector objects and their properties.
     * @param ExternalOriginResourceConnectorsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ExternalOriginResourceConnectorsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Creates a new externalOriginResourceConnector object.
     * @param ExternalOriginResourceConnector $body The request body
     * @param ExternalOriginResourceConnectorsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ExternalOriginResourceConnector $body, ?ExternalOriginResourceConnectorsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ExternalOriginResourceConnectorsRequestBuilder
    */
    public function withUrl(string $rawUrl): ExternalOriginResourceConnectorsRequestBuilder {
        return new ExternalOriginResourceConnectorsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
