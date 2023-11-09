<?php

namespace Microsoft\Graph\Generated\Sites\Item\TermStores\Item\Sets\Item\ParentGroup\Sets\Item\Children\Item\Relations\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RelationItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RelationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RelationItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RelationItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RelationItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RelationItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RelationItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RelationItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RelationItemRequestBuilderGetQueryParameters {
        return new RelationItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
