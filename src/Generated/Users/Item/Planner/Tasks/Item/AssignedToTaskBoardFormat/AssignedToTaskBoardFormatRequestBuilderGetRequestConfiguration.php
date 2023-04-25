<?php

namespace Microsoft\Graph\Generated\Users\Item\Planner\Tasks\Item\AssignedToTaskBoardFormat;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AssignedToTaskBoardFormatRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AssignedToTaskBoardFormatRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AssignedToTaskBoardFormatRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new assignedToTaskBoardFormatRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AssignedToTaskBoardFormatRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AssignedToTaskBoardFormatRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new assignedToTaskBoardFormatRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AssignedToTaskBoardFormatRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AssignedToTaskBoardFormatRequestBuilderGetQueryParameters {
        return new AssignedToTaskBoardFormatRequestBuilderGetQueryParameters($expand, $select);
    }

}
