<?php

namespace Microsoft\Graph\Generated\Groups\Item\Threads\Item\Posts\Item\InReplyTo;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class InReplyToRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var InReplyToRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?InReplyToRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new inReplyToRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param InReplyToRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?InReplyToRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new inReplyToRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return InReplyToRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): InReplyToRequestBuilderGetQueryParameters {
        return new InReplyToRequestBuilderGetQueryParameters($expand, $select);
    }

}
