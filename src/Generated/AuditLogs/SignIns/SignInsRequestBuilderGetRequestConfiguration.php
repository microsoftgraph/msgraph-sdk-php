<?php

namespace Microsoft\Graph\Generated\AuditLogs\SignIns;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SignInsRequestBuilderGetRequestConfiguration 
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
     * @var SignInsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SignInsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
