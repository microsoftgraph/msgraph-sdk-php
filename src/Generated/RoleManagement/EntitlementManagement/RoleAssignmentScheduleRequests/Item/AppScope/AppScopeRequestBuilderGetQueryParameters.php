<?php

namespace Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleAssignmentScheduleRequests\Item\AppScope;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read-only property with details of the app-specific scope when the assignment is scoped to an app. Nullable. Supports $expand.
*/
class AppScopeRequestBuilderGetQueryParameters 
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
