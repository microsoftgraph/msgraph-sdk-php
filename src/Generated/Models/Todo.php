<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Todo extends Entity implements Parsable 
{
    /**
     * Instantiates a new todo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.todo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Todo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Todo {
        return new Todo();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'lists' => fn(ParseNode $n) => $o->setLists($n->getCollectionOfObjectValues([TodoTaskList::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lists property value. The task lists in the users mailbox.
     * @return array<TodoTaskList>|null
    */
    public function getLists(): ?array {
        return $this->getBackingStore()->get('lists');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('lists', $this->getLists());
    }

    /**
     * Sets the lists property value. The task lists in the users mailbox.
     *  @param array<TodoTaskList>|null $value Value to set for the lists property.
    */
    public function setLists(?array $value): void {
        $this->getBackingStore()->set('lists', $value);
    }

}
