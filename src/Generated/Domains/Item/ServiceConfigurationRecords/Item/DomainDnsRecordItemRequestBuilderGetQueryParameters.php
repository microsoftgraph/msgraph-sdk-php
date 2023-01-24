<?php

namespace Microsoft\Graph\Generated\Domains\Item\ServiceConfigurationRecords\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * DNS records the customer adds to the DNS zone file of the domain before the domain can be used by Microsoft Online services. Read-only, Nullable. Supports $expand.
*/
class DomainDnsRecordItemRequestBuilderGetQueryParameters 
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
