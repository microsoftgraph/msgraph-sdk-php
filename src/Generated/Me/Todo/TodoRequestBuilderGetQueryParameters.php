<?php

namespace Microsoft\Graph\Generated\Me\Todo;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents the To Do services available to a user.
*/
class TodoRequestBuilderGetQueryParameters 
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
