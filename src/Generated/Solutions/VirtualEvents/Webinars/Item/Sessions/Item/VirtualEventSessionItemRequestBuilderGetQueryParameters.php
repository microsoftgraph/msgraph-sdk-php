<?php

namespace Microsoft\Graph\Generated\Solutions\VirtualEvents\Webinars\Item\Sessions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read the properties and relationships of a virtualEventSession object.  Currently, the following virtual event types are supported: - virtualEventTownhall- virtualEventWebinar
*/
class VirtualEventSessionItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new VirtualEventSessionItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
