<?php

namespace Microsoft\Graph\Generated\DeviceManagement\WindowsInformationProtectionAppLearningSummaries\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WindowsInformationProtectionAppLearningSummaryItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var WindowsInformationProtectionAppLearningSummaryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WindowsInformationProtectionAppLearningSummaryItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WindowsInformationProtectionAppLearningSummaryItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WindowsInformationProtectionAppLearningSummaryItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): WindowsInformationProtectionAppLearningSummaryItemRequestBuilderGetQueryParameters {
        return new WindowsInformationProtectionAppLearningSummaryItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new WindowsInformationProtectionAppLearningSummaryItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param WindowsInformationProtectionAppLearningSummaryItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WindowsInformationProtectionAppLearningSummaryItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
