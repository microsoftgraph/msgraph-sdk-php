<?php

namespace Microsoft\\Graph\\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\CellWithRowWithColumn\Worksheet;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class WorksheetRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var WorksheetRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?WorksheetRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new WorksheetRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param WorksheetRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?WorksheetRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new WorksheetRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return WorksheetRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): WorksheetRequestBuilderGetQueryParameters {
        return new WorksheetRequestBuilderGetQueryParameters($expand, $select);
    }

}
