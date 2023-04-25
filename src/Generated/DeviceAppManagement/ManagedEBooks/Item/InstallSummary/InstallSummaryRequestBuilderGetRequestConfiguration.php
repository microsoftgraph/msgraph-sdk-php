<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\ManagedEBooks\Item\InstallSummary;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InstallSummaryRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var InstallSummaryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InstallSummaryRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new installSummaryRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param InstallSummaryRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?InstallSummaryRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new installSummaryRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return InstallSummaryRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): InstallSummaryRequestBuilderGetQueryParameters {
        return new InstallSummaryRequestBuilderGetQueryParameters($expand, $select);
    }

}
