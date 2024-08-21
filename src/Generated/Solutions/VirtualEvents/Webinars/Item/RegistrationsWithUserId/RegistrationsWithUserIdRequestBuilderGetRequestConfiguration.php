<?php

namespace Microsoft\Graph\Generated\Solutions\VirtualEvents\Webinars\Item\RegistrationsWithUserId;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class RegistrationsWithUserIdRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var RegistrationsWithUserIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?RegistrationsWithUserIdRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new RegistrationsWithUserIdRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param RegistrationsWithUserIdRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?RegistrationsWithUserIdRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new RegistrationsWithUserIdRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return RegistrationsWithUserIdRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): RegistrationsWithUserIdRequestBuilderGetQueryParameters {
        return new RegistrationsWithUserIdRequestBuilderGetQueryParameters($expand, $select);
    }

}
