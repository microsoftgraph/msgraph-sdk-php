<?php

namespace Microsoft\Graph\Generated\DeviceManagement\RoleAssignments\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The Role Assignments. Original name: DeviceAndAppManagementRoleAssignmentItemRequestBuilderGetQueryParameters
*/
class DeviceAndAppManagementRoleAssignmentItemRequestBuilderG_e8b857c6 
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
     * Instantiates a new DeviceAndAppManagementRoleAssignmentItemRequestBuilderG_e8b857c6 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
