<?php

namespace Microsoft\\Graph\\Generated\Security\ThreatIntelligence\HostPorts\Item\MostRecentSslCertificate;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MostRecentSslCertificateRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MostRecentSslCertificateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MostRecentSslCertificateRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MostRecentSslCertificateRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MostRecentSslCertificateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MostRecentSslCertificateRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new MostRecentSslCertificateRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return MostRecentSslCertificateRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): MostRecentSslCertificateRequestBuilderGetQueryParameters {
        return new MostRecentSslCertificateRequestBuilderGetQueryParameters($expand, $select);
    }

}
