<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDevicePerformance\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsDevicePerformanceItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsDevicePerformanceItemRequestBuil_4c591ba5 extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsDevicePerformanceItemRequestBuil_c753c858|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsDevicePerformanceItemRequestBuil_c753c858 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsDevicePerformanceItemRequestBuil_4c591ba5 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsDevicePerformanceItemRequestBuil_c753c858|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsDevicePerformanceItemRequestBuil_c753c858 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsDevicePerformanceItemRequestBuil_c753c858.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsDevicePerformanceItemRequestBuil_c753c858
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsDevicePerformanceItemRequestBuil_c753c858 {
        return new UserExperienceAnalyticsDevicePerformanceItemRequestBuil_c753c858($expand, $select);
    }

}
