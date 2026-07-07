<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformance\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsAppHealthApplicationPerformanceItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsAppHealthApplicationPerformanceI_28a82172 extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsAppHealthApplicationPerformanceI_6ec3cb02|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsAppHealthApplicationPerformanceI_6ec3cb02 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthApplicationPerformanceI_28a82172 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsAppHealthApplicationPerformanceI_6ec3cb02|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsAppHealthApplicationPerformanceI_6ec3cb02 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthApplicationPerformanceI_6ec3cb02.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsAppHealthApplicationPerformanceI_6ec3cb02
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsAppHealthApplicationPerformanceI_6ec3cb02 {
        return new UserExperienceAnalyticsAppHealthApplicationPerformanceI_6ec3cb02($expand, $select);
    }

}
