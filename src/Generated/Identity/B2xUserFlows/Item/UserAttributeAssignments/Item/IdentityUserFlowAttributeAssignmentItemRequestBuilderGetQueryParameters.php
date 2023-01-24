<?php

namespace Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\UserAttributeAssignments\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The user attribute assignments included in the user flow.
*/
class IdentityUserFlowAttributeAssignmentItemRequestBuilderGetQueryParameters 
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
