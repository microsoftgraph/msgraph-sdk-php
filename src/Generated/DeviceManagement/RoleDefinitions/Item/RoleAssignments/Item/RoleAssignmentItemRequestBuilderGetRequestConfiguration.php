<?php

namespace Microsoft\Graph\Generated\DeviceManagement\RoleDefinitions\Item\RoleAssignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RoleAssignmentItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RoleAssignmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RoleAssignmentItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RoleAssignmentItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RoleAssignmentItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RoleAssignmentItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RoleAssignmentItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RoleAssignmentItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RoleAssignmentItemRequestBuilderGetQueryParameters {
        return new RoleAssignmentItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
