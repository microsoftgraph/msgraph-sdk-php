<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\ResourceRoleScopes\Item\Scope;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ScopeRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ScopeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ScopeRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ScopeRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ScopeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ScopeRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ScopeRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ScopeRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ScopeRequestBuilderGetQueryParameters {
        return new ScopeRequestBuilderGetQueryParameters($expand, $select);
    }

}
