<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthOSVersionPerformance\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsAppHealthOSVersionPerformanceItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsAppHealthOSVersionPerformanceIte_f60bf4af extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsAppHealthOSVersionPerformanceIte_e183b48f|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsAppHealthOSVersionPerformanceIte_e183b48f $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthOSVersionPerformanceIte_f60bf4af and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsAppHealthOSVersionPerformanceIte_e183b48f|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsAppHealthOSVersionPerformanceIte_e183b48f $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthOSVersionPerformanceIte_e183b48f.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsAppHealthOSVersionPerformanceIte_e183b48f
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsAppHealthOSVersionPerformanceIte_e183b48f {
        return new UserExperienceAnalyticsAppHealthOSVersionPerformanceIte_e183b48f($expand, $select);
    }

}
