<?php

namespace Microsoft\Graph\Generated\TenantRelationships\DelegatedAdminRelationships\Item\AccessAssignments\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read the properties of a delegatedAdminAccessAssignment object. Original name: DelegatedAdminAccessAssignmentItemRequestBuilderGetQueryParameters
*/
class DelegatedAdminAccessAssignmentItemRequestBuilderGetQuer_02e5b126 
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
     * Instantiates a new DelegatedAdminAccessAssignmentItemRequestBuilderGetQuer_02e5b126 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
