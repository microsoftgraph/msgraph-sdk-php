<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurationDeviceStateSummaries;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The device configuration device state summary for this account. Original name: deviceConfigurationDeviceStateSummariesRequestBuilderGetQueryParameters
*/
class DeviceConfigurationDeviceStateSummariesRequestBuilderGe_ade8ea73 
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
     * Instantiates a new DeviceConfigurationDeviceStateSummariesRequestBuilderGe_ade8ea73 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
