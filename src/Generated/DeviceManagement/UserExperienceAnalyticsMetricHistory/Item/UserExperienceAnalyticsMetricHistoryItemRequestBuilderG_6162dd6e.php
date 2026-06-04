<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsMetricHistory\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsMetricHistoryItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsMetricHistoryItemRequestBuilderG_6162dd6e extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsMetricHistoryItemRequestBuilderG_6a854f80|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsMetricHistoryItemRequestBuilderG_6a854f80 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsMetricHistoryItemRequestBuilderG_6162dd6e and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsMetricHistoryItemRequestBuilderG_6a854f80|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsMetricHistoryItemRequestBuilderG_6a854f80 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsMetricHistoryItemRequestBuilderG_6a854f80.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsMetricHistoryItemRequestBuilderG_6a854f80
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsMetricHistoryItemRequestBuilderG_6a854f80 {
        return new UserExperienceAnalyticsMetricHistoryItemRequestBuilderG_6a854f80($expand, $select);
    }

}
