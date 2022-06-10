<?php

namespace Microsoft\Graph\Me\MailFolders\Item\MessageRules\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class MessageRuleItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
