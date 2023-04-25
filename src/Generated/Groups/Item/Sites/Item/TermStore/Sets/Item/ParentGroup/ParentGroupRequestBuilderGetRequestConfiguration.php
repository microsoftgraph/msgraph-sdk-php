<?php

namespace Microsoft\Graph\Generated\Groups\Item\Sites\Item\TermStore\Sets\Item\ParentGroup;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ParentGroupRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ParentGroupRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ParentGroupRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new parentGroupRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ParentGroupRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ParentGroupRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new parentGroupRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ParentGroupRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ParentGroupRequestBuilderGetQueryParameters {
        return new ParentGroupRequestBuilderGetQueryParameters($expand, $select);
    }

}
