<?php

namespace Microsoft\Graph\Generated\Directory\PublicKeyInfrastructure\CertificateBasedAuthConfigurations\Item\CertificateAuthorities\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The collection of certificate authorities contained in this public key infrastructure resource.
*/
class CertificateAuthorityDetailItemRequestBuilderGetQueryParameters 
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
     * Instantiates a new CertificateAuthorityDetailItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
