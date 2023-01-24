<?php

namespace Microsoft\Graph\Generated\External\Connections\Item\Items\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get items from external
*/
class ExternalItemItemRequestBuilderGetQueryParameters 
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
