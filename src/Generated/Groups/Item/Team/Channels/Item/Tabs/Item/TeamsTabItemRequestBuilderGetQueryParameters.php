<?php

namespace Microsoft\Graph\Generated\Groups\Item\Team\Channels\Item\Tabs\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A collection of all the tabs in the channel. A navigation property.
*/
class TeamsTabItemRequestBuilderGetQueryParameters 
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
