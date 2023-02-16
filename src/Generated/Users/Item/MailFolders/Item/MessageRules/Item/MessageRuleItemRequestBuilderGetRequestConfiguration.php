<?php

namespace Microsoft\Graph\Generated\Users\Item\MailFolders\Item\MessageRules\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MessageRuleItemRequestBuilderGetRequestConfiguration 
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
     * @var MessageRuleItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MessageRuleItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new MessageRuleItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $select Select properties to be returned
     * @return MessageRuleItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $select = null): MessageRuleItemRequestBuilderGetQueryParameters {
        return new MessageRuleItemRequestBuilderGetQueryParameters($select);
    }

    /**
     * Instantiates a new MessageRuleItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param MessageRuleItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MessageRuleItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
