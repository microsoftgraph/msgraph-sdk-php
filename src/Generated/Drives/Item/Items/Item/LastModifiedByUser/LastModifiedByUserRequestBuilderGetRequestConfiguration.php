<?php

namespace Microsoft\\Graph\\Generated\Drives\Item\Items\Item\LastModifiedByUser;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LastModifiedByUserRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LastModifiedByUserRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LastModifiedByUserRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LastModifiedByUserRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LastModifiedByUserRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LastModifiedByUserRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LastModifiedByUserRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return LastModifiedByUserRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): LastModifiedByUserRequestBuilderGetQueryParameters {
        return new LastModifiedByUserRequestBuilderGetQueryParameters($expand, $select);
    }

}
