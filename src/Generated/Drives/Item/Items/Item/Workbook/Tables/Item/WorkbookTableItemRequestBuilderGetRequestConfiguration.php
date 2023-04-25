<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Tables\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WorkbookTableItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WorkbookTableItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WorkbookTableItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WorkbookTableItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WorkbookTableItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WorkbookTableItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WorkbookTableItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WorkbookTableItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WorkbookTableItemRequestBuilderGetQueryParameters {
        return new WorkbookTableItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
