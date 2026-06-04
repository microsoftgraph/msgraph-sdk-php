<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MdmWindowsInformationProtectionPolicies\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: MdmWindowsInformationProtectionPolicyItemRequestBuilderGetRequestConfiguration
*/
class MdmWindowsInformationProtectionPolicyItemRequestBuilder_9ad9e786 extends BaseRequestConfiguration 
{
    /**
     * @var MdmWindowsInformationProtectionPolicyItemRequestBuilder_cacaa05a|null $queryParameters Request query parameters
    */
    public ?MdmWindowsInformationProtectionPolicyItemRequestBuilder_cacaa05a $queryParameters = null;
    
    /**
     * Instantiates a new MdmWindowsInformationProtectionPolicyItemRequestBuilder_9ad9e786 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MdmWindowsInformationProtectionPolicyItemRequestBuilder_cacaa05a|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MdmWindowsInformationProtectionPolicyItemRequestBuilder_cacaa05a $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MdmWindowsInformationProtectionPolicyItemRequestBuilder_cacaa05a.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MdmWindowsInformationProtectionPolicyItemRequestBuilder_cacaa05a
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MdmWindowsInformationProtectionPolicyItemRequestBuilder_cacaa05a {
        return new MdmWindowsInformationProtectionPolicyItemRequestBuilder_cacaa05a($expand, $select);
    }

}
