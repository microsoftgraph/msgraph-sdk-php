<?php

namespace Microsoft\Graph\Generated\Admin\ConfigurationManagement\ConfigurationSnapshots;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Admin\ConfigurationManagement\ConfigurationSnapshots\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Admin\ConfigurationManagement\ConfigurationSnapshots\Item\ConfigurationBaselineItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ConfigurationBaseline;
use Microsoft\Graph\Generated\Models\ConfigurationBaselineCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the configurationSnapshots property of the microsoft.graph.configurationManagement entity.
*/
class ConfigurationSnapshotsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the configurationSnapshots property of the microsoft.graph.configurationManagement entity.
     * @param string $configurationBaselineId The unique identifier of configurationBaseline
     * @return ConfigurationBaselineItemRequestBuilder
    */
    public function byConfigurationBaselineId(string $configurationBaselineId): ConfigurationBaselineItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['configurationBaseline%2Did'] = $configurationBaselineId;
        return new ConfigurationBaselineItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ConfigurationSnapshotsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/configurationManagement/configurationSnapshots{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of configurationBaseline objects that represent configuration snapshots and their properties.
     * @param ConfigurationSnapshotsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConfigurationBaselineCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/configurationmanagement-list-configurationsnapshots?view=graph-rest-1.0 Find more info here
    */
    public function get(?ConfigurationSnapshotsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConfigurationBaselineCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to configurationSnapshots for admin
     * @param ConfigurationBaseline $body The request body
     * @param ConfigurationSnapshotsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConfigurationBaseline|null>
     * @throws Exception
    */
    public function post(ConfigurationBaseline $body, ?ConfigurationSnapshotsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConfigurationBaseline::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of configurationBaseline objects that represent configuration snapshots and their properties.
     * @param ConfigurationSnapshotsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ConfigurationSnapshotsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to configurationSnapshots for admin
     * @param ConfigurationBaseline $body The request body
     * @param ConfigurationSnapshotsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ConfigurationBaseline $body, ?ConfigurationSnapshotsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ConfigurationSnapshotsRequestBuilder
    */
    public function withUrl(string $rawUrl): ConfigurationSnapshotsRequestBuilder {
        return new ConfigurationSnapshotsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
