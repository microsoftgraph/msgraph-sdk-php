<?php

namespace Microsoft\\Graph\\Generated\Users\Item\TransitiveMemberOf\Item\GraphDirectoryRole;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphDirectoryRoleRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GraphDirectoryRoleRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphDirectoryRoleRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GraphDirectoryRoleRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GraphDirectoryRoleRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphDirectoryRoleRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GraphDirectoryRoleRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphDirectoryRoleRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GraphDirectoryRoleRequestBuilderGetQueryParameters {
        return new GraphDirectoryRoleRequestBuilderGetQueryParameters($expand, $select);
    }

}
