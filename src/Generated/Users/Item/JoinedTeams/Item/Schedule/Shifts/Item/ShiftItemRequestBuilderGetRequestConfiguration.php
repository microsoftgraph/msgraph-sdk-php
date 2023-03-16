<?php

namespace Microsoft\Graph\Generated\Users\Item\JoinedTeams\Item\Schedule\Shifts\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ShiftItemRequestBuilderGetRequestConfiguration 
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
     * @var ShiftItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ShiftItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ShiftItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ShiftItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ShiftItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ShiftItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return ShiftItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $select = null): ShiftItemRequestBuilderGetQueryParameters {
        return new ShiftItemRequestBuilderGetQueryParameters($select);
    }

}
