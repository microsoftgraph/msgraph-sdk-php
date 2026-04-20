<?php

namespace Microsoft\Graph\Generated\Admin\ConfigurationManagement\ConfigurationDrifts;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Admin\ConfigurationManagement\ConfigurationDrifts\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Admin\ConfigurationManagement\ConfigurationDrifts\Item\ConfigurationDriftItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ConfigurationDrift;
use Microsoft\Graph\Generated\Models\ConfigurationDriftCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the configurationDrifts property of the microsoft.graph.configurationManagement entity.
*/
class ConfigurationDriftsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the configurationDrifts property of the microsoft.graph.configurationManagement entity.
     * @param string $configurationDriftId The unique identifier of configurationDrift
     * @return ConfigurationDriftItemRequestBuilder
    */
    public function byConfigurationDriftId(string $configurationDriftId): ConfigurationDriftItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['configurationDrift%2Did'] = $configurationDriftId;
        return new ConfigurationDriftItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ConfigurationDriftsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/configurationManagement/configurationDrifts{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the configurationDrift objects and their properties.
     * @param ConfigurationDriftsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConfigurationDriftCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/configurationmanagement-list-configurationdrifts?view=graph-rest-1.0 Find more info here
    */
    public function get(?ConfigurationDriftsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConfigurationDriftCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to configurationDrifts for admin
     * @param ConfigurationDrift $body The request body
     * @param ConfigurationDriftsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConfigurationDrift|null>
     * @throws Exception
    */
    public function post(ConfigurationDrift $body, ?ConfigurationDriftsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConfigurationDrift::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the configurationDrift objects and their properties.
     * @param ConfigurationDriftsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ConfigurationDriftsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to configurationDrifts for admin
     * @param ConfigurationDrift $body The request body
     * @param ConfigurationDriftsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ConfigurationDrift $body, ?ConfigurationDriftsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ConfigurationDriftsRequestBuilder
    */
    public function withUrl(string $rawUrl): ConfigurationDriftsRequestBuilder {
        return new ConfigurationDriftsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
