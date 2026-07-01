<?php

namespace Microsoft\Graph\Generated\DeviceManagement\WindowsInformationProtectionAppLearningSummaries\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: WindowsInformationProtectionAppLearningSummaryItemRequestBuilderGetRequestConfiguration
*/
class WindowsInformationProtectionAppLearningSummaryItemReque_0e4d0920 extends BaseRequestConfiguration 
{
    /**
     * @var WindowsInformationProtectionAppLearningSummaryItemReque_7ade5a7c|null $queryParameters Request query parameters
    */
    public ?WindowsInformationProtectionAppLearningSummaryItemReque_7ade5a7c $queryParameters = null;
    
    /**
     * Instantiates a new WindowsInformationProtectionAppLearningSummaryItemReque_0e4d0920 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WindowsInformationProtectionAppLearningSummaryItemReque_7ade5a7c|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsInformationProtectionAppLearningSummaryItemReque_7ade5a7c $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WindowsInformationProtectionAppLearningSummaryItemReque_7ade5a7c.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsInformationProtectionAppLearningSummaryItemReque_7ade5a7c
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WindowsInformationProtectionAppLearningSummaryItemReque_7ade5a7c {
        return new WindowsInformationProtectionAppLearningSummaryItemReque_7ade5a7c($expand, $select);
    }

}
