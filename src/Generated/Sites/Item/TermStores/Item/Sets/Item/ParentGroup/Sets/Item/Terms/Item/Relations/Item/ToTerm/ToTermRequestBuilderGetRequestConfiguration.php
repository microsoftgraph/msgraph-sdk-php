<?php

namespace Microsoft\Graph\Generated\Sites\Item\TermStores\Item\Sets\Item\ParentGroup\Sets\Item\Terms\Item\Relations\Item\ToTerm;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ToTermRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var ToTermRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ToTermRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new ToTermRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param ToTermRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?ToTermRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new ToTermRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return ToTermRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): ToTermRequestBuilderGetQueryParameters {
        return new ToTermRequestBuilderGetQueryParameters($expand, $select);
    }

}
