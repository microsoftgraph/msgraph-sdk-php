<?php

namespace Microsoft\Graph\Generated\Users\Item\MailFolders\Item\ChildFolders\Item\MessageRules\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

/**
 * The collection of rules that apply to the user's Inbox folder.
*/
class MessageRuleItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
    /**
     * Instantiates a new MessageRuleItemRequestBuilderGetQueryParameters and sets the default values.
     * @param array<string>|null $select Select properties to be returned
    */
    public function __construct(?array $select = null) {
        $this->select = $select;
    }

}
