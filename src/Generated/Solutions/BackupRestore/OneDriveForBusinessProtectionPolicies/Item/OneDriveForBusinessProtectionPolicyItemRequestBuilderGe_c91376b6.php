<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessProtectionPolicies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The list of OneDrive for Business protection policies in the tenant. Original name: OneDriveForBusinessProtectionPolicyItemRequestBuilderGetQueryParameters
*/
class OneDriveForBusinessProtectionPolicyItemRequestBuilderGe_c91376b6 
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
     * Instantiates a new OneDriveForBusinessProtectionPolicyItemRequestBuilderGe_c91376b6 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
