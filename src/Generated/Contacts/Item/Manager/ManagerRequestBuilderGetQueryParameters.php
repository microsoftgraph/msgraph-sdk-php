<?php

namespace Microsoft\Graph\Generated\Contacts\Item\Manager;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get this organizational contact's manager.
*/
class ManagerRequestBuilderGetQueryParameters 
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
