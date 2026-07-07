<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\SoftwareOathMethods\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The software OATH time-based one-time password (TOTP) applications registered to a user for authentication. Original name: SoftwareOathAuthenticationMethodItemRequestBuilderGetQueryParameters
*/
class SoftwareOathAuthenticationMethodItemRequestBuilderGetQu_e7f60b17 
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
     * Instantiates a new SoftwareOathAuthenticationMethodItemRequestBuilderGetQu_e7f60b17 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
