<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsDeviceStartupHistory\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * User experience analytics device Startup History Original name: UserExperienceAnalyticsDeviceStartupHistoryItemRequestBuilderGetQueryParameters
*/
class UserExperienceAnalyticsDeviceStartupHistoryItemRequestB_4f18b8d3 
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
     * Instantiates a new UserExperienceAnalyticsDeviceStartupHistoryItemRequestB_4f18b8d3 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
