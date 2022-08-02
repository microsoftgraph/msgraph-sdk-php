<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChecklistItem extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $checkedDateTime The date and time when the checklistItem was finished.
    */
    private ?DateTime $checkedDateTime = null;
    
    /**
     * @var DateTime|null $createdDateTime The date and time when the checklistItem was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $displayName Field indicating the title of checklistItem.
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $isChecked State indicating whether the item is checked off or not.
    */
    private ?bool $isChecked = null;
    
    /**
     * Instantiates a new checklistItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.checklistItem');
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
        return $this->checkedDateTime;
    }

    /**
     * Gets the createdDateTime property value. The date and time when the checklistItem was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the displayName property value. Field indicating the title of checklistItem.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'checkedDateTime' => function (ParseNode $n) use ($o) { $o->setCheckedDateTime($n->getDateTimeValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'isChecked' => function (ParseNode $n) use ($o) { $o->setIsChecked($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the isChecked property value. State indicating whether the item is checked off or not.
     * @return bool|null
    */
    public function getIsChecked(): ?bool {
        return $this->isChecked;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('checkedDateTime', $this->checkedDateTime);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('isChecked', $this->isChecked);
    }

    /**
     * Sets the checkedDateTime property value. The date and time when the checklistItem was finished.
     *  @param DateTime|null $value Value to set for the checkedDateTime property.
    */
    public function setCheckedDateTime(?DateTime $value ): void {
        $this->checkedDateTime = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time when the checklistItem was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the displayName property value. Field indicating the title of checklistItem.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the isChecked property value. State indicating whether the item is checked off or not.
     *  @param bool|null $value Value to set for the isChecked property.
    */
    public function setIsChecked(?bool $value ): void {
        $this->isChecked = $value;
    }

}
