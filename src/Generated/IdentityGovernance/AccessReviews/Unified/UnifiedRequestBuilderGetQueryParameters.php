<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\AccessReviews\Unified;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Entry point for the unified (vNext) access reviews API surface. Requests under this path are routed to the vNext service through the dedicated accessReviews/unified path segment.
*/
class UnifiedRequestBuilderGetQueryParameters 
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
     * Instantiates a new UnifiedRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
