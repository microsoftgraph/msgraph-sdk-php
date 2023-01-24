<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AssignmentRequests\Item\Requestor;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RequestorRequestBuilderGetRequestConfiguration 
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
     * @var RequestorRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RequestorRequestBuilderGetQueryParameters $queryParameters = null;
    
}
