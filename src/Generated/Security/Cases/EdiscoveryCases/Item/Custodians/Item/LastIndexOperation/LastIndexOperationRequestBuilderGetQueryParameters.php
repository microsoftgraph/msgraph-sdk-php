<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Custodians\Item\LastIndexOperation;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get a list of the ediscoveryIndexOperations associated with an ediscoveryCustodian.
*/
class LastIndexOperationRequestBuilderGetQueryParameters 
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
