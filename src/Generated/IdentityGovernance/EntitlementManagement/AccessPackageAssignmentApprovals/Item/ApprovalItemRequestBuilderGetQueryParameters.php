<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignmentApprovals\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * In Azure AD entitlement management, retrieve the properties of an approval object.  This call can be made by an approver, providing the identifier of the access package assignment request.
*/
class ApprovalItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new ApprovalItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
