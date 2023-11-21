<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\RetentionLabel;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RetentionLabelRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RetentionLabelRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RetentionLabelRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new retentionLabelRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RetentionLabelRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RetentionLabelRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new retentionLabelRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RetentionLabelRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RetentionLabelRequestBuilderGetQueryParameters {
        return new RetentionLabelRequestBuilderGetQueryParameters($expand, $select);
    }

}
