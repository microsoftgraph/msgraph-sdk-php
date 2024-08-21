<?php

namespace Microsoft\Graph\Generated\Solutions\VirtualEvents\Townhalls\Item\Presenters\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read the properties and relationships of a virtualEventPresenter object. Currently the supported virtual event types are: - virtualEventTownhall- virtualEventWebinar
*/
class VirtualEventPresenterItemRequestBuilderGetQueryParameters 
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
    
    /**
     * Instantiates a new VirtualEventPresenterItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
