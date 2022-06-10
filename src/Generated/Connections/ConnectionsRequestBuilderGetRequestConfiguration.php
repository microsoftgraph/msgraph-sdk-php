<?php

namespace Microsoft\Graph\Connections;

class ConnectionsRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var ConnectionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ConnectionsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
