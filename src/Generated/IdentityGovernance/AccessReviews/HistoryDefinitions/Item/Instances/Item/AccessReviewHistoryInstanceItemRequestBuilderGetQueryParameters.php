<?php

namespace Microsoft\Graph\IdentityGovernance\AccessReviews\HistoryDefinitions\Item\Instances\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class AccessReviewHistoryInstanceItemRequestBuilderGetQueryParameters 
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
