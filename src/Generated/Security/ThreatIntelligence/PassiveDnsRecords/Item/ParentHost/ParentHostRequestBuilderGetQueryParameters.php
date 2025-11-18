<?php

namespace Microsoft\\Graph\\Generated\Security\ThreatIntelligence\PassiveDnsRecords\Item\ParentHost;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The parent host related to this passiveDnsRecord entry. Generally, this is the value that you can search to discover this passiveDnsRecord value.
*/
class ParentHostRequestBuilderGetQueryParameters 
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
     * Instantiates a new ParentHostRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
