<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\Containers\Item\Drive\Items\Item\Workbook\Worksheets\Item\Charts\Item\Axes\ValueAxis;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ValueAxisRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ValueAxisRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ValueAxisRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ValueAxisRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ValueAxisRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ValueAxisRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ValueAxisRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ValueAxisRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ValueAxisRequestBuilderGetQueryParameters {
        return new ValueAxisRequestBuilderGetQueryParameters($expand, $select);
    }

}
