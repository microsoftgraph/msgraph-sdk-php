<?php

namespace Microsoft\Graph\Generated\Groups\Item\Team\Channels\Item\Messages\Item\HostedContents\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Content in a message hosted by Microsoft Teams - for example, images or code snippets.
*/
class ChatMessageHostedContentItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
