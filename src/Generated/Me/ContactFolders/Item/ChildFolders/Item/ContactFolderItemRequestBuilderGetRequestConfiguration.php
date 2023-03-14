<?php

namespace Microsoft\Graph\Generated\Me\ContactFolders\Item\ChildFolders\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ContactFolderItemRequestBuilderGetRequestConfiguration 
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
     * @var ContactFolderItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ContactFolderItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ContactFolderItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ContactFolderItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ContactFolderItemRequestBuilderGetQueryParameters {
        return new ContactFolderItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new ContactFolderItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ContactFolderItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ContactFolderItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
