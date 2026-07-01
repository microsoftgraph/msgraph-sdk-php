<?php

namespace Microsoft\Graph\Generated\Security\Labels\RetentionLabels\Item\DispositionReviewStages\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * When action at the end of retention is chosen as 'dispositionReview', dispositionReviewStages specifies a sequential set of stages with at least one reviewer in each stage. Original name: DispositionReviewStageStageNumberItemRequestBuilderGetQueryParameters
*/
class DispositionReviewStageStageNumberItemRequestBuilderGetQ_d7f2c1f3 
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
    
    /**
     * Instantiates a new DispositionReviewStageStageNumberItemRequestBuilderGetQ_d7f2c1f3 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
