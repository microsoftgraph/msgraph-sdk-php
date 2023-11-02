<?php

namespace Microsoft\Graph\Generated\Agreements;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AgreementsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AgreementsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AgreementsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new agreementsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AgreementsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AgreementsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new agreementsRequestBuilderGetQueryParameters.
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @return AgreementsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $search = null, ?array $select = null): AgreementsRequestBuilderGetQueryParameters {
        return new AgreementsRequestBuilderGetQueryParameters($search, $select);
    }

}
