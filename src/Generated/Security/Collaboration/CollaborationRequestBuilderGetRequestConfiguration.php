<?php

namespace Microsoft\Graph\Generated\Security\Collaboration;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CollaborationRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CollaborationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CollaborationRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CollaborationRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CollaborationRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CollaborationRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CollaborationRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return CollaborationRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): CollaborationRequestBuilderGetQueryParameters {
        return new CollaborationRequestBuilderGetQueryParameters($expand, $select);
    }

}
