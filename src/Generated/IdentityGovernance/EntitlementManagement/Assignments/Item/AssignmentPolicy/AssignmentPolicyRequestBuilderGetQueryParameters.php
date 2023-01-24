<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\Assignments\Item\AssignmentPolicy;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read-only. Supports $filter (eq) on the id property and $expand query parameters.
*/
class AssignmentPolicyRequestBuilderGetQueryParameters 
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
