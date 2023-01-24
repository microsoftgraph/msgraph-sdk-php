<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The authentication methods that are supported for the user.
*/
class AuthenticationRequestBuilderGetQueryParameters 
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
