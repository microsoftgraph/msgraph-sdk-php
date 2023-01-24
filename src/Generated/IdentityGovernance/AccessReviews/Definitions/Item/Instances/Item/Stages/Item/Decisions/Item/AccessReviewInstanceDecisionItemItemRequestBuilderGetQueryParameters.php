<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\AccessReviews\Definitions\Item\Instances\Item\Stages\Item\Decisions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Each user reviewed in an accessReviewStage has a decision item representing if they were approved, denied, or not yet reviewed.
*/
class AccessReviewInstanceDecisionItemItemRequestBuilderGetQueryParameters 
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
