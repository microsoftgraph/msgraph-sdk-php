<?php

namespace Microsoft\Graph\Generated\Me\Calendar\Events\Item\Instances\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class EventItemRequestBuilderGetRequestConfiguration 
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
     * @var EventItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?EventItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new EventItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EventItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EventItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EventItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return EventItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $select = null): EventItemRequestBuilderGetQueryParameters {
        return new EventItemRequestBuilderGetQueryParameters($select);
    }

}
