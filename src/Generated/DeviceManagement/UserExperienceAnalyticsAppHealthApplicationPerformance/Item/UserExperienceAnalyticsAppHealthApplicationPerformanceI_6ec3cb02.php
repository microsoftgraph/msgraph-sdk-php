<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsAppHealthApplicationPerformance\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * User experience analytics appHealth Application Performance Original name: UserExperienceAnalyticsAppHealthApplicationPerformanceItemRequestBuilderGetQueryParameters
*/
class UserExperienceAnalyticsAppHealthApplicationPerformanceI_6ec3cb02 
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
     * Instantiates a new UserExperienceAnalyticsAppHealthApplicationPerformanceI_6ec3cb02 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
