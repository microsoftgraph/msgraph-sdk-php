<?php

namespace Microsoft\Graph\Generated\Directory\Recovery\Snapshots\Item\RecoveryJobs\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RecoveryJobItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RecoveryJobItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RecoveryJobItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RecoveryJobItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RecoveryJobItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RecoveryJobItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RecoveryJobItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RecoveryJobItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RecoveryJobItemRequestBuilderGetQueryParameters {
        return new RecoveryJobItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
