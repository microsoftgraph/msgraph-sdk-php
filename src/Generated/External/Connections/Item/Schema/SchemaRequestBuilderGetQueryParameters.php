<?php

namespace Microsoft\Graph\Generated\External\Connections\Item\Schema;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read the properties and relationships of a schema object.
*/
class SchemaRequestBuilderGetQueryParameters 
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
