<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MdmWindowsInformationProtectionPolicies\Item\ExemptAppLockerFiles\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Another way to input exempt apps through xml files Original name: WindowsInformationProtectionAppLockerFileItemRequestBuilderGetQueryParameters
*/
class WindowsInformationProtectionAppLockerFileItemRequestBui_c1601575 
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
     * Instantiates a new WindowsInformationProtectionAppLockerFileItemRequestBui_c1601575 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
