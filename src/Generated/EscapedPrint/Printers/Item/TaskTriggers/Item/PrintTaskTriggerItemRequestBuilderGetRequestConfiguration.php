<?php

namespace Microsoft\\Graph\\Generated\EscapedPrint\Printers\Item\TaskTriggers\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PrintTaskTriggerItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PrintTaskTriggerItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PrintTaskTriggerItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PrintTaskTriggerItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PrintTaskTriggerItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PrintTaskTriggerItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PrintTaskTriggerItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PrintTaskTriggerItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PrintTaskTriggerItemRequestBuilderGetQueryParameters {
        return new PrintTaskTriggerItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
