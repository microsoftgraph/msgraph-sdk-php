<?php

namespace Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleAssignmentSchedules\Item\RoleDefinition;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RoleDefinitionRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RoleDefinitionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RoleDefinitionRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RoleDefinitionRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RoleDefinitionRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RoleDefinitionRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RoleDefinitionRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RoleDefinitionRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RoleDefinitionRequestBuilderGetQueryParameters {
        return new RoleDefinitionRequestBuilderGetQueryParameters($expand, $select);
    }

}
