<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceEnrollmentConfigurations\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of group assignments for the device configuration profile Original name: EnrollmentConfigurationAssignmentItemRequestBuilderGetQueryParameters
*/
class EnrollmentConfigurationAssignmentItemRequestBuilderGetQ_9135b9e2 
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
     * Instantiates a new EnrollmentConfigurationAssignmentItemRequestBuilderGetQ_9135b9e2 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
