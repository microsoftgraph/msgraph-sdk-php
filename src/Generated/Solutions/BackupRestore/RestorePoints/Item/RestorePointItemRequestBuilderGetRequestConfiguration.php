<?php

namespace Microsoft\\Graph\\Generated\Solutions\BackupRestore\RestorePoints\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RestorePointItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RestorePointItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RestorePointItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RestorePointItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RestorePointItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RestorePointItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RestorePointItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RestorePointItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RestorePointItemRequestBuilderGetQueryParameters {
        return new RestorePointItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
