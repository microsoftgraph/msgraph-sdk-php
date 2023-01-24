<?php

namespace Microsoft\Graph\Generated\Me\Authentication\Methods\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents all authentication methods registered to a user.
*/
class AuthenticationMethodItemRequestBuilderGetQueryParameters 
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
