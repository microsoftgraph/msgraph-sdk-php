<?php

namespace Microsoft\Graph\Generated\DeviceManagement\SoftwareUpdateStatusSummary;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SoftwareUpdateStatusSummaryRequestBuilderGetRequestConfiguration 
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
     * @var SoftwareUpdateStatusSummaryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SoftwareUpdateStatusSummaryRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new softwareUpdateStatusSummaryRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SoftwareUpdateStatusSummaryRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): SoftwareUpdateStatusSummaryRequestBuilderGetQueryParameters {
        return new SoftwareUpdateStatusSummaryRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new softwareUpdateStatusSummaryRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param SoftwareUpdateStatusSummaryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SoftwareUpdateStatusSummaryRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
