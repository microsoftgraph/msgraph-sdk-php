<?php

namespace Microsoft\Graph\Generated\RoleManagement\Directory\RoleAssignments\Item\RoleDefinition;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The roleDefinition the assignment is for.  Supports $expand. roleDefinition.Id will be auto expanded.
*/
class RoleDefinitionRequestBuilderGetQueryParameters 
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
