<?php

namespace Microsoft\Graph\Generated\Admin\People;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class PeopleRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var PeopleRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?PeopleRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new PeopleRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param PeopleRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?PeopleRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new PeopleRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return PeopleRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): PeopleRequestBuilderGetQueryParameters {
        return new PeopleRequestBuilderGetQueryParameters($expand, $select);
    }

}
