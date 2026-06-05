<?php

namespace Microsoft\Graph\Generated\Identity\RiskPrevention\WebApplicationFirewallVerifications\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Read the properties and relationships of webApplicationFirewallVerificationModel object. Original name: WebApplicationFirewallVerificationModelItemRequestBuilderGetQueryParameters
*/
class WebApplicationFirewallVerificationModelItemRequestBuild_1ae21c3d 
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
     * Instantiates a new WebApplicationFirewallVerificationModelItemRequestBuild_1ae21c3d and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
