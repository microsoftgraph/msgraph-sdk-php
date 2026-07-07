<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthDevicePerformance\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsAppHealthDevicePerformanceItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsAppHealthDevicePerformanceItemRe_71dc6359 extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsAppHealthDevicePerformanceItemRe_d6a06344|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsAppHealthDevicePerformanceItemRe_d6a06344 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthDevicePerformanceItemRe_71dc6359 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsAppHealthDevicePerformanceItemRe_d6a06344|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsAppHealthDevicePerformanceItemRe_d6a06344 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthDevicePerformanceItemRe_d6a06344.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsAppHealthDevicePerformanceItemRe_d6a06344
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsAppHealthDevicePerformanceItemRe_d6a06344 {
        return new UserExperienceAnalyticsAppHealthDevicePerformanceItemRe_d6a06344($expand, $select);
    }

}
