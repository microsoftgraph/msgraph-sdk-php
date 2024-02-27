<?php

namespace Microsoft\Graph\Generated\EscapedPrint\Shares\Item\Printer;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PrinterRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PrinterRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PrinterRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PrinterRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PrinterRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PrinterRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PrinterRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PrinterRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PrinterRequestBuilderGetQueryParameters {
        return new PrinterRequestBuilderGetQueryParameters($expand, $select);
    }

}
