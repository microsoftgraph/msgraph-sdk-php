<?php

namespace Microsoft\Graph\Generated\AuthenticationMethodsPolicy\AuthenticationMethodConfigurations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents the settings for each authentication method. Automatically expanded on GET /policies/authenticationMethodsPolicy.
*/
class AuthenticationMethodConfigurationItemRequestBuilderGetQueryParameters 
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
