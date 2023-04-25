<?php

namespace Microsoft\Graph\Generated\Organization\Item\CertificateBasedAuthConfiguration\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CertificateBasedAuthConfigurationItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CertificateBasedAuthConfigurationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CertificateBasedAuthConfigurationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CertificateBasedAuthConfigurationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CertificateBasedAuthConfigurationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CertificateBasedAuthConfigurationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CertificateBasedAuthConfigurationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CertificateBasedAuthConfigurationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CertificateBasedAuthConfigurationItemRequestBuilderGetQueryParameters {
        return new CertificateBasedAuthConfigurationItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
