<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDeviceScores\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsDeviceScoresItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsDeviceScoresItemRequestBuilderGe_3bd9581e extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsDeviceScoresItemRequestBuilderGe_a400a8e1|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsDeviceScoresItemRequestBuilderGe_a400a8e1 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsDeviceScoresItemRequestBuilderGe_3bd9581e and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsDeviceScoresItemRequestBuilderGe_a400a8e1|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsDeviceScoresItemRequestBuilderGe_a400a8e1 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsDeviceScoresItemRequestBuilderGe_a400a8e1.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsDeviceScoresItemRequestBuilderGe_a400a8e1
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsDeviceScoresItemRequestBuilderGe_a400a8e1 {
        return new UserExperienceAnalyticsDeviceScoresItemRequestBuilderGe_a400a8e1($expand, $select);
    }

}
