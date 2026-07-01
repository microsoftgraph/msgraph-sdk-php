<?php

namespace Microsoft\Graph\Generated\DeviceManagement\WindowsInformationProtectionNetworkLearningSummaries\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: WindowsInformationProtectionNetworkLearningSummaryItemRequestBuilderGetRequestConfiguration
*/
class WindowsInformationProtectionNetworkLearningSummaryItemR_21910a52 extends BaseRequestConfiguration 
{
    /**
     * @var WindowsInformationProtectionNetworkLearningSummaryItemR_8d9e0d7b|null $queryParameters Request query parameters
    */
    public ?WindowsInformationProtectionNetworkLearningSummaryItemR_8d9e0d7b $queryParameters = null;
    
    /**
     * Instantiates a new WindowsInformationProtectionNetworkLearningSummaryItemR_21910a52 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WindowsInformationProtectionNetworkLearningSummaryItemR_8d9e0d7b|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsInformationProtectionNetworkLearningSummaryItemR_8d9e0d7b $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WindowsInformationProtectionNetworkLearningSummaryItemR_8d9e0d7b.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsInformationProtectionNetworkLearningSummaryItemR_8d9e0d7b
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WindowsInformationProtectionNetworkLearningSummaryItemR_8d9e0d7b {
        return new WindowsInformationProtectionNetworkLearningSummaryItemR_8d9e0d7b($expand, $select);
    }

}
