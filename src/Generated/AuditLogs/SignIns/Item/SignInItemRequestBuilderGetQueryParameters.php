<?php

namespace Microsoft\Graph\Generated\AuditLogs\SignIns\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get signIns from auditLogs
*/
class SignInItemRequestBuilderGetQueryParameters 
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
