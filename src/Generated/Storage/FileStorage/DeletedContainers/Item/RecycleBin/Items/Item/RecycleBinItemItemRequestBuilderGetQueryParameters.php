<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\DeletedContainers\Item\RecycleBin\Items\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * List of the recycleBinItems deleted by a user.
*/
class RecycleBinItemItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new RecycleBinItemItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
