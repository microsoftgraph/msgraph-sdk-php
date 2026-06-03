<?php

namespace Microsoft\Graph\Generated\DeviceManagement\WindowsInformationProtectionAppLearningSummaries\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The windows information protection app learning summaries. Original name: WindowsInformationProtectionAppLearningSummaryItemRequestBuilderGetQueryParameters
*/
class WindowsInformationProtectionAppLearningSummaryItemReque_7ade5a7c 
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
     * Instantiates a new WindowsInformationProtectionAppLearningSummaryItemReque_7ade5a7c and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
