<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Tags\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Returns a list of ediscoveryReviewTag objects associated to this case.
*/
class EdiscoveryReviewTagItemRequestBuilderGetQueryParameters 
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
