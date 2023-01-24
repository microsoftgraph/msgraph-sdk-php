<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Searches\Item\LastEstimateStatisticsOperation;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the last  ediscoveryEstimateOperation objects and their properties.
*/
class LastEstimateStatisticsOperationRequestBuilderGetQueryParameters 
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
