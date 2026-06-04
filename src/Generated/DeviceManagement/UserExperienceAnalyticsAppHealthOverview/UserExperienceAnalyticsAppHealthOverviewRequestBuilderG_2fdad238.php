<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthOverview;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: userExperienceAnalyticsAppHealthOverviewRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsAppHealthOverviewRequestBuilderG_2fdad238 extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsAppHealthOverviewRequestBuilderG_b2cc0469|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsAppHealthOverviewRequestBuilderG_b2cc0469 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthOverviewRequestBuilderG_2fdad238 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsAppHealthOverviewRequestBuilderG_b2cc0469|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsAppHealthOverviewRequestBuilderG_b2cc0469 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthOverviewRequestBuilderG_b2cc0469.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsAppHealthOverviewRequestBuilderG_b2cc0469
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsAppHealthOverviewRequestBuilderG_b2cc0469 {
        return new UserExperienceAnalyticsAppHealthOverviewRequestBuilderG_b2cc0469($expand, $select);
    }

}
