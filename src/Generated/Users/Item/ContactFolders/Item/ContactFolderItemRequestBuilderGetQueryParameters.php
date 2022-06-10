<?php

namespace Microsoft\Graph\Users\Item\ContactFolders\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class ContactFolderItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
