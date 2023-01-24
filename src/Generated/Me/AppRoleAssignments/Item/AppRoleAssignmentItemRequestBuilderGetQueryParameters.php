<?php

namespace Microsoft\Graph\Generated\Me\AppRoleAssignments\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Represents the app roles a user has been granted for an application. Supports $expand.
*/
class AppRoleAssignmentItemRequestBuilderGetQueryParameters 
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
