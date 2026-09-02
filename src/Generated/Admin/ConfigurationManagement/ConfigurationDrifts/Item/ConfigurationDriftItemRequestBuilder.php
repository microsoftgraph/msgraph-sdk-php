<?php

namespace Microsoft\Graph\Generated\Admin\ConfigurationManagement\ConfigurationDrifts\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ConfigurationDrift;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the configurationDrifts property of the microsoft.graph.configurationManagement entity.
*/
class ConfigurationDriftItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ConfigurationDriftItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/configurationManagement/configurationDrifts/{configurationDrift%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the properties and relationships of a configurationDrift object.
     * @param ConfigurationDriftItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConfigurationDrift|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/configurationdrift-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?ConfigurationDriftItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConfigurationDrift::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the properties and relationships of a configurationDrift object.
     * @param ConfigurationDriftItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ConfigurationDriftItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ConfigurationDriftItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ConfigurationDriftItemRequestBuilder {
        return new ConfigurationDriftItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
