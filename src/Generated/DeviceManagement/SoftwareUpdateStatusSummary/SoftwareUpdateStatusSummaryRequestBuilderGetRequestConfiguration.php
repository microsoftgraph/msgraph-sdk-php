<?php

namespace Microsoft\Graph\Generated\DeviceManagement\SoftwareUpdateStatusSummary;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SoftwareUpdateStatusSummaryRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SoftwareUpdateStatusSummaryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SoftwareUpdateStatusSummaryRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new softwareUpdateStatusSummaryRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SoftwareUpdateStatusSummaryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SoftwareUpdateStatusSummaryRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new softwareUpdateStatusSummaryRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SoftwareUpdateStatusSummaryRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SoftwareUpdateStatusSummaryRequestBuilderGetQueryParameters {
        return new SoftwareUpdateStatusSummaryRequestBuilderGetQueryParameters($expand, $select);
    }

}
