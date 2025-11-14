<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\LifecycleWorkflows\Workflows\Item\UserProcessingResults\Item\Subject;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The unique identifier of the user targeted for the taskProcessingResult.Supports $filter(eq, ne) and $expand.
*/
class SubjectRequestBuilderGetQueryParameters 
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
     * Instantiates a new SubjectRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
