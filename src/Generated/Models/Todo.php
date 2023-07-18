<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Todo extends Entity implements Parsable 
{
    /**
     * Instantiates a new todo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'lists' => fn(ParseNode $n) => $o->setLists($n->getCollectionOfObjectValues([TodoTaskList::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lists property value. The task lists in the users mailbox.
     * @return array<TodoTaskList>|null
    */
    public function getLists(): ?array {
        $val = $this->getBackingStore()->get('lists');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TodoTaskList::class);
            /** @var array<TodoTaskList>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lists'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('lists', $this->getLists());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the lists property value. The task lists in the users mailbox.
     * @param array<TodoTaskList>|null $value Value to set for the lists property.
    */
    public function setLists(?array $value): void {
        $this->getBackingStore()->set('lists', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
