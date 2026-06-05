<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsCategories\Item\MetricValues\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsMetricItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsMetricItemRequestBuilderGetReque_ec1d8efe extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsMetricItemRequestBuilderGetQuery_a5dee761|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsMetricItemRequestBuilderGetQuery_a5dee761 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsMetricItemRequestBuilderGetReque_ec1d8efe and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsMetricItemRequestBuilderGetQuery_a5dee761|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsMetricItemRequestBuilderGetQuery_a5dee761 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsMetricItemRequestBuilderGetQuery_a5dee761.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsMetricItemRequestBuilderGetQuery_a5dee761
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsMetricItemRequestBuilderGetQuery_a5dee761 {
        return new UserExperienceAnalyticsMetricItemRequestBuilderGetQuery_a5dee761($expand, $select);
    }

}
