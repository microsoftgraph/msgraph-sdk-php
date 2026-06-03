<?php

namespace Microsoft\Graph\Generated\DeviceAppManagement\MobileApps\Item\GraphMicrosoftStoreForBusinessApp;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options. Original name: graphMicrosoftStoreForBusinessAppRequestBuilderGetRequestConfiguration
*/
class GraphMicrosoftStoreForBusinessAppRequestBuilderGetReque_06016c5c extends BaseRequestConfiguration 
{
    /**
     * @var GraphMicrosoftStoreForBusinessAppRequestBuilderGetQuery_1bedf58c|null $queryParameters Request query parameters
    */
    public ?GraphMicrosoftStoreForBusinessAppRequestBuilderGetQuery_1bedf58c $queryParameters = null;
    
    /**
     * Instantiates a new GraphMicrosoftStoreForBusinessAppRequestBuilderGetReque_06016c5c and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GraphMicrosoftStoreForBusinessAppRequestBuilderGetQuery_1bedf58c|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphMicrosoftStoreForBusinessAppRequestBuilderGetQuery_1bedf58c $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GraphMicrosoftStoreForBusinessAppRequestBuilderGetQuery_1bedf58c.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphMicrosoftStoreForBusinessAppRequestBuilderGetQuery_1bedf58c
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GraphMicrosoftStoreForBusinessAppRequestBuilderGetQuery_1bedf58c {
        return new GraphMicrosoftStoreForBusinessAppRequestBuilderGetQuery_1bedf58c($expand, $select);
    }

}
