<?php

namespace Microsoft\Graph\Generated\Users\Item\Messages\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MessageItemRequestBuilderGetRequestConfiguration 
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
     * @var MessageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MessageItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MessageItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return MessageItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $select = null): MessageItemRequestBuilderGetQueryParameters {
        return new MessageItemRequestBuilderGetQueryParameters($select);
    }

    /**
     * Instantiates a new MessageItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MessageItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MessageItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
