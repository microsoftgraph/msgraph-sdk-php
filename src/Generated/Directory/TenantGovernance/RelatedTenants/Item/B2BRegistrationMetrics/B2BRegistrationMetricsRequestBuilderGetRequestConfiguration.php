<?php

namespace Microsoft\Graph\Generated\Directory\TenantGovernance\RelatedTenants\Item\B2BRegistrationMetrics;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class B2BRegistrationMetricsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var B2BRegistrationMetricsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?B2BRegistrationMetricsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new B2BRegistrationMetricsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param B2BRegistrationMetricsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?B2BRegistrationMetricsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new B2BRegistrationMetricsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return B2BRegistrationMetricsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): B2BRegistrationMetricsRequestBuilderGetQueryParameters {
        return new B2BRegistrationMetricsRequestBuilderGetQueryParameters($expand, $select);
    }

}
