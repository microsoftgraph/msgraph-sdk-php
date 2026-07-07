<?php

namespace Microsoft\Graph\Generated\CertificateBasedAuthConfiguration;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: certificateBasedAuthConfigurationRequestBuilderGetRequestConfiguration
*/
class CertificateBasedAuthConfigurationRequestBuilderGetReque_04028257 extends BaseRequestConfiguration 
{
    /**
     * @var CertificateBasedAuthConfigurationRequestBuilderGetQuery_bdd25903|null $queryParameters Request query parameters
    */
    public ?CertificateBasedAuthConfigurationRequestBuilderGetQuery_bdd25903 $queryParameters = null;
    
    /**
     * Instantiates a new CertificateBasedAuthConfigurationRequestBuilderGetReque_04028257 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CertificateBasedAuthConfigurationRequestBuilderGetQuery_bdd25903|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CertificateBasedAuthConfigurationRequestBuilderGetQuery_bdd25903 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CertificateBasedAuthConfigurationRequestBuilderGetQuery_bdd25903.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return CertificateBasedAuthConfigurationRequestBuilderGetQuery_bdd25903
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): CertificateBasedAuthConfigurationRequestBuilderGetQuery_bdd25903 {
        return new CertificateBasedAuthConfigurationRequestBuilderGetQuery_bdd25903($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
