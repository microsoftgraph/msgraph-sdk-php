<?php

namespace Microsoft\Graph\Generated\Groups\Item\Settings\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Settings that can govern this group's behavior, like whether members can invite guest users to the group. Nullable.
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
