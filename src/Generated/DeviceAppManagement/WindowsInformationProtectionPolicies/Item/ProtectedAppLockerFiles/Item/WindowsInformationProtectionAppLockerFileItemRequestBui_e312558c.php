<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\WindowsInformationProtectionPolicies\Item\ProtectedAppLockerFiles\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: WindowsInformationProtectionAppLockerFileItemRequestBuilderGetRequestConfiguration
*/
class WindowsInformationProtectionAppLockerFileItemRequestBui_e312558c extends BaseRequestConfiguration 
{
    /**
     * @var WindowsInformationProtectionAppLockerFileItemRequestBui_c1601575|null $queryParameters Request query parameters
    */
    public ?WindowsInformationProtectionAppLockerFileItemRequestBui_c1601575 $queryParameters = null;
    
    /**
     * Instantiates a new WindowsInformationProtectionAppLockerFileItemRequestBui_e312558c and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WindowsInformationProtectionAppLockerFileItemRequestBui_c1601575|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsInformationProtectionAppLockerFileItemRequestBui_c1601575 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WindowsInformationProtectionAppLockerFileItemRequestBui_c1601575.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsInformationProtectionAppLockerFileItemRequestBui_c1601575
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WindowsInformationProtectionAppLockerFileItemRequestBui_c1601575 {
        return new WindowsInformationProtectionAppLockerFileItemRequestBui_c1601575($expand, $select);
    }

}
