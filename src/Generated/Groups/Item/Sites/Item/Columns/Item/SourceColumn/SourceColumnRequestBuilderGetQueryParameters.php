<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\Columns\Item\SourceColumn;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The source column for the content type column.
*/
class SourceColumnRequestBuilderGetQueryParameters 
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
