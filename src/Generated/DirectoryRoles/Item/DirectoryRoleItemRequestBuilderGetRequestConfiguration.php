<?php

namespace Microsoft\Graph\Generated\DirectoryRoles\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DirectoryRoleItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DirectoryRoleItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DirectoryRoleItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DirectoryRoleItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DirectoryRoleItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DirectoryRoleItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DirectoryRoleItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return DirectoryRoleItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): DirectoryRoleItemRequestBuilderGetQueryParameters {
        return new DirectoryRoleItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
