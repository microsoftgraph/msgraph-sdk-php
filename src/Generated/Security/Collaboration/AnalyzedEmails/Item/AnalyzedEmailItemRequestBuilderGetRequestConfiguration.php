<?php

namespace Microsoft\Graph\Generated\Security\Collaboration\AnalyzedEmails\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class AnalyzedEmailItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var AnalyzedEmailItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?AnalyzedEmailItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new AnalyzedEmailItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AnalyzedEmailItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AnalyzedEmailItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AnalyzedEmailItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AnalyzedEmailItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AnalyzedEmailItemRequestBuilderGetQueryParameters {
        return new AnalyzedEmailItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
