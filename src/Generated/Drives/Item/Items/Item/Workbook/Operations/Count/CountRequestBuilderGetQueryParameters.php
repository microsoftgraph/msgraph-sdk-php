<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Operations\Count;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the number of the resource
*/
class CountRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24search")
     * @var string|null $search Search items by search phrases
    */
    public ?string $search = null;
    
    /**
     * Instantiates a new CountRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $search Search items by search phrases
    */
    public function __construct(?string $search = null) {
        $this->search = $search;
    }

}
