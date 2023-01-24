<?php

namespace Microsoft\Graph\Generated\Me\Insights\Shared\Item\LastSharedMethod;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get lastSharedMethod from me
*/
class LastSharedMethodRequestBuilderGetQueryParameters 
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
    
}
