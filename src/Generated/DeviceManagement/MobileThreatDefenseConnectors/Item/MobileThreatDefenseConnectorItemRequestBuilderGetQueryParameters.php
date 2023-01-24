<?php

namespace Microsoft\Graph\Generated\DeviceManagement\MobileThreatDefenseConnectors\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of Mobile threat Defense connectors configured by the tenant.
*/
class MobileThreatDefenseConnectorItemRequestBuilderGetQueryParameters 
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
