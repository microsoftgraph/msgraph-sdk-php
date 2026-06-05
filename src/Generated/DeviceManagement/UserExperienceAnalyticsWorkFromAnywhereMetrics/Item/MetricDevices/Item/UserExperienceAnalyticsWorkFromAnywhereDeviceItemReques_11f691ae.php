<?php

namespace Microsoft\Graph\Generated\DeviceManagement\UserExperienceAnalyticsWorkFromAnywhereMetrics\Item\MetricDevices\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The work from anywhere metric devices. Read-only. Original name: UserExperienceAnalyticsWorkFromAnywhereDeviceItemRequestBuilderGetQueryParameters
*/
class UserExperienceAnalyticsWorkFromAnywhereDeviceItemReques_11f691ae 
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
     * Instantiates a new UserExperienceAnalyticsWorkFromAnywhereDeviceItemReques_11f691ae and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
