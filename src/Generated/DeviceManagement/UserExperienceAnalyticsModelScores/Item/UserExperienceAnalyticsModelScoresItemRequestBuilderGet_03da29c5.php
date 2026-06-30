<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsModelScores\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * User experience analytics model scores Original name: UserExperienceAnalyticsModelScoresItemRequestBuilderGetQueryParameters
*/
class UserExperienceAnalyticsModelScoresItemRequestBuilderGet_03da29c5 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new UserExperienceAnalyticsModelScoresItemRequestBuilderGet_03da29c5 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
