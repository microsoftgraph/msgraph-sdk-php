<?php

namespace Microsoft\Graph\Generated\Directory\TenantGovernance\RelatedTenants\Item\AppB2BSignInActivityMetrics;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AppB2BSignInActivityMetricsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AppB2BSignInActivityMetricsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AppB2BSignInActivityMetricsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AppB2BSignInActivityMetricsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AppB2BSignInActivityMetricsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AppB2BSignInActivityMetricsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AppB2BSignInActivityMetricsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AppB2BSignInActivityMetricsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AppB2BSignInActivityMetricsRequestBuilderGetQueryParameters {
        return new AppB2BSignInActivityMetricsRequestBuilderGetQueryParameters($expand, $select);
    }

}
