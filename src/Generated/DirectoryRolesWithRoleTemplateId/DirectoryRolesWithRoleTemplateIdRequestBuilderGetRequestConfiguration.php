<?php

namespace Microsoft\\Graph\\Generated\DirectoryRolesWithRoleTemplateId;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DirectoryRolesWithRoleTemplateIdRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DirectoryRolesWithRoleTemplateIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DirectoryRolesWithRoleTemplateIdRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DirectoryRolesWithRoleTemplateIdRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DirectoryRolesWithRoleTemplateIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DirectoryRolesWithRoleTemplateIdRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DirectoryRolesWithRoleTemplateIdRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DirectoryRolesWithRoleTemplateIdRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DirectoryRolesWithRoleTemplateIdRequestBuilderGetQueryParameters {
        return new DirectoryRolesWithRoleTemplateIdRequestBuilderGetQueryParameters($expand, $select);
    }

}
