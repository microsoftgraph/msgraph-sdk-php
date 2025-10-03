<?php

namespace Microsoft\\Graph\\Generated\RoleManagement\Directory\RoleAssignmentSchedules\Item\AppScope;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AppScopeRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AppScopeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AppScopeRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AppScopeRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AppScopeRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AppScopeRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AppScopeRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AppScopeRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AppScopeRequestBuilderGetQueryParameters {
        return new AppScopeRequestBuilderGetQueryParameters($expand, $select);
    }

}
