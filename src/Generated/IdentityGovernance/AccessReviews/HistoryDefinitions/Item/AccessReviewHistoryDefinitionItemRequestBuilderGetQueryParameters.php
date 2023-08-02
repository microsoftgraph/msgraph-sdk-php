<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\AccessReviews\HistoryDefinitions\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Retrieve an accessReviewHistoryDefinition object by its identifier. All the properties of the access review history definition object are returned. If the definition is 30 days or older, a 404 Not Found error is returned.
*/
class AccessReviewHistoryDefinitionItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new AccessReviewHistoryDefinitionItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
