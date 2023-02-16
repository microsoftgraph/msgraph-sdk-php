<?php

namespace Microsoft\Graph\Generated\AgreementAcceptances\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AgreementAcceptanceItemRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var AgreementAcceptanceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AgreementAcceptanceItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AgreementAcceptanceItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return AgreementAcceptanceItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $select = null): AgreementAcceptanceItemRequestBuilderGetQueryParameters {
        return new AgreementAcceptanceItemRequestBuilderGetQueryParameters($select);
    }

    /**
     * Instantiates a new AgreementAcceptanceItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param AgreementAcceptanceItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AgreementAcceptanceItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
