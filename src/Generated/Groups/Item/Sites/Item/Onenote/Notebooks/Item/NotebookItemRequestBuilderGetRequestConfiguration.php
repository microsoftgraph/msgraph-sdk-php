<?php

namespace Microsoft\\Graph\\Generated\Groups\Item\Sites\Item\Onenote\Notebooks\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class NotebookItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var NotebookItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?NotebookItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new NotebookItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param NotebookItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?NotebookItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new NotebookItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return NotebookItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): NotebookItemRequestBuilderGetQueryParameters {
        return new NotebookItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
