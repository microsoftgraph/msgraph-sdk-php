<?php

namespace Microsoft\Graph\Generated\Groups\Item\Team\Group;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get group from groups
*/
class GroupRequestBuilderGetQueryParameters 
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
