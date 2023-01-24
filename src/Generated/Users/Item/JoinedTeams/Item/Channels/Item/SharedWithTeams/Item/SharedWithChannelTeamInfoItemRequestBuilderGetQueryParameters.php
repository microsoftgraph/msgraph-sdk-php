<?php

namespace Microsoft\Graph\Generated\Users\Item\JoinedTeams\Item\Channels\Item\SharedWithTeams\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A collection of teams with which a channel is shared.
*/
class SharedWithChannelTeamInfoItemRequestBuilderGetQueryParameters 
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
