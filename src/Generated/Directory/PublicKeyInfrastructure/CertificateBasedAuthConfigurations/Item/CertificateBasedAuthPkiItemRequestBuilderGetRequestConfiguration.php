<?php

namespace Microsoft\Graph\Generated\Directory\PublicKeyInfrastructure\CertificateBasedAuthConfigurations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CertificateBasedAuthPkiItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CertificateBasedAuthPkiItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CertificateBasedAuthPkiItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CertificateBasedAuthPkiItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CertificateBasedAuthPkiItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CertificateBasedAuthPkiItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CertificateBasedAuthPkiItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CertificateBasedAuthPkiItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CertificateBasedAuthPkiItemRequestBuilderGetQueryParameters {
        return new CertificateBasedAuthPkiItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
