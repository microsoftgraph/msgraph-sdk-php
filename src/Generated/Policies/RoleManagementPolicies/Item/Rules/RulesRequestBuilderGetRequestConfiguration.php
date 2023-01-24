<?php

namespace Microsoft\Graph\Generated\Policies\RoleManagementPolicies\Item\Rules;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RulesRequestBuilderGetRequestConfiguration 
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
     * @var RulesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RulesRequestBuilderGetQueryParameters $queryParameters = null;
    
}
