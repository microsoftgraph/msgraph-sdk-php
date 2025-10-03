<?php

namespace Microsoft\\Graph\\Generated\Directory\PublicKeyInfrastructure\CertificateBasedAuthConfigurations\Item\CertificateAuthorities\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CertificateAuthorityDetailItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CertificateAuthorityDetailItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CertificateAuthorityDetailItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CertificateAuthorityDetailItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CertificateAuthorityDetailItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CertificateAuthorityDetailItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CertificateAuthorityDetailItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CertificateAuthorityDetailItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CertificateAuthorityDetailItemRequestBuilderGetQueryParameters {
        return new CertificateAuthorityDetailItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
