<?php

namespace Microsoft\Graph\Generated\Users\Item\MailFolders\Item\MessageRules;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class MessageRulesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var MessageRulesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?MessageRulesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new messageRulesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param MessageRulesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?MessageRulesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new messageRulesRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return MessageRulesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?array $orderby = null, ?array $select = null, ?int $skip = null, ?int $top = null): MessageRulesRequestBuilderGetQueryParameters {
        return new MessageRulesRequestBuilderGetQueryParameters($count, $filter, $orderby, $select, $skip, $top);
    }

}
