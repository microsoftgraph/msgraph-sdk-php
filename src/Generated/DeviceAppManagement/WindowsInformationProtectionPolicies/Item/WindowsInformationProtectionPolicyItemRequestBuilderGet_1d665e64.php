<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\WindowsInformationProtectionPolicies\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Windows information protection for apps running on devices which are not MDM enrolled. Original name: WindowsInformationProtectionPolicyItemRequestBuilderGetQueryParameters
*/
class WindowsInformationProtectionPolicyItemRequestBuilderGet_1d665e64 
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
     * Instantiates a new WindowsInformationProtectionPolicyItemRequestBuilderGet_1d665e64 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
