<?php

namespace Microsoft\Graph\Generated\Connections\Item\Groups\Item\Members\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A member added to an externalGroup. You can add Azure Active Directory users, Azure Active Directory groups, or an externalGroup as members.
*/
class IdentityItemRequestBuilderGetQueryParameters 
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
