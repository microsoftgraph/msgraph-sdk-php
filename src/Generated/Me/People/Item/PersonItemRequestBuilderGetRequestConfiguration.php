<?php

namespace Microsoft\Graph\Generated\Me\People\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PersonItemRequestBuilderGetRequestConfiguration 
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
     * @var PersonItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PersonItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PersonItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return PersonItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $select = null): PersonItemRequestBuilderGetQueryParameters {
        return new PersonItemRequestBuilderGetQueryParameters($select);
    }

    /**
     * Instantiates a new PersonItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param PersonItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PersonItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
