<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\PasswordMethods\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve a password that's registered to a user, represented by a passwordAuthenticationMethod object. For security, the password itself will never be returned in the object and the password property is always null.
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
    
    /**
     * Instantiates a new PasswordAuthenticationMethodItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
