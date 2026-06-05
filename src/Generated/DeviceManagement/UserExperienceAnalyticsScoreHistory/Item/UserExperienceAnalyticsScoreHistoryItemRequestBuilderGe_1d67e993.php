<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsScoreHistory\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsScoreHistoryItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsScoreHistoryItemRequestBuilderGe_1d67e993 extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsScoreHistoryItemRequestBuilderGe_99f6de1d|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsScoreHistoryItemRequestBuilderGe_99f6de1d $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsScoreHistoryItemRequestBuilderGe_1d67e993 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsScoreHistoryItemRequestBuilderGe_99f6de1d|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsScoreHistoryItemRequestBuilderGe_99f6de1d $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsScoreHistoryItemRequestBuilderGe_99f6de1d.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsScoreHistoryItemRequestBuilderGe_99f6de1d
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsScoreHistoryItemRequestBuilderGe_99f6de1d {
        return new UserExperienceAnalyticsScoreHistoryItemRequestBuilderGe_99f6de1d($expand, $select);
    }

}
