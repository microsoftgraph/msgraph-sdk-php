<?php

namespace Microsoft\Graph\Generated\Me\Teamwork\AssociatedTeams\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of associatedTeamInfo objects that a user is associated with.
*/
class AssociatedTeamInfoItemRequestBuilderGetQueryParameters 
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
