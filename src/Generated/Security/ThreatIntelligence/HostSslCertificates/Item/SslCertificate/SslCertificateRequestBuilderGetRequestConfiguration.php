<?php

namespace Microsoft\\Graph\\Generated\Security\ThreatIntelligence\HostSslCertificates\Item\SslCertificate;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SslCertificateRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SslCertificateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SslCertificateRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SslCertificateRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SslCertificateRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SslCertificateRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SslCertificateRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SslCertificateRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SslCertificateRequestBuilderGetQueryParameters {
        return new SslCertificateRequestBuilderGetQueryParameters($expand, $select);
    }

}
