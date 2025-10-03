<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RestorePoint extends Entity implements Parsable 
{
    /**
     * Instantiates a new RestorePoint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RestorePoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RestorePoint {
        return new RestorePoint();
    }

    /**
     * Gets the expirationDateTime property value. Expiration date time of the restore point.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'protectionDateTime' => fn(ParseNode $n) => $o->setProtectionDateTime($n->getDateTimeValue()),
            'protectionUnit' => fn(ParseNode $n) => $o->setProtectionUnit($n->getObjectValue([ProtectionUnitBase::class, 'createFromDiscriminatorValue'])),
            'tags' => fn(ParseNode $n) => $o->setTags($n->getEnumValue(RestorePointTags::class)),
        ]);
    }

    /**
     * Gets the protectionDateTime property value. Date time when the restore point was created.
     * @return DateTime|null
    */
    public function getProtectionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('protectionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protectionDateTime'");
    }

    /**
     * Gets the protectionUnit property value. The site, drive, or mailbox units that are protected under a protection policy.
     * @return ProtectionUnitBase|null
    */
    public function getProtectionUnit(): ?ProtectionUnitBase {
        $val = $this->getBackingStore()->get('protectionUnit');
        if (is_null($val) || $val instanceof ProtectionUnitBase) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protectionUnit'");
    }

    /**
     * Gets the tags property value. The type of the restore point. The possible values are: none, fastRestore, unknownFutureValue.
     * @return RestorePointTags|null
    */
    public function getTags(): ?RestorePointTags {
        $val = $this->getBackingStore()->get('tags');
        if (is_null($val) || $val instanceof RestorePointTags) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tags'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeDateTimeValue('protectionDateTime', $this->getProtectionDateTime());
        $writer->writeObjectValue('protectionUnit', $this->getProtectionUnit());
        $writer->writeEnumValue('tags', $this->getTags());
    }

    /**
     * Sets the expirationDateTime property value. Expiration date time of the restore point.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the protectionDateTime property value. Date time when the restore point was created.
     * @param DateTime|null $value Value to set for the protectionDateTime property.
    */
    public function setProtectionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('protectionDateTime', $value);
    }

    /**
     * Sets the protectionUnit property value. The site, drive, or mailbox units that are protected under a protection policy.
     * @param ProtectionUnitBase|null $value Value to set for the protectionUnit property.
    */
    public function setProtectionUnit(?ProtectionUnitBase $value): void {
        $this->getBackingStore()->set('protectionUnit', $value);
    }

    /**
     * Sets the tags property value. The type of the restore point. The possible values are: none, fastRestore, unknownFutureValue.
     * @param RestorePointTags|null $value Value to set for the tags property.
    */
    public function setTags(?RestorePointTags $value): void {
        $this->getBackingStore()->set('tags', $value);
    }

}
