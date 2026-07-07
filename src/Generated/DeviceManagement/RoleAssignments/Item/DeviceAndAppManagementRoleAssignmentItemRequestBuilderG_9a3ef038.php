<?php

namespace Microsoft\Graph\Generated\DeviceManagement\RoleAssignments\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: DeviceAndAppManagementRoleAssignmentItemRequestBuilderGetRequestConfiguration
*/
class DeviceAndAppManagementRoleAssignmentItemRequestBuilderG_9a3ef038 extends BaseRequestConfiguration 
{
    /**
     * @var DeviceAndAppManagementRoleAssignmentItemRequestBuilderG_e8b857c6|null $queryParameters Request query parameters
    */
    public ?DeviceAndAppManagementRoleAssignmentItemRequestBuilderG_e8b857c6 $queryParameters = null;
    
    /**
     * Instantiates a new DeviceAndAppManagementRoleAssignmentItemRequestBuilderG_9a3ef038 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DeviceAndAppManagementRoleAssignmentItemRequestBuilderG_e8b857c6|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DeviceAndAppManagementRoleAssignmentItemRequestBuilderG_e8b857c6 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DeviceAndAppManagementRoleAssignmentItemRequestBuilderG_e8b857c6.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DeviceAndAppManagementRoleAssignmentItemRequestBuilderG_e8b857c6
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DeviceAndAppManagementRoleAssignmentItemRequestBuilderG_e8b857c6 {
        return new DeviceAndAppManagementRoleAssignmentItemRequestBuilderG_e8b857c6($expand, $select);
    }

}
