<?php

namespace Microsoft\Graph\Generated\Me\Calendar\Events\Item\Instances\Item\Extensions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The collection of open extensions defined for the event. Nullable.
*/
class ExtensionItemRequestBuilderGetQueryParameters 
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
