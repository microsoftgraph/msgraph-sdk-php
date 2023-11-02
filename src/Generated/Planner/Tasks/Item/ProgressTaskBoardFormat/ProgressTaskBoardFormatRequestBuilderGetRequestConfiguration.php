<?php

namespace Microsoft\Graph\Generated\Planner\Tasks\Item\ProgressTaskBoardFormat;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ProgressTaskBoardFormatRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ProgressTaskBoardFormatRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ProgressTaskBoardFormatRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new progressTaskBoardFormatRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ProgressTaskBoardFormatRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ProgressTaskBoardFormatRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new progressTaskBoardFormatRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ProgressTaskBoardFormatRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ProgressTaskBoardFormatRequestBuilderGetQueryParameters {
        return new ProgressTaskBoardFormatRequestBuilderGetQueryParameters($expand, $select);
    }

}
