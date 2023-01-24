<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\ManagedEBooks\Item\DeviceStates\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of installation states for this eBook.
*/
class DeviceInstallStateItemRequestBuilderGetQueryParameters 
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
