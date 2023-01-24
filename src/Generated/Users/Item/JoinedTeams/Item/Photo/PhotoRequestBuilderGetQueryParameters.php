<?php

namespace Microsoft\Graph\Generated\Users\Item\JoinedTeams\Item\Photo;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The profile photo for the team.
*/
class PhotoRequestBuilderGetQueryParameters 
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
