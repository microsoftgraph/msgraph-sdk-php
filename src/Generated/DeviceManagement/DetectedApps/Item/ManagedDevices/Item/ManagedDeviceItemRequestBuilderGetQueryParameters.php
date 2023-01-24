<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DetectedApps\Item\ManagedDevices\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The devices that have the discovered application installed
*/
class ManagedDeviceItemRequestBuilderGetQueryParameters 
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
