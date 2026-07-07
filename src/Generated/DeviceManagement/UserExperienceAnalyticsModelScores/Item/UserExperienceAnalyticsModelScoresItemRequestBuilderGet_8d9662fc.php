<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsModelScores\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: UserExperienceAnalyticsModelScoresItemRequestBuilderGetRequestConfiguration
*/
class UserExperienceAnalyticsModelScoresItemRequestBuilderGet_8d9662fc extends BaseRequestConfiguration 
{
    /**
     * @var UserExperienceAnalyticsModelScoresItemRequestBuilderGet_03da29c5|null $queryParameters Request query parameters
    */
    public ?UserExperienceAnalyticsModelScoresItemRequestBuilderGet_03da29c5 $queryParameters = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsModelScoresItemRequestBuilderGet_8d9662fc and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UserExperienceAnalyticsModelScoresItemRequestBuilderGet_03da29c5|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UserExperienceAnalyticsModelScoresItemRequestBuilderGet_03da29c5 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UserExperienceAnalyticsModelScoresItemRequestBuilderGet_03da29c5.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UserExperienceAnalyticsModelScoresItemRequestBuilderGet_03da29c5
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UserExperienceAnalyticsModelScoresItemRequestBuilderGet_03da29c5 {
        return new UserExperienceAnalyticsModelScoresItemRequestBuilderGet_03da29c5($expand, $select);
    }

}
