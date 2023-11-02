<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthOverview\MetricValues;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthOverview\MetricValues\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthOverview\MetricValues\Item\UserExperienceAnalyticsMetricItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsMetric;
use Microsoft\Graph\Generated\Models\UserExperienceAnalyticsMetricCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the metricValues property of the microsoft.graph.userExperienceAnalyticsCategory entity.
*/
class MetricValuesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the metricValues property of the microsoft.graph.userExperienceAnalyticsCategory entity.
     * @param string $userExperienceAnalyticsMetricId The unique identifier of userExperienceAnalyticsMetric
     * @return UserExperienceAnalyticsMetricItemRequestBuilder
    */
    public function byUserExperienceAnalyticsMetricId(string $userExperienceAnalyticsMetricId): UserExperienceAnalyticsMetricItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userExperienceAnalyticsMetric%2Did'] = $userExperienceAnalyticsMetricId;
        return new UserExperienceAnalyticsMetricItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MetricValuesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/deviceManagement/userExperienceAnalyticsAppHealthOverview/metricValues{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The metric values for the user experience analytics category. Read-only.
     * @param MetricValuesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsMetricCollectionResponse|null>
     * @throws Exception
    */
    public function get(?MetricValuesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsMetricCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to metricValues for deviceManagement
     * @param UserExperienceAnalyticsMetric $body The request body
     * @param MetricValuesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserExperienceAnalyticsMetric|null>
     * @throws Exception
    */
    public function post(UserExperienceAnalyticsMetric $body, ?MetricValuesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserExperienceAnalyticsMetric::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The metric values for the user experience analytics category. Read-only.
     * @param MetricValuesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MetricValuesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Create new navigation property to metricValues for deviceManagement
     * @param UserExperienceAnalyticsMetric $body The request body
     * @param MetricValuesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserExperienceAnalyticsMetric $body, ?MetricValuesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return MetricValuesRequestBuilder
    */
    public function withUrl(string $rawUrl): MetricValuesRequestBuilder {
        return new MetricValuesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
