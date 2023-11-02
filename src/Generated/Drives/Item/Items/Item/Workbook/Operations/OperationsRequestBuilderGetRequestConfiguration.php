<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Operations;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OperationsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OperationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OperationsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new operationsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OperationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OperationsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new operationsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @return OperationsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $orderby = null, ?string $search = null, ?array $select = null): OperationsRequestBuilderGetQueryParameters {
        return new OperationsRequestBuilderGetQueryParameters($expand, $orderby, $search, $select);
    }

}
