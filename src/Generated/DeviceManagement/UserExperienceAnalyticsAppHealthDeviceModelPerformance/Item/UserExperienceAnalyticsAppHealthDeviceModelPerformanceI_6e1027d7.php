<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthDeviceModelPerformance\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsAppHealthDeviceModelPerformanceItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsAppHealthDeviceModelPerformanceI_6e1027d7 extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsAppHealthDeviceModelPerformanceI_36617f54|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsAppHealthDeviceModelPerformanceI_36617f54 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthDeviceModelPerformanceI_6e1027d7 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsAppHealthDeviceModelPerformanceI_36617f54|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsAppHealthDeviceModelPerformanceI_36617f54 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthDeviceModelPerformanceI_36617f54.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsAppHealthDeviceModelPerformanceI_36617f54
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsAppHealthDeviceModelPerformanceI_36617f54 {
        return new UserExperienceAnalyticsAppHealthDeviceModelPerformanceI_36617f54($expand, $select);
    }

}
