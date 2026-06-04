<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDeviceStartupProcessPerformance\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsDeviceStartupProcessPerformanceItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsDeviceStartupProcessPerformanceI_4b1051a1 extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsDeviceStartupProcessPerformanceI_457024ed|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsDeviceStartupProcessPerformanceI_457024ed $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsDeviceStartupProcessPerformanceI_4b1051a1 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsDeviceStartupProcessPerformanceI_457024ed|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsDeviceStartupProcessPerformanceI_457024ed $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsDeviceStartupProcessPerformanceI_457024ed.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsDeviceStartupProcessPerformanceI_457024ed
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsDeviceStartupProcessPerformanceI_457024ed {
        return new UserExperienceAnalyticsDeviceStartupProcessPerformanceI_457024ed($expand, $select);
    }

}
