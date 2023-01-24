<?php

namespace Microsoft\Graph\Generated\Groups\Item\Team\Channels\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The collection of channels and messages associated with the team.
*/
class ChannelItemRequestBuilderGetQueryParameters 
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
