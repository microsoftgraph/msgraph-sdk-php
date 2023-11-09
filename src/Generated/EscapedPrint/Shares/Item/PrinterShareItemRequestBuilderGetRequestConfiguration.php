<?php

namespace Microsoft\Graph\Generated\EscapedPrint\Shares\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PrinterShareItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PrinterShareItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PrinterShareItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PrinterShareItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PrinterShareItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PrinterShareItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PrinterShareItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PrinterShareItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PrinterShareItemRequestBuilderGetQueryParameters {
        return new PrinterShareItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
