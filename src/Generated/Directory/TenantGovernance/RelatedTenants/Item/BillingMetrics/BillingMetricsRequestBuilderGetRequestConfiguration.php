<?php

namespace Microsoft\Graph\Generated\Directory\TenantGovernance\RelatedTenants\Item\BillingMetrics;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class BillingMetricsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var BillingMetricsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?BillingMetricsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new BillingMetricsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param BillingMetricsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?BillingMetricsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new BillingMetricsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return BillingMetricsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): BillingMetricsRequestBuilderGetQueryParameters {
        return new BillingMetricsRequestBuilderGetQueryParameters($expand, $select);
    }

}
