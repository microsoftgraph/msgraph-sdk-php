<?php

namespace Microsoft\Graph\Generated\Users\Item\Notes\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class NoteItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var NoteItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?NoteItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new NoteItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param NoteItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?NoteItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new NoteItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return NoteItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): NoteItemRequestBuilderGetQueryParameters {
        return new NoteItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
