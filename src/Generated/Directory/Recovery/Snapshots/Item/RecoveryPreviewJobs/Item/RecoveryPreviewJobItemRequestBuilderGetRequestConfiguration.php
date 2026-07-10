<?php

namespace Microsoft\Graph\Generated\Directory\Recovery\Snapshots\Item\RecoveryPreviewJobs\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RecoveryPreviewJobItemRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RecoveryPreviewJobItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RecoveryPreviewJobItemRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RecoveryPreviewJobItemRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RecoveryPreviewJobItemRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RecoveryPreviewJobItemRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RecoveryPreviewJobItemRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RecoveryPreviewJobItemRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RecoveryPreviewJobItemRequestBuilderGetQueryParameters {
        return new RecoveryPreviewJobItemRequestBuilderGetQueryParameters($expand, $select);
    }

}
