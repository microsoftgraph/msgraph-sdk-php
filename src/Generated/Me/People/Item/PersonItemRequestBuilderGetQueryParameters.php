<?php

namespace Microsoft\Graph\Generated\Me\People\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * People that are relevant to the user. Read-only. Nullable.
*/
class PersonItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
