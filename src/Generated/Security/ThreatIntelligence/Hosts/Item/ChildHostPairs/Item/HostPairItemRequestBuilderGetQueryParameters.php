<?php

namespace Microsoft\Graph\Generated\Security\ThreatIntelligence\Hosts\Item\ChildHostPairs\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The hostPairs that are resources associated with a host, where that host is the parentHost and has an outgoing pairing to a childHost.
*/
class HostPairItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new HostPairItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
