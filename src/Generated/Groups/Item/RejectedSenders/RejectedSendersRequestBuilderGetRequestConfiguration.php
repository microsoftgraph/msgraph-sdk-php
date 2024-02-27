<?php

namespace Microsoft\Graph\Generated\Groups\Item\RejectedSenders;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RejectedSendersRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RejectedSendersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RejectedSendersRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RejectedSendersRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RejectedSendersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RejectedSendersRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RejectedSendersRequestBuilderGetQueryParameters.
     * @param bool|null $count Include count of items
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return RejectedSendersRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $count = null, ?string $filter = null, ?array $orderby = null, ?array $select = null, ?int $skip = null, ?int $top = null): RejectedSendersRequestBuilderGetQueryParameters {
        return new RejectedSendersRequestBuilderGetQueryParameters($count, $filter, $orderby, $select, $skip, $top);
    }

}
