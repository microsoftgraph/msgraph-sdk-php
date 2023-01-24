<?php

namespace Microsoft\Graph\Generated\Users\Item\ManagedDevices\Item\DeviceConfigurationStates\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Device configuration states for this device.
*/
class DeviceConfigurationStateItemRequestBuilderGetQueryParameters 
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
