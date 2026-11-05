<?php

namespace Microsoft\Graph\Generated\Reports\Partners\Billing\AggregatedUsage;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AggregatedUsageRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AggregatedUsageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AggregatedUsageRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AggregatedUsageRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AggregatedUsageRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AggregatedUsageRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AggregatedUsageRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AggregatedUsageRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AggregatedUsageRequestBuilderGetQueryParameters {
        return new AggregatedUsageRequestBuilderGetQueryParameters($expand, $select);
    }

}
