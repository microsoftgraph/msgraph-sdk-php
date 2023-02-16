<?php

namespace Microsoft\Graph\Generated\Users\Item\Events\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The user's events. Default is to show Events under the Default Calendar. Read-only. Nullable.
*/
class EventItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new EventItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
