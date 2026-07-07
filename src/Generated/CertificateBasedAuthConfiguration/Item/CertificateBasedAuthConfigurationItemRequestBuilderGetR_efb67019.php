<?php

namespace Microsoft\Graph\Generated\CertificateBasedAuthConfiguration\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: CertificateBasedAuthConfigurationItemRequestBuilderGetRequestConfiguration
*/
class CertificateBasedAuthConfigurationItemRequestBuilderGetR_efb67019 extends BaseRequestConfiguration 
{
    /**
     * @var CertificateBasedAuthConfigurationItemRequestBuilderGetQ_9dbbf16d|null $queryParameters Request query parameters
    */
    public ?CertificateBasedAuthConfigurationItemRequestBuilderGetQ_9dbbf16d $queryParameters = null;
    
    /**
     * Instantiates a new CertificateBasedAuthConfigurationItemRequestBuilderGetR_efb67019 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CertificateBasedAuthConfigurationItemRequestBuilderGetQ_9dbbf16d|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CertificateBasedAuthConfigurationItemRequestBuilderGetQ_9dbbf16d $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CertificateBasedAuthConfigurationItemRequestBuilderGetQ_9dbbf16d.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CertificateBasedAuthConfigurationItemRequestBuilderGetQ_9dbbf16d
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CertificateBasedAuthConfigurationItemRequestBuilderGetQ_9dbbf16d {
        return new CertificateBasedAuthConfigurationItemRequestBuilderGetQ_9dbbf16d($expand, $select);
    }

}
