<?php

namespace Microsoft\\Graph\\Generated\Groups\Item\Sites\Item\TermStore\Sets\Item\ParentGroup\Sets\Item\Children\Item\Children\Item\Relations\Item\FromTerm;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class FromTermRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var FromTermRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?FromTermRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new FromTermRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param FromTermRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?FromTermRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new FromTermRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return FromTermRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): FromTermRequestBuilderGetQueryParameters {
        return new FromTermRequestBuilderGetQueryParameters($expand, $select);
    }

}
