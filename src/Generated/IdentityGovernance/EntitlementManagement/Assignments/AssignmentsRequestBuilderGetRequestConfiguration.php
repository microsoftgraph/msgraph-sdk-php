<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\Assignments;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AssignmentsRequestBuilderGetRequestConfiguration 
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
     * @var AssignmentsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AssignmentsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
