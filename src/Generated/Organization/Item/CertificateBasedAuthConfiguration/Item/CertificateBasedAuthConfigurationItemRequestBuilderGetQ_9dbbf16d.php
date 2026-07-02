<?php

namespace Microsoft\Graph\Generated\Organization\Item\CertificateBasedAuthConfiguration\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Get the properties of a certificateBasedAuthConfiguration object. Original name: CertificateBasedAuthConfigurationItemRequestBuilderGetQueryParameters
*/
class CertificateBasedAuthConfigurationItemRequestBuilderGetQ_9dbbf16d 
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
     * Instantiates a new CertificateBasedAuthConfigurationItemRequestBuilderGetQ_9dbbf16d and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
