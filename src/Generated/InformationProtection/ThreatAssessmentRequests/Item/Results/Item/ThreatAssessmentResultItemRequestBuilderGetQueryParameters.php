<?php

namespace Microsoft\Graph\Generated\InformationProtection\ThreatAssessmentRequests\Item\Results\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * A collection of threat assessment results. Read-only. By default, a GET /threatAssessmentRequests/{id} does not return this property unless you apply $expand on it.
*/
class ThreatAssessmentResultItemRequestBuilderGetQueryParameters 
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
