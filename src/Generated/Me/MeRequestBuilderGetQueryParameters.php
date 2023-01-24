<?php

namespace Microsoft\Graph\Generated\Me;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Returns the user or organizational contact assigned as the user's manager. Optionally, you can expand the manager's chain up to the root node.
*/
class MeRequestBuilderGetQueryParameters 
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
