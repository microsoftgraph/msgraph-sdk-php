<?php

namespace Microsoft\\Graph\\Generated\DeviceManagement\UserExperienceAnalyticsBaselines\Item\BatteryHealthMetrics;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BatteryHealthMetricsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var BatteryHealthMetricsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BatteryHealthMetricsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BatteryHealthMetricsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BatteryHealthMetricsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BatteryHealthMetricsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BatteryHealthMetricsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BatteryHealthMetricsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): BatteryHealthMetricsRequestBuilderGetQueryParameters {
        return new BatteryHealthMetricsRequestBuilderGetQueryParameters($expand, $select);
    }

}
