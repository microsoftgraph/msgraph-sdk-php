<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceConfigurations\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of assignments for the device configuration profile. Original name: DeviceConfigurationAssignmentItemRequestBuilderGetQueryParameters
*/
class DeviceConfigurationAssignmentItemRequestBuilderGetQuery_b1dbef1c 
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
     * Instantiates a new DeviceConfigurationAssignmentItemRequestBuilderGetQuery_b1dbef1c and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
