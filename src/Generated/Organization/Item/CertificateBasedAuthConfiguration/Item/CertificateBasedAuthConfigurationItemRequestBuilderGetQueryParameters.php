<?php

namespace Microsoft\Graph\Generated\Organization\Item\CertificateBasedAuthConfiguration\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Navigation property to manage certificate-based authentication configuration. Only a single instance of certificateBasedAuthConfiguration can be created in the collection.
*/
class CertificateBasedAuthConfigurationItemRequestBuilderGetQueryParameters 
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
