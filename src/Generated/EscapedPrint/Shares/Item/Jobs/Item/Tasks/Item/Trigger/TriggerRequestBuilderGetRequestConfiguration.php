<?php

namespace Microsoft\Graph\Generated\EscapedPrint\Shares\Item\Jobs\Item\Tasks\Item\Trigger;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TriggerRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var TriggerRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TriggerRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new TriggerRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TriggerRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TriggerRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TriggerRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TriggerRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TriggerRequestBuilderGetQueryParameters {
        return new TriggerRequestBuilderGetQueryParameters($expand, $select);
    }

}
