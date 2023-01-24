<?php

namespace Microsoft\Graph\Generated\AuditLogs\DirectoryAudits;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DirectoryAuditsRequestBuilderGetRequestConfiguration 
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
     * @var DirectoryAuditsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DirectoryAuditsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
