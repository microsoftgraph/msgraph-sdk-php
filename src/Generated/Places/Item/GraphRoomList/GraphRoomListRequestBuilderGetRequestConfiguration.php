<?php

namespace Microsoft\\Graph\\Generated\Places\Item\GraphRoomList;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class GraphRoomListRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var GraphRoomListRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?GraphRoomListRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new GraphRoomListRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param GraphRoomListRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?GraphRoomListRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new GraphRoomListRequestBuilderGetQueryParameters.
     * @param array<string>|null $expand Expand related entities
     * @param array<string>|null $select Select properties to be returned
     * @return GraphRoomListRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?array $expand = null, ?array $select = null): GraphRoomListRequestBuilderGetQueryParameters {
        return new GraphRoomListRequestBuilderGetQueryParameters($expand, $select);
    }

}
