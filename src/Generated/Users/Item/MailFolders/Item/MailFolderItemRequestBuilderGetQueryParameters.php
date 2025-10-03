<?php

namespace Microsoft\\Graph\\Generated\Users\Item\MailFolders\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The user's mail folders. Read-only. Nullable.
*/
class MailFolderItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @var string|null $includeHiddenFolders Include Hidden Folders
    */
    public ?string $includeHiddenFolders = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new MailFolderItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param string|null $includeHiddenFolders Include Hidden Folders
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?string $includeHiddenFolders = null, ?array $select = null) {
        $this->expand = $expand;
        $this->includeHiddenFolders = $includeHiddenFolders;
        $this->select = $select;
    }

}
