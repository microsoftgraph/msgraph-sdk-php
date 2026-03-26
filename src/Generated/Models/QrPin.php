<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class QrPin extends Entity implements Parsable 
{
    /**
     * Instantiates a new QrPin and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return QrPin
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): QrPin {
        return new QrPin();
    }

    /**
     * Gets the code property value. The PIN code value. This property is only returned at the time of creating or resetting the PIN. For GET operations, this property returns null. The PIN must be between 8-20 digits.
     * @return string|null
    */
    public function getCode(): ?string {
        $val = $this->getBackingStore()->get('code');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'code'");
    }

    /**
     * Gets the createdDateTime property value. The date and time when the PIN was created. Read-only.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'code' => fn(ParseNode $n) => $o->setCode($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'forceChangePinNextSignIn' => fn(ParseNode $n) => $o->setForceChangePinNextSignIn($n->getBooleanValue()),
            'updatedDateTime' => fn(ParseNode $n) => $o->setUpdatedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the forceChangePinNextSignIn property value. Indicates whether the user must change the PIN on their next sign-in. This is true when an admin creates or resets the PIN, and false after the user changes it.
     * @return bool|null
    */
    public function getForceChangePinNextSignIn(): ?bool {
        $val = $this->getBackingStore()->get('forceChangePinNextSignIn');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'forceChangePinNextSignIn'");
    }

    /**
     * Gets the updatedDateTime property value. The date and time when the PIN was last updated. Read-only.
     * @return DateTime|null
    */
    public function getUpdatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('updatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'updatedDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('code', $this->getCode());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeBooleanValue('forceChangePinNextSignIn', $this->getForceChangePinNextSignIn());
        $writer->writeDateTimeValue('updatedDateTime', $this->getUpdatedDateTime());
    }

    /**
     * Sets the code property value. The PIN code value. This property is only returned at the time of creating or resetting the PIN. For GET operations, this property returns null. The PIN must be between 8-20 digits.
     * @param string|null $value Value to set for the code property.
    */
    public function setCode(?string $value): void {
        $this->getBackingStore()->set('code', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the PIN was created. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the forceChangePinNextSignIn property value. Indicates whether the user must change the PIN on their next sign-in. This is true when an admin creates or resets the PIN, and false after the user changes it.
     * @param bool|null $value Value to set for the forceChangePinNextSignIn property.
    */
    public function setForceChangePinNextSignIn(?bool $value): void {
        $this->getBackingStore()->set('forceChangePinNextSignIn', $value);
    }

    /**
     * Sets the updatedDateTime property value. The date and time when the PIN was last updated. Read-only.
     * @param DateTime|null $value Value to set for the updatedDateTime property.
    */
    public function setUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('updatedDateTime', $value);
    }

}
