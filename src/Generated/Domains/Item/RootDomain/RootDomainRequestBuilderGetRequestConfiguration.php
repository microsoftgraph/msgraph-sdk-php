<?php

namespace Microsoft\Graph\Generated\Domains\Item\RootDomain;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RootDomainRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RootDomainRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RootDomainRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RootDomainRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RootDomainRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RootDomainRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RootDomainRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RootDomainRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RootDomainRequestBuilderGetQueryParameters {
        return new RootDomainRequestBuilderGetQueryParameters($expand, $select);
    }

}
