<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Operations\Item;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WorkbookOperationItemRequestBuilderGetRequestConfiguration 
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
     * @var WorkbookOperationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WorkbookOperationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WorkbookOperationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WorkbookOperationItemRequestBuilderGetQueryParameters
    */
    public static function addQueryParameters(?array $expand = null, ?array $select = null): WorkbookOperationItemRequestBuilderGetQueryParameters {
        return new WorkbookOperationItemRequestBuilderGetQueryParameters($expand, $select);
    }

    /**
     * Instantiates a new WorkbookOperationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<array>|null $headers Request headers
     * @param array<array>|null $options Request options
     * @param WorkbookOperationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WorkbookOperationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        $this->headers = $headers;
        $this->options = $options;
        $this->queryParameters = $queryParameters;
    }

}
