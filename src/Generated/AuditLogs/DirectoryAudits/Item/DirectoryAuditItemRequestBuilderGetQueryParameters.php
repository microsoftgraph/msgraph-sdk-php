<?php

namespace Microsoft\Graph\AuditLogs\DirectoryAudits\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class DirectoryAuditItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
