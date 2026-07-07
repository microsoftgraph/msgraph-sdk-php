<?php

namespace Microsoft\Graph\Generated\DeviceManagement\VirtualEndpoint\ProvisioningPolicies\Item\Assignments\Item\AssignedUsersWithUserPrincipalName;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: assignedUsersWithUserPrincipalNameRequestBuilderGetRequestConfiguration
*/
class AssignedUsersWithUserPrincipalNameRequestBuilderGetRequ_704a8b96 extends BaseRequestConfiguration 
{
    /**
     * @var AssignedUsersWithUserPrincipalNameRequestBuilderGetQuer_f2d6c9d3|null $queryParameters Request query parameters
    */
    public ?AssignedUsersWithUserPrincipalNameRequestBuilderGetQuer_f2d6c9d3 $queryParameters = null;
    
    /**
     * Instantiates a new AssignedUsersWithUserPrincipalNameRequestBuilderGetRequ_704a8b96 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AssignedUsersWithUserPrincipalNameRequestBuilderGetQuer_f2d6c9d3|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AssignedUsersWithUserPrincipalNameRequestBuilderGetQuer_f2d6c9d3 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AssignedUsersWithUserPrincipalNameRequestBuilderGetQuer_f2d6c9d3.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AssignedUsersWithUserPrincipalNameRequestBuilderGetQuer_f2d6c9d3
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AssignedUsersWithUserPrincipalNameRequestBuilderGetQuer_f2d6c9d3 {
        return new AssignedUsersWithUserPrincipalNameRequestBuilderGetQuer_f2d6c9d3($expand, $select);
    }

}
