<?php

namespace Microsoft\Graph\Generated\Directory\TenantGovernance;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TenantGovernanceRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TenantGovernanceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TenantGovernanceRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TenantGovernanceRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TenantGovernanceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TenantGovernanceRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TenantGovernanceRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TenantGovernanceRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TenantGovernanceRequestBuilderGetQueryParameters {
        return new TenantGovernanceRequestBuilderGetQueryParameters($expand, $select);
    }

}
