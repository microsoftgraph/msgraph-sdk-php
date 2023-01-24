<?php

namespace Microsoft\Graph\Generated\RoleManagement;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RoleManagementRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var RoleManagementRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RoleManagementRequestBuilderGetQueryParameters $queryParameters = null;
    
}
