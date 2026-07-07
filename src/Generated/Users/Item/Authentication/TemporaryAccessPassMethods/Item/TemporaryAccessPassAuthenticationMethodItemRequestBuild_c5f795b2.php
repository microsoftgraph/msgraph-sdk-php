<?php

namespace Microsoft\Graph\Generated\Users\Item\Authentication\TemporaryAccessPassMethods\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: TemporaryAccessPassAuthenticationMethodItemRequestBuilderGetRequestConfiguration
*/
class TemporaryAccessPassAuthenticationMethodItemRequestBuild_c5f795b2 extends BaseRequestConfiguration 
{
    /**
     * @var TemporaryAccessPassAuthenticationMethodItemRequestBuild_76952859|null $queryParameters Request query parameters
    */
    public ?TemporaryAccessPassAuthenticationMethodItemRequestBuild_76952859 $queryParameters = null;
    
    /**
     * Instantiates a new TemporaryAccessPassAuthenticationMethodItemRequestBuild_c5f795b2 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param TemporaryAccessPassAuthenticationMethodItemRequestBuild_76952859|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?TemporaryAccessPassAuthenticationMethodItemRequestBuild_76952859 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new TemporaryAccessPassAuthenticationMethodItemRequestBuild_76952859.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return TemporaryAccessPassAuthenticationMethodItemRequestBuild_76952859
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): TemporaryAccessPassAuthenticationMethodItemRequestBuild_76952859 {
        return new TemporaryAccessPassAuthenticationMethodItemRequestBuild_76952859($expand, $select);
    }

}
