<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsBaselines\Item\RebootAnalyticsMetrics;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RebootAnalyticsMetricsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RebootAnalyticsMetricsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RebootAnalyticsMetricsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new rebootAnalyticsMetricsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RebootAnalyticsMetricsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RebootAnalyticsMetricsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new rebootAnalyticsMetricsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RebootAnalyticsMetricsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RebootAnalyticsMetricsRequestBuilderGetQueryParameters {
        return new RebootAnalyticsMetricsRequestBuilderGetQueryParameters($expand, $select);
    }

}
