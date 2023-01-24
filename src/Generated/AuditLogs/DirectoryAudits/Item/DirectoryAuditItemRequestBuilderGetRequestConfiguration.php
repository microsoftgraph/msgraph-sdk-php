<?php

namespace Microsoft\Graph\Generated\AuditLogs\DirectoryAudits\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DirectoryAuditItemRequestBuilderGetRequestConfiguration 
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
     * @var DirectoryAuditItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DirectoryAuditItemRequestBuilderGetQueryParameters $queryParameters = null;
    
}
