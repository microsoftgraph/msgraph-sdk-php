<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\AccessReviews\Definitions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read the properties and relationships of an accessReviewScheduleDefinition object. To retrieve the instances of the access review series, use the list accessReviewInstance API. Original name: AccessReviewScheduleDefinitionItemRequestBuilderGetQueryParameters
*/
class AccessReviewScheduleDefinitionItemRequestBuilderGetQuer_bbb217ca 
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
     * Instantiates a new AccessReviewScheduleDefinitionItemRequestBuilderGetQuer_bbb217ca and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
