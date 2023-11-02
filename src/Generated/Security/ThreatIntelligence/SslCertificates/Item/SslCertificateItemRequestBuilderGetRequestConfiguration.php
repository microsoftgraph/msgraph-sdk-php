<?php

namespace Microsoft\Graph\Generated\Security\ThreatIntelligence\SslCertificates\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class SslCertificateItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var SslCertificateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?SslCertificateItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new SslCertificateItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param SslCertificateItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?SslCertificateItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new SslCertificateItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return SslCertificateItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): SslCertificateItemRequestBuilderGetQueryParameters {
        return new SslCertificateItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
