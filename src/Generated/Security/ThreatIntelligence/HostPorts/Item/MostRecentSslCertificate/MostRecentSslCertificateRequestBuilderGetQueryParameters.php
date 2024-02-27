<?php

namespace Microsoft\Graph\Generated\Security\ThreatIntelligence\HostPorts\Item\MostRecentSslCertificate;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The most recent sslCertificate used to communicate on the port.
*/
class MostRecentSslCertificateRequestBuilderGetQueryParameters 
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
     * Instantiates a new MostRecentSslCertificateRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $expand = null, ?array $select = null) {
        $this->expand = $expand;
        $this->select = $select;
    }

}
