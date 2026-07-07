<?php

namespace Microsoft\Graph\Generated\DeviceManagement\VirtualEndpoint\ProvisioningPolicies\Item\Assignments\Item\AssignedUsersWithUserPrincipalName;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AssignedUsersWithUserPrincipalNameRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AssignedUsersWithUserPrincipalNameRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AssignedUsersWithUserPrincipalNameRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AssignedUsersWithUserPrincipalNameRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AssignedUsersWithUserPrincipalNameRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AssignedUsersWithUserPrincipalNameRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AssignedUsersWithUserPrincipalNameRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AssignedUsersWithUserPrincipalNameRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AssignedUsersWithUserPrincipalNameRequestBuilderGetQueryParameters {
        return new AssignedUsersWithUserPrincipalNameRequestBuilderGetQueryParameters($expand, $select);
    }

}
