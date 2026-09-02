<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ExternalOriginResourceConnectors\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ExternalOriginResourceConnector;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the externalOriginResourceConnectors property of the microsoft.graph.entitlementManagement entity.
*/
class ExternalOriginResourceConnectorItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ExternalOriginResourceConnectorItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/entitlementManagement/externalOriginResourceConnectors/{externalOriginResourceConnector%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete an externalOriginResourceConnector object.
     * @param ExternalOriginResourceConnectorItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/externaloriginresourceconnector-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?ExternalOriginResourceConnectorItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of an externalOriginResourceConnector object.
     * @param ExternalOriginResourceConnectorItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExternalOriginResourceConnector|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/externaloriginresourceconnector-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?ExternalOriginResourceConnectorItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExternalOriginResourceConnector::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of an externalOriginResourceConnector object.
     * @param ExternalOriginResourceConnector $body The request body
     * @param ExternalOriginResourceConnectorItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExternalOriginResourceConnector|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/externaloriginresourceconnector-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(ExternalOriginResourceConnector $body, ?ExternalOriginResourceConnectorItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExternalOriginResourceConnector::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete an externalOriginResourceConnector object.
     * @param ExternalOriginResourceConnectorItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ExternalOriginResourceConnectorItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of an externalOriginResourceConnector object.
     * @param ExternalOriginResourceConnectorItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ExternalOriginResourceConnectorItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of an externalOriginResourceConnector object.
     * @param ExternalOriginResourceConnector $body The request body
     * @param ExternalOriginResourceConnectorItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ExternalOriginResourceConnector $body, ?ExternalOriginResourceConnectorItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ExternalOriginResourceConnectorItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ExternalOriginResourceConnectorItemRequestBuilder {
        return new ExternalOriginResourceConnectorItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
