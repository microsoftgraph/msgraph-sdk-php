<?php

namespace Microsoft\Graph\Generated\Identity\ConditionalAccess;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * the entry point for the Conditional Access (CA) object model.
*/
class ConditionalAccessRequestBuilderGetQueryParameters 
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
