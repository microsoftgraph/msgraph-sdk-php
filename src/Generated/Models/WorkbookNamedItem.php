<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookNamedItem extends Entity implements Parsable 
{
    /**
     * Instantiates a new WorkbookNamedItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookNamedItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookNamedItem {
        return new WorkbookNamedItem();
    }

    /**
     * Gets the comment property value. The comment associated with this name.
     * @return string|null
    */
    public function getComment(): ?string {
        $val = $this->getBackingStore()->get('comment');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'comment'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'comment' => fn(ParseNode $n) => $o->setComment($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'scope' => fn(ParseNode $n) => $o->setScope($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
            'visible' => fn(ParseNode $n) => $o->setVisible($n->getBooleanValue()),
            'worksheet' => fn(ParseNode $n) => $o->setWorksheet($n->getObjectValue([WorkbookWorksheet::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the name property value. The name of the object. Read-only.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the scope property value. Indicates whether the name is scoped to the workbook or to a specific worksheet. Read-only.
     * @return string|null
    */
    public function getScope(): ?string {
        $val = $this->getBackingStore()->get('scope');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scope'");
    }

    /**
     * Gets the type property value. The type of reference is associated with the name. The possible values are: String, Integer, Double, Boolean, Range. Read-only.
     * @return string|null
    */
    public function getType(): ?string {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Gets the visible property value. Indicates whether the object is visible.
     * @return bool|null
    */
    public function getVisible(): ?bool {
        $val = $this->getBackingStore()->get('visible');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'visible'");
    }

    /**
     * Gets the worksheet property value. Returns the worksheet to which the named item is scoped. Available only if the item is scoped to the worksheet. Read-only.
     * @return WorkbookWorksheet|null
    */
    public function getWorksheet(): ?WorkbookWorksheet {
        $val = $this->getBackingStore()->get('worksheet');
        if (is_null($val) || $val instanceof WorkbookWorksheet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'worksheet'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('comment', $this->getComment());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('scope', $this->getScope());
        $writer->writeStringValue('type', $this->getType());
        $writer->writeBooleanValue('visible', $this->getVisible());
        $writer->writeObjectValue('worksheet', $this->getWorksheet());
    }

    /**
     * Sets the comment property value. The comment associated with this name.
     * @param string|null $value Value to set for the comment property.
    */
    public function setComment(?string $value): void {
        $this->getBackingStore()->set('comment', $value);
    }

    /**
     * Sets the name property value. The name of the object. Read-only.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the scope property value. Indicates whether the name is scoped to the workbook or to a specific worksheet. Read-only.
     * @param string|null $value Value to set for the scope property.
    */
    public function setScope(?string $value): void {
        $this->getBackingStore()->set('scope', $value);
    }

    /**
     * Sets the type property value. The type of reference is associated with the name. The possible values are: String, Integer, Double, Boolean, Range. Read-only.
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

    /**
     * Sets the visible property value. Indicates whether the object is visible.
     * @param bool|null $value Value to set for the visible property.
    */
    public function setVisible(?bool $value): void {
        $this->getBackingStore()->set('visible', $value);
    }

    /**
     * Sets the worksheet property value. Returns the worksheet to which the named item is scoped. Available only if the item is scoped to the worksheet. Read-only.
     * @param WorkbookWorksheet|null $value Value to set for the worksheet property.
    */
    public function setWorksheet(?WorkbookWorksheet $value): void {
        $this->getBackingStore()->set('worksheet', $value);
    }

}
