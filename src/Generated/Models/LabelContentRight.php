<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LabelContentRight extends Entity implements Parsable 
{
    /**
     * Instantiates a new LabelContentRight and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LabelContentRight
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LabelContentRight {
        return new LabelContentRight();
    }

    /**
     * Gets the cid property value. The content identifier.
     * @return string|null
    */
    public function getCid(): ?string {
        $val = $this->getBackingStore()->get('cid');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cid'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cid' => fn(ParseNode $n) => $o->setCid($n->getStringValue()),
            'format' => fn(ParseNode $n) => $o->setFormat($n->getStringValue()),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getObjectValue([SensitivityLabel::class, 'createFromDiscriminatorValue'])),
            'rights' => fn(ParseNode $n) => $o->setRights($n->getEnumValue(UsageRights::class)),
        ]);
    }

    /**
     * Gets the format property value. The content format.
     * @return string|null
    */
    public function getFormat(): ?string {
        $val = $this->getBackingStore()->get('format');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'format'");
    }

    /**
     * Gets the label property value. The label property
     * @return SensitivityLabel|null
    */
    public function getLabel(): ?SensitivityLabel {
        $val = $this->getBackingStore()->get('label');
        if (is_null($val) || $val instanceof SensitivityLabel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'label'");
    }

    /**
     * Gets the rights property value. The rights property
     * @return UsageRights|null
    */
    public function getRights(): ?UsageRights {
        $val = $this->getBackingStore()->get('rights');
        if (is_null($val) || $val instanceof UsageRights) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rights'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('cid', $this->getCid());
        $writer->writeStringValue('format', $this->getFormat());
        $writer->writeObjectValue('label', $this->getLabel());
        $writer->writeEnumValue('rights', $this->getRights());
    }

    /**
     * Sets the cid property value. The content identifier.
     * @param string|null $value Value to set for the cid property.
    */
    public function setCid(?string $value): void {
        $this->getBackingStore()->set('cid', $value);
    }

    /**
     * Sets the format property value. The content format.
     * @param string|null $value Value to set for the format property.
    */
    public function setFormat(?string $value): void {
        $this->getBackingStore()->set('format', $value);
    }

    /**
     * Sets the label property value. The label property
     * @param SensitivityLabel|null $value Value to set for the label property.
    */
    public function setLabel(?SensitivityLabel $value): void {
        $this->getBackingStore()->set('label', $value);
    }

    /**
     * Sets the rights property value. The rights property
     * @param UsageRights|null $value Value to set for the rights property.
    */
    public function setRights(?UsageRights $value): void {
        $this->getBackingStore()->set('rights', $value);
    }

}
