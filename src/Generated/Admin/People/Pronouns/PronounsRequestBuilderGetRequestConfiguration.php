<?php

namespace Microsoft\Graph\Generated\Admin\People\Pronouns;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PronounsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PronounsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PronounsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new pronounsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PronounsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PronounsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new pronounsRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PronounsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PronounsRequestBuilderGetQueryParameters {
        return new PronounsRequestBuilderGetQueryParameters($expand, $select);
    }

}
