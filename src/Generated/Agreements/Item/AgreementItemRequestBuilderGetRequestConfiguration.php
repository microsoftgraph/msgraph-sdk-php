<?php

namespace Microsoft\\Graph\\Generated\Agreements\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AgreementItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AgreementItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AgreementItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AgreementItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AgreementItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AgreementItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AgreementItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return AgreementItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $select = null): AgreementItemRequestBuilderGetQueryParameters {
        return new AgreementItemRequestBuilderGetQueryParameters($select);
    }

}
