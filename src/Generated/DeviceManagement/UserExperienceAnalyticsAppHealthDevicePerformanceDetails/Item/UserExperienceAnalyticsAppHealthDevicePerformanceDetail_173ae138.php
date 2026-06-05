<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthDevicePerformanceDetails\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsAppHealthDevicePerformanceDetailsItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsAppHealthDevicePerformanceDetail_173ae138 extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsAppHealthDevicePerformanceDetail_b1e77f73|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsAppHealthDevicePerformanceDetail_b1e77f73 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthDevicePerformanceDetail_173ae138 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsAppHealthDevicePerformanceDetail_b1e77f73|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsAppHealthDevicePerformanceDetail_b1e77f73 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthDevicePerformanceDetail_b1e77f73.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsAppHealthDevicePerformanceDetail_b1e77f73
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsAppHealthDevicePerformanceDetail_b1e77f73 {
        return new UserExperienceAnalyticsAppHealthDevicePerformanceDetail_b1e77f73($expand, $select);
    }

}
