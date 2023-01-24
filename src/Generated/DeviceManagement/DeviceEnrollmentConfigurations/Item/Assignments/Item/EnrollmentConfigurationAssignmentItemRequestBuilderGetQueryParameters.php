<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceEnrollmentConfigurations\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of group assignments for the device configuration profile
*/
class EnrollmentConfigurationAssignmentItemRequestBuilderGetQueryParameters 
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
    
}
