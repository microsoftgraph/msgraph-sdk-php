<?php

namespace Microsoft\Graph\Generated\Users\Item\Messages\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The messages in a mailbox or folder. Read-only. Nullable.
*/
class MessageItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @var string|null $includeHiddenMessages Include Hidden Messages
    */
    public ?string $includeHiddenMessages = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new MessageItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param string|null $includeHiddenMessages Include Hidden Messages
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?string $includeHiddenMessages = null, ?array $select = null) {
        $this->expand = $expand;
        $this->includeHiddenMessages = $includeHiddenMessages;
        $this->select = $select;
    }

}
