<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformanceB_76e0e2cf\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetailsItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_18ce4f23 extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_29e2117b|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_29e2117b $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_18ce4f23 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_29e2117b|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_29e2117b $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_29e2117b.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_29e2117b
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_29e2117b {
        return new UserExperienceAnalyticsAppHealthAppPerformanceByAppVers_29e2117b($expand, $select);
    }

}
