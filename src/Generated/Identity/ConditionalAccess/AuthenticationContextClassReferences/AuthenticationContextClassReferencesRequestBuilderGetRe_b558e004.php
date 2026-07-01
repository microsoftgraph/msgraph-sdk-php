<?php

namespace Microsoft\Graph\Generated\Identity\ConditionalAccess\AuthenticationContextClassReferences;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: authenticationContextClassReferencesRequestBuilderGetRequestConfiguration
*/
class AuthenticationContextClassReferencesRequestBuilderGetRe_b558e004 extends BaseRequestConfiguration 
{
    /**
     * @var AuthenticationContextClassReferencesRequestBuilderGetQu_6bbf576b|null $queryParameters Request query parameters
    */
    public ?AuthenticationContextClassReferencesRequestBuilderGetQu_6bbf576b $queryParameters = null;
    
    /**
     * Instantiates a new AuthenticationContextClassReferencesRequestBuilderGetRe_b558e004 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AuthenticationContextClassReferencesRequestBuilderGetQu_6bbf576b|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AuthenticationContextClassReferencesRequestBuilderGetQu_6bbf576b $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AuthenticationContextClassReferencesRequestBuilderGetQu_6bbf576b.
     * @param bool|null $count Include count of items
     * @param array<string>|null $expand Expand related entities
     * @param string|null $filter Filter items by property values
     * @param array<string>|null $orderby Order items by property values
     * @param string|null $search Search items by search phrases
     * @param array<string>|null $select Select properties to be returned
     * @param int|null $skip Skip the first n items
     * @param int|null $top Show only the first n items
     * @return AuthenticationContextClassReferencesRequestBuilderGetQu_6bbf576b
    */
    public static function createQueryParameters(?bool $count = null, ?array $expand = null, ?string $filter = null, ?array $orderby = null, ?string $search = null, ?array $select = null, ?int $skip = null, ?int $top = null): AuthenticationContextClassReferencesRequestBuilderGetQu_6bbf576b {
        return new AuthenticationContextClassReferencesRequestBuilderGetQu_6bbf576b($count, $expand, $filter, $orderby, $search, $select, $skip, $top);
    }

}
