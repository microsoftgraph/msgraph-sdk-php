<?php

namespace Microsoft\Graph\Generated\Directory\TenantGovernance\RelatedTenants\Item\MultiTenantApplicationMetrics;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MultiTenantApplicationMetricsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MultiTenantApplicationMetricsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MultiTenantApplicationMetricsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MultiTenantApplicationMetricsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MultiTenantApplicationMetricsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MultiTenantApplicationMetricsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MultiTenantApplicationMetricsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MultiTenantApplicationMetricsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MultiTenantApplicationMetricsRequestBuilderGetQueryParameters {
        return new MultiTenantApplicationMetricsRequestBuilderGetQueryParameters($expand, $select);
    }

}
