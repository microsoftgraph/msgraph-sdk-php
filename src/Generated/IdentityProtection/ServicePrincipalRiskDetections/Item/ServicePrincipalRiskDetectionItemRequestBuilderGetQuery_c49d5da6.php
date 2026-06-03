<?php

namespace Microsoft\Graph\Generated\IdentityProtection\ServicePrincipalRiskDetections\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read the properties and relationships of a servicePrincipalRiskDetection object. Original name: ServicePrincipalRiskDetectionItemRequestBuilderGetQueryParameters
*/
class ServicePrincipalRiskDetectionItemRequestBuilderGetQuery_c49d5da6 
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
    
    /**
     * Instantiates a new ServicePrincipalRiskDetectionItemRequestBuilderGetQuery_c49d5da6 and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
