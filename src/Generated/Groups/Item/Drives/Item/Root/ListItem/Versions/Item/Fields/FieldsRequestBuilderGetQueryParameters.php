<?php

namespace Microsoft\Graph\Generated\Groups\Item\Drives\Item\Root\ListItem\Versions\Item\Fields;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A collection of the fields and values for this version of the list item.
*/
class FieldsRequestBuilderGetQueryParameters 
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
