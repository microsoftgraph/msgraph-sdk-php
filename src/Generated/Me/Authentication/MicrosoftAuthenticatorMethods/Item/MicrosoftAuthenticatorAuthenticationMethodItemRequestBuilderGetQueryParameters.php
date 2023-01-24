<?php

namespace Microsoft\Graph\Generated\Me\Authentication\MicrosoftAuthenticatorMethods\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The details of the Microsoft Authenticator app registered to a user for authentication.
*/
class MicrosoftAuthenticatorAuthenticationMethodItemRequestBuilderGetQueryParameters 
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
