<?php

namespace Microsoft\Graph\Generated\Me\DeviceManagementTroubleshootingEvents\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of troubleshooting events for this user.
*/
class DeviceManagementTroubleshootingEventItemRequestBuilderGetQueryParameters 
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
