<?php

namespace Microsoft\Graph\Generated\Groups\Item\Onenote\SectionGroups\Item\ParentNotebook;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ParentNotebookRequestBuilderGetRequestConfiguration 
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
     * @var ParentNotebookRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ParentNotebookRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new parentNotebookRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ParentNotebookRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): ParentNotebookRequestBuilderGetQueryParameters {
        return new ParentNotebookRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new parentNotebookRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ParentNotebookRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ParentNotebookRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
