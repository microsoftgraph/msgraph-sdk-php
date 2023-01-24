<?php

namespace Microsoft\Graph\Generated\Users\Item\Chats\Item\LastMessagePreview;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * Preview of the last message sent in the chat. Null if no messages have been sent in the chat. Currently, only the list chats operation supports this property.
*/
class LastMessagePreviewRequestBuilderGetQueryParameters 
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
