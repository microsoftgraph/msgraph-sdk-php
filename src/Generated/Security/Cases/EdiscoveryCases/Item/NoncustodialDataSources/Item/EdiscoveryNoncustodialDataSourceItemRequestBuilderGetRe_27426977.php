<?php

namespace Microsoft\Graph\Generated\Security\Cases\EdiscoveryCases\Item\NoncustodialDataSources\Item;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: EdiscoveryNoncustodialDataSourceItemRequestBuilderGetRequestConfiguration
*/
class EdiscoveryNoncustodialDataSourceItemRequestBuilderGetRe_27426977 extends BaseRequestConfiguration 
{
    /**
     * @var EdiscoveryNoncustodialDataSourceItemRequestBuilderGetQu_36bcb3f0|null $queryParameters Request query parameters
    */
    public ?EdiscoveryNoncustodialDataSourceItemRequestBuilderGetQu_36bcb3f0 $queryParameters = null;
    
    /**
     * Instantiates a new EdiscoveryNoncustodialDataSourceItemRequestBuilderGetRe_27426977 and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param EdiscoveryNoncustodialDataSourceItemRequestBuilderGetQu_36bcb3f0|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?EdiscoveryNoncustodialDataSourceItemRequestBuilderGetQu_36bcb3f0 $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new EdiscoveryNoncustodialDataSourceItemRequestBuilderGetQu_36bcb3f0.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return EdiscoveryNoncustodialDataSourceItemRequestBuilderGetQu_36bcb3f0
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): EdiscoveryNoncustodialDataSourceItemRequestBuilderGetQu_36bcb3f0 {
        return new EdiscoveryNoncustodialDataSourceItemRequestBuilderGetQu_36bcb3f0($expand, $select);
    }

}
