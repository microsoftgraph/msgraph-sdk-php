<?php

namespace Microsoft\Graph\Generated\Communications\Calls\Item\Participants;

use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class ParticipantsRequestBuilderGetRequestConfiguration 
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
     * @var ParticipantsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?ParticipantsRequestBuilderGetQueryParameters $queryParameters = null;
    
}
