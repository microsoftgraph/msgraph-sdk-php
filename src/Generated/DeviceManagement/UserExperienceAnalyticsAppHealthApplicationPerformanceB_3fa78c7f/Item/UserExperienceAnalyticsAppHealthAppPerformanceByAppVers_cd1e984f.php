<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformanceB_3fa78c7f\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceIdItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_cd1e984f extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_24d92fff|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_24d92fff $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_cd1e984f and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_24d92fff|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_24d92fff $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_24d92fff.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_24d92fff
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_24d92fff {
        return new UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_24d92fff($expand, $select);
    }

}
