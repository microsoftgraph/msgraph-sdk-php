<?php

namespace Microsoft\Graph\Generated\RoleManagement;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get roleManagement
*/
class RoleManagementRequestBuilderGetQueryParameters 
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
