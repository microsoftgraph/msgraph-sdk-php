<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChecklistItem extends Entity implements Parsable 
{
    /**
     * Instantiates a new ChecklistItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChecklistItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChecklistItem {
        return new ChecklistItem();
    }

    /**
     * Gets the checkedDateTime property value. The date and time when the checklistItem was finished.
     * @return DateTime|null
    */
    public function getCheckedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('checkedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'checkedDateTime'");
    }

    /**
     * Gets the createdDateTime property value. The date and time when the checklistItem was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the displayName property value. Indicates the title of the checklistItem.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'checkedDateTime' => fn(ParseNode $n) => $o->setCheckedDateTime($n->getDateTimeValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isChecked' => fn(ParseNode $n) => $o->setIsChecked($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isChecked property value. State that indicates whether the item is checked off or not.
     * @return bool|null
    */
    public function getIsChecked(): ?bool {
        $val = $this->getBackingStore()->get('isChecked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isChecked'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('checkedDateTime', $this->getCheckedDateTime());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isChecked', $this->getIsChecked());
    }

    /**
     * Sets the checkedDateTime property value. The date and time when the checklistItem was finished.
     * @param DateTime|null $value Value to set for the checkedDateTime property.
    */
    public function setCheckedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('checkedDateTime', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the checklistItem was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayName property value. Indicates the title of the checklistItem.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isChecked property value. State that indicates whether the item is checked off or not.
     * @param bool|null $value Value to set for the isChecked property.
    */
    public function setIsChecked(?bool $value): void {
        $this->getBackingStore()->set('isChecked', $value);
    }

}
