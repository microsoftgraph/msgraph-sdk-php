<?php

namespace Microsoft\\Graph\\Generated\Solutions\BookingBusinesses\Item\CustomQuestions\Count;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the number of the resource
*/
class CountRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24filter")
     * @var string|null $filter Filter items by property values
    */
    public ?string $filter = null;
    
    /**
     * @QueryParameter("%24search")
     * @var string|null $search Search items by search phrases
    */
    public ?string $search = null;
    
    /**
     * Instantiates a new CountRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $filter Filter items by property values
     * @param string|null $search Search items by search phrases
    */
    public function __construct(?string $filter = null, ?string $search = null) {
        $this->filter = $filter;
        $this->search = $search;
    }

}
