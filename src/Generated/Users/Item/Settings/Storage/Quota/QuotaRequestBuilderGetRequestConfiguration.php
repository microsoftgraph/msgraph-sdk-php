<?php

namespace Microsoft\Graph\Generated\Users\Item\Settings\Storage\Quota;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class QuotaRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var QuotaRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?QuotaRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new QuotaRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param QuotaRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?QuotaRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new QuotaRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return QuotaRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): QuotaRequestBuilderGetQueryParameters {
        return new QuotaRequestBuilderGetQueryParameters($expand, $select);
    }

}
