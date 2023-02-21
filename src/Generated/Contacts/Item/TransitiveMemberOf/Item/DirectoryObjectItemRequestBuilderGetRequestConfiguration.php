<?php

namespace Microsoft\Graph\Generated\Contacts\Item\TransitiveMemberOf\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DirectoryObjectItemRequestBuilderGetRequestConfiguration 
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
     * @var DirectoryObjectItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DirectoryObjectItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DirectoryObjectItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DirectoryObjectItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): DirectoryObjectItemRequestBuilderGetQueryParameters {
        return new DirectoryObjectItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new DirectoryObjectItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param DirectoryObjectItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DirectoryObjectItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
