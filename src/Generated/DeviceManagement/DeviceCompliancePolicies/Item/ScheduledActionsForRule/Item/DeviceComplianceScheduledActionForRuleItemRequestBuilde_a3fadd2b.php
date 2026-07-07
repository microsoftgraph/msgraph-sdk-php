<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicies\Item\ScheduledActionsForRule\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceComplianceScheduledActionForRuleItemRequestBuilderGetRequestConfiguration
*/
class DeviceComplianceScheduledActionForRuleItemRequestBuilde_a3fadd2b extends BaseRequestConfiguration 
{
    /**
     * @var DeviceComplianceScheduledActionForRuleItemRequestBuilde_0a52da58|null $queryParameters Request query parameters
    */
    public ?DeviceComplianceScheduledActionForRuleItemRequestBuilde_0a52da58 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceComplianceScheduledActionForRuleItemRequestBuilde_a3fadd2b and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceComplianceScheduledActionForRuleItemRequestBuilde_0a52da58|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceComplianceScheduledActionForRuleItemRequestBuilde_0a52da58 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceComplianceScheduledActionForRuleItemRequestBuilde_0a52da58.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceComplianceScheduledActionForRuleItemRequestBuilde_0a52da58
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceComplianceScheduledActionForRuleItemRequestBuilde_0a52da58 {
        return new DeviceComplianceScheduledActionForRuleItemRequestBuilde_0a52da58($expand, $select);
    }

}
