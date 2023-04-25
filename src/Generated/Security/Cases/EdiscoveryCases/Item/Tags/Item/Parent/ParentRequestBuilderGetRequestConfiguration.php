<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\Tags\Item\Parent;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ParentRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ParentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ParentRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new parentRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ParentRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ParentRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new parentRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ParentRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ParentRequestBuilderGetQueryParameters {
        return new ParentRequestBuilderGetQueryParameters($expand, $select);
    }

}
