<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\PasswordMethods\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents the password that's registered to a user for authentication. For security, the password itself will never be returned in the object, but action can be taken to reset a password.
*/
class PasswordAuthenticationMethodItemRequestBuilderGetQueryParameters 
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
