<?php

namespace Microsoft\Graph\Generated\Me\Todo\Lists\Item\Tasks\Item\Attachments\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A collection of file attachments for the task.
*/
class AttachmentBaseItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new AttachmentBaseItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
