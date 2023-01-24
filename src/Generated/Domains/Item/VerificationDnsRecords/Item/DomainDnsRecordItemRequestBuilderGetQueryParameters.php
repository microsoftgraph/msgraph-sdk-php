<?php

namespace Microsoft\Graph\Generated\Domains\Item\VerificationDnsRecords\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * DNS records that the customer adds to the DNS zone file of the domain before the customer can complete domain ownership verification with Azure AD. Read-only, Nullable. Supports $expand.
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
