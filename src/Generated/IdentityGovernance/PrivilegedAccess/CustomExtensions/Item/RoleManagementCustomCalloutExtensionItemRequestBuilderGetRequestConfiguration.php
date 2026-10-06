<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\CustomExtensions\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RoleManagementCustomCalloutExtensionItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RoleManagementCustomCalloutExtensionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RoleManagementCustomCalloutExtensionItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RoleManagementCustomCalloutExtensionItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RoleManagementCustomCalloutExtensionItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RoleManagementCustomCalloutExtensionItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RoleManagementCustomCalloutExtensionItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RoleManagementCustomCalloutExtensionItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RoleManagementCustomCalloutExtensionItemRequestBuilderGetQueryParameters {
        return new RoleManagementCustomCalloutExtensionItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
