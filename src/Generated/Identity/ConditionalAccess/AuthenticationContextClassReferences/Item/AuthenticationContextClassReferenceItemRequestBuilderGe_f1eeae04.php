<?php

namespace Microsoft\Graph\Generated\Identity\ConditionalAccess\AuthenticationContextClassReferences\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: AuthenticationContextClassReferenceItemRequestBuilderGetRequestConfiguration
*/
class AuthenticationContextClassReferenceItemRequestBuilderGe_f1eeae04 extends BaseRequestConfiguration 
{
    /**
     * @var AuthenticationContextClassReferenceItemRequestBuilderGe_3e0c0012|null $queryParameters Request query parameters
    */
    public ?AuthenticationContextClassReferenceItemRequestBuilderGe_3e0c0012 $queryParameters = null;
    
    /**
     * Instantiates a new AuthenticationContextClassReferenceItemRequestBuilderGe_f1eeae04 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param AuthenticationContextClassReferenceItemRequestBuilderGe_3e0c0012|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?AuthenticationContextClassReferenceItemRequestBuilderGe_3e0c0012 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new AuthenticationContextClassReferenceItemRequestBuilderGe_3e0c0012.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return AuthenticationContextClassReferenceItemRequestBuilderGe_3e0c0012
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): AuthenticationContextClassReferenceItemRequestBuilderGe_3e0c0012 {
        return new AuthenticationContextClassReferenceItemRequestBuilderGe_3e0c0012($expand, $select);
    }

}
