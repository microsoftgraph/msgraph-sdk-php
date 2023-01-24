<?php

namespace Microsoft\Graph\Generated\Education\Users\Item\Assignments\Item\Submissions\Item\Outcomes\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get outcomes from education
*/
class EducationOutcomeItemRequestBuilderGetQueryParameters 
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
