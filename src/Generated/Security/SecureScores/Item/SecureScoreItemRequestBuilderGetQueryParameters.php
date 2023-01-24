<?php

namespace Microsoft\Graph\Generated\Security\SecureScores\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get secureScores from security
*/
class SecureScoreItemRequestBuilderGetQueryParameters 
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
