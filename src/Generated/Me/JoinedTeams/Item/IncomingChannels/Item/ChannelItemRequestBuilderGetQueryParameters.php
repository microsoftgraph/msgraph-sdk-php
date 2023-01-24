<?php

namespace Microsoft\Graph\Generated\Me\JoinedTeams\Item\IncomingChannels\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * List of channels shared with the team.
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
