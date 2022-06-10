<?php

namespace Microsoft\Graph\SubscribedSkus;

use Microsoft\Kiota\Abstractions\QueryParameter;

class SubscribedSkusRequestBuilderGetQueryParameters 
{
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
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
