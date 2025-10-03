<?php

namespace Microsoft\\Graph\\Generated\Communications\CallRecords\Item\Organizer_v2;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class Organizer_v2RequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var Organizer_v2RequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?Organizer_v2RequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new Organizer_v2RequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param Organizer_v2RequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?Organizer_v2RequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new Organizer_v2RequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return Organizer_v2RequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): Organizer_v2RequestBuilderGetQueryParameters {
        return new Organizer_v2RequestBuilderGetQueryParameters($expand, $select);
    }

}
