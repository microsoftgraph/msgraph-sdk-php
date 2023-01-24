<?php

namespace Microsoft\Graph\Generated\Me\ManagedDevices\Item\DeviceCategory;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Device category
*/
class DeviceCategoryRequestBuilderGetQueryParameters 
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
