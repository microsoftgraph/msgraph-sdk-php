<?php

namespace Microsoft\Graph\Generated\DirectoryRoles\Item\Members\Item\GraphUser;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphUserRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GraphUserRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphUserRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new graphUserRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GraphUserRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphUserRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new graphUserRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphUserRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GraphUserRequestBuilderGetQueryParameters {
        return new GraphUserRequestBuilderGetQueryParameters($expand, $select);
    }

}
