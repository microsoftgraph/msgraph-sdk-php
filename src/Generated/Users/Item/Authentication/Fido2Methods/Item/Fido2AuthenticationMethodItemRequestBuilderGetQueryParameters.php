<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\Fido2Methods\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents the FIDO2 security keys registered to a user for authentication.
*/
class Fido2AuthenticationMethodItemRequestBuilderGetQueryParameters 
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
