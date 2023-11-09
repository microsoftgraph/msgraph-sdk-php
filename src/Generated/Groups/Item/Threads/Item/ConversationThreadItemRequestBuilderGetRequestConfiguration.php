<?php

namespace Microsoft\Graph\Generated\Groups\Item\Threads\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ConversationThreadItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ConversationThreadItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ConversationThreadItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ConversationThreadItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ConversationThreadItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ConversationThreadItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ConversationThreadItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return ConversationThreadItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $select = null): ConversationThreadItemRequestBuilderGetQueryParameters {
        return new ConversationThreadItemRequestBuilderGetQueryParameters($select);
    }

}
