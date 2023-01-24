<?php

namespace Microsoft\Graph\Generated\EscapedPrint\TaskDefinitions;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class TaskDefinitionsRequestBuilderGetRequestConfiguration 
{
    /**
     * @var array<string, array<string>|string>|null $headers Request headers
    */
    public ?array $headers = null;
    
    /**
     * @var array<string, RequestOption>|null $options Request options
    */
    public ?array $options = null;
    
    /**
     * @var TaskDefinitionsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?TaskDefinitionsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
