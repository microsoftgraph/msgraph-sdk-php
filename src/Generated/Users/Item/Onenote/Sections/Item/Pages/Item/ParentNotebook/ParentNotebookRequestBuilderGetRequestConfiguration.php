<?php

namespace Microsoft\\Graph\\Generated\Users\Item\Onenote\Sections\Item\Pages\Item\ParentNotebook;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ParentNotebookRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ParentNotebookRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ParentNotebookRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ParentNotebookRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ParentNotebookRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ParentNotebookRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ParentNotebookRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ParentNotebookRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ParentNotebookRequestBuilderGetQueryParameters {
        return new ParentNotebookRequestBuilderGetQueryParameters($expand, $select);
    }

}
