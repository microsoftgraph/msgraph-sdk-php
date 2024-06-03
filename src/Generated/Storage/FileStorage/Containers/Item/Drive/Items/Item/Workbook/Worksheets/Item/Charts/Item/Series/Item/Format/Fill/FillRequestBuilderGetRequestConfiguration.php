<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\Containers\Item\Drive\Items\Item\Workbook\Worksheets\Item\Charts\Item\Series\Item\Format\Fill;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FillRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FillRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FillRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FillRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FillRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FillRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FillRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FillRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): FillRequestBuilderGetQueryParameters {
        return new FillRequestBuilderGetQueryParameters($expand, $select);
    }

}
