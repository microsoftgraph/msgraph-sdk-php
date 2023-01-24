<?php

namespace Microsoft\Graph\Generated\RoleManagement\Directory\RoleEligibilityScheduleRequests\Item\Principal;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The principal that's getting a role eligibility through the request. Supports $expand.
*/
class PrincipalRequestBuilderGetQueryParameters 
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
