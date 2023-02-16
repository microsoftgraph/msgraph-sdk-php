<?php

namespace Microsoft\Graph\Generated\Communications\Calls\Item\Participants\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ParticipantItemRequestBuilderGetRequestConfiguration 
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
     * @var ParticipantItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ParticipantItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ParticipantItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ParticipantItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ParticipantItemRequestBuilderGetQueryParameters {
        return new ParticipantItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new ParticipantItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param ParticipantItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ParticipantItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
