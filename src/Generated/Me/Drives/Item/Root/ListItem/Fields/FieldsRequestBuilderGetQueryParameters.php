<?php

namespace Microsoft\Graph\Generated\Me\Drives\Item\Root\ListItem\Fields;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The values of the columns set on this list item.
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
