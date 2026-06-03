<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformanceB_76e0e2cf;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: userExperienceAnalyticsAppHealthApplicationPerformanceByAppVersionDetailsRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsAppHealthApplicationPerformanceB_de4a1f50 extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsAppHealthApplicationPerformanceB_09e45136|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsAppHealthApplicationPerformanceB_09e45136 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthApplicationPerformanceB_de4a1f50 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsAppHealthApplicationPerformanceB_09e45136|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsAppHealthApplicationPerformanceB_09e45136 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthApplicationPerformanceB_09e45136.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return UserExperienceAnalyticsAppHealthApplicationPerformanceB_09e45136
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): UserExperienceAnalyticsAppHealthApplicationPerformanceB_09e45136 {
        return new UserExperienceAnalyticsAppHealthApplicationPerformanceB_09e45136($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
