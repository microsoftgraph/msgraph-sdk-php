<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\PhoneMethods\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve a single phoneAuthenticationMethod object for a user. This method is available only for standard Azure AD and B2B users, but not B2C users. This API is supported in the following national cloud deployments.
*/
class PhoneAuthenticationMethodItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new PhoneAuthenticationMethodItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
