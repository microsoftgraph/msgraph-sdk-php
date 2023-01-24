<?php

namespace Microsoft\Graph\Generated\External\Connections\Item\Groups\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get groups from external
*/
class ExternalGroupItemRequestBuilderGetQueryParameters 
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
