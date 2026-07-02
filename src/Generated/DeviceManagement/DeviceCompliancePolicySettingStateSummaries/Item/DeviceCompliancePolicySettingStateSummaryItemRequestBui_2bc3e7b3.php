<?php

namespace Microsoft\Graph\Generated\DeviceManagement\DeviceCompliancePolicySettingStateSummaries\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The summary states of compliance policy settings for this account. Original name: DeviceCompliancePolicySettingStateSummaryItemRequestBuilderGetQueryParameters
*/
class DeviceCompliancePolicySettingStateSummaryItemRequestBui_2bc3e7b3 
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
     * Instantiates a new DeviceCompliancePolicySettingStateSummaryItemRequestBui_2bc3e7b3 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
