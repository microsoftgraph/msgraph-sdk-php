<?php

namespace Microsoft\Graph\Generated\Invitations\Item\InvitedUser;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The user created as part of the invitation creation. Read-Only
*/
class InvitedUserRequestBuilderGetQueryParameters 
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
