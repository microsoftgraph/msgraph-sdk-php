<?php

namespace Microsoft\\Graph\\Generated\Users\Item\DataSecurityAndGovernance;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DataSecurityAndGovernanceRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DataSecurityAndGovernanceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DataSecurityAndGovernanceRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DataSecurityAndGovernanceRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DataSecurityAndGovernanceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DataSecurityAndGovernanceRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DataSecurityAndGovernanceRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DataSecurityAndGovernanceRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DataSecurityAndGovernanceRequestBuilderGetQueryParameters {
        return new DataSecurityAndGovernanceRequestBuilderGetQueryParameters($expand, $select);
    }

}
