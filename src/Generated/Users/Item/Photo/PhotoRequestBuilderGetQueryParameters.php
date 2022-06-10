<?php

namespace Microsoft\Graph\Users\Item\Photo;

use Microsoft\Kiota\Abstractions\QueryParameter;

class PhotoRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
