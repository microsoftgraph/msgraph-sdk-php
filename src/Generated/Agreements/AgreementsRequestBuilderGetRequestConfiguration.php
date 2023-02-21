<?php

namespace Microsoft\Graph\Generated\Agreements;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AgreementsRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var AgreementsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AgreementsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new agreementsRequestBuilderGetQueryParameters.
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @return AgreementsRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?string $search = null, ?array $select = null): AgreementsRequestBuilderGetQueryParameters {
        return new AgreementsRequestBuilderGetQueryParameters($search, $select);
    }

    /**
     * Instantiates a new agreementsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param AgreementsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AgreementsRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
