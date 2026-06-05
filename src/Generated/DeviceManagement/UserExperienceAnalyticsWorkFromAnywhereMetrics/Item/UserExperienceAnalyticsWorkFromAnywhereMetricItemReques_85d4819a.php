<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsWorkFromAnywhereMetrics\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsWorkFromAnywhereMetricItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsWorkFromAnywhereMetricItemReques_85d4819a extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsWorkFromAnywhereMetricItemReques_c4923176|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsWorkFromAnywhereMetricItemReques_c4923176 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsWorkFromAnywhereMetricItemReques_85d4819a and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsWorkFromAnywhereMetricItemReques_c4923176|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsWorkFromAnywhereMetricItemReques_c4923176 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsWorkFromAnywhereMetricItemReques_c4923176.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsWorkFromAnywhereMetricItemReques_c4923176
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsWorkFromAnywhereMetricItemReques_c4923176 {
        return new UserExperienceAnalyticsWorkFromAnywhereMetricItemReques_c4923176($expand, $select);
    }

}
