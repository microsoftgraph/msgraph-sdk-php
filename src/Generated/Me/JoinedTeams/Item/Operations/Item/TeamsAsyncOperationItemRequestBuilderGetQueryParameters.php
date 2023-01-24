<?php

namespace Microsoft\Graph\Generated\Me\JoinedTeams\Item\Operations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The async operations that ran or are running on this team.
*/
class TeamsAsyncOperationItemRequestBuilderGetQueryParameters 
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
