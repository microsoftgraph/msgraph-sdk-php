<?php

namespace Microsoft\Graph\Generated\Applications\Item\Owners\Ref;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve a list of owners for an application that are directoryObject objects.
*/
class RefRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24count")
     * @var bool|null $count Include count of items
    */
    public ?bool $count = null;
    
    /**
     * @QueryParameter("%24filter")
     * @var string|null $filter Filter items by property values
    */
    public ?string $filter = null;
    
    /**
     * @QueryParameter("%24orderby")
     * @var array<string>|null $orderby Order items by property values
    */
    public ?array $orderby = null;
    
    /**
     * @QueryParameter("%24search")
     * @var string|null $search Search items by search phrases
    */
    public ?string $search = null;
    
    /**
     * @QueryParameter("%24skip")
     * @var int|null $skip Skip the first n items
    */
    public ?int $skip = null;
    
    /**
     * @QueryParameter("%24top")
     * @var int|null $top Show only the first n items
    */
    public ?int $top = null;
    
    /**
     * Instantiates a new RefRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
    */
    public function __construct(?bool $count = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?int $skip = null, ?int $top = null) {
        $this->count = $count;
        $this->filter = $filter;
        $this->orderby = $orderby;
        $this->search = $search;
        $this->skip = $skip;
        $this->top = $top;
    }

}
