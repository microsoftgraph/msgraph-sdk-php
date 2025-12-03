<?php

namespace Microsoft\Graph\Generated\Places\Item\GraphWorkspace;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphWorkspaceRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GraphWorkspaceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphWorkspaceRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GraphWorkspaceRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GraphWorkspaceRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphWorkspaceRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GraphWorkspaceRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphWorkspaceRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GraphWorkspaceRequestBuilderGetQueryParameters {
        return new GraphWorkspaceRequestBuilderGetQueryParameters($expand, $select);
    }

}
