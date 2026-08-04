<?php

namespace Microsoft\Graph\Generated\Users\Item\SponsorOf\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Directory objects that this user sponsors, such as guest users, agent users, agent blueprints, agent blueprint principals, and agent identities. If the user is a member of a group that's a sponsor, the objects sponsored by that group are also included. Read-only. Nullable. Supports $filter, $count, $select, $expand, $top, and $skip.
*/
class DirectoryObjectItemRequestBuilderGetQueryParameters 
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
    
    /**
     * Instantiates a new DirectoryObjectItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
