<?php

namespace Microsoft\Graph\Generated\GroupSettings\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve the properties of a specific group setting object. The setting can be a tenant-level or group-specific setting.
*/
class GroupSettingItemRequestBuilderGetQueryParameters 
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
