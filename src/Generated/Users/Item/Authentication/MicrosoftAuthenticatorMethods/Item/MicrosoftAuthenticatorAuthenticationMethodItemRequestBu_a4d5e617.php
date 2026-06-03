<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\MicrosoftAuthenticatorMethods\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read the properties and relationships of a microsoftAuthenticatorAuthenticationMethod object. Original name: MicrosoftAuthenticatorAuthenticationMethodItemRequestBuilderGetQueryParameters
*/
class MicrosoftAuthenticatorAuthenticationMethodItemRequestBu_a4d5e617 
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
     * Instantiates a new MicrosoftAuthenticatorAuthenticationMethodItemRequestBu_a4d5e617 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
