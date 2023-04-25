<?php

namespace Microsoft\Graph\Generated\EscapedPrint\Printers\Item\Connectors\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PrintConnectorItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PrintConnectorItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PrintConnectorItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PrintConnectorItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PrintConnectorItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PrintConnectorItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PrintConnectorItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PrintConnectorItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PrintConnectorItemRequestBuilderGetQueryParameters {
        return new PrintConnectorItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
