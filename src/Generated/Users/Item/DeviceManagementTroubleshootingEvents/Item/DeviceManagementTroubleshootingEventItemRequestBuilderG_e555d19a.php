<?php

namespace Microsoft\Graph\Generated\Users\Item\DeviceManagementTroubleshootingEvents\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of troubleshooting events for this user. Original name: DeviceManagementTroubleshootingEventItemRequestBuilderGetQueryParameters
*/
class DeviceManagementTroubleshootingEventItemRequestBuilderG_e555d19a 
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
     * Instantiates a new DeviceManagementTroubleshootingEventItemRequestBuilderG_e555d19a and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
