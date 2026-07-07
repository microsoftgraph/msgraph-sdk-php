<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileAppConfigurations\Item\Assignments\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of group assignemenets for app configration. Original name: ManagedDeviceMobileAppConfigurationAssignmentItemRequestBuilderGetQueryParameters
*/
class ManagedDeviceMobileAppConfigurationAssignmentItemReques_355d456f 
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
     * Instantiates a new ManagedDeviceMobileAppConfigurationAssignmentItemReques_355d456f and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
