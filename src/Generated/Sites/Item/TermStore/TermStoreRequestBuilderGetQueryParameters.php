<?php

namespace Microsoft\Graph\Generated\Sites\Item\TermStore;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read the properties and relationships of a store object.
*/
class TermStoreRequestBuilderGetQueryParameters 
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
