<?php

namespace Microsoft\Graph\Me\Photos\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class ProfilePhotoItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
