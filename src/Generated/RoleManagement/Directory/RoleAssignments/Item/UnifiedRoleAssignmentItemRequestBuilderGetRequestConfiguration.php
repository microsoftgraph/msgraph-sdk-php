<?php

namespace Microsoft\Graph\Generated\RoleManagement\Directory\RoleAssignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class UnifiedRoleAssignmentItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var UnifiedRoleAssignmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?UnifiedRoleAssignmentItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new UnifiedRoleAssignmentItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param UnifiedRoleAssignmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?UnifiedRoleAssignmentItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new UnifiedRoleAssignmentItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return UnifiedRoleAssignmentItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): UnifiedRoleAssignmentItemRequestBuilderGetQueryParameters {
        return new UnifiedRoleAssignmentItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
