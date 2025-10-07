<?php

namespace Microsoft\\Graph\\Generated\Sites\Item\Lists\Item\ContentTypes\Item\BaseTypes\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ContentTypeItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ContentTypeItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ContentTypeItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ContentTypeItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ContentTypeItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ContentTypeItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ContentTypeItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ContentTypeItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ContentTypeItemRequestBuilderGetQueryParameters {
        return new ContentTypeItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
