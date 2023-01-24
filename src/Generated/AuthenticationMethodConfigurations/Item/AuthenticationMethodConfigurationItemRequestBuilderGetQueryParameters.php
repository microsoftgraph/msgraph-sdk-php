<?php

namespace Microsoft\Graph\Generated\AuthenticationMethodConfigurations\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get entity from authenticationMethodConfigurations by key (id)
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
