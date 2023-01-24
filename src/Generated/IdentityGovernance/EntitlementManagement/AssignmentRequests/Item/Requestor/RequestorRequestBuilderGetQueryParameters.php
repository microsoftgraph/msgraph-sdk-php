<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AssignmentRequests\Item\Requestor;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The subject who requested or, if a direct assignment, was assigned. Read-only. Nullable. Supports $expand.
*/
class RequestorRequestBuilderGetQueryParameters 
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
