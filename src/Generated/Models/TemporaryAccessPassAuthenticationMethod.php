<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TemporaryAccessPassAuthenticationMethod extends AuthenticationMethod implements Parsable 
{
    /**
     * Instantiates a new TemporaryAccessPassAuthenticationMethod and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.temporaryAccessPassAuthenticationMethod');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TemporaryAccessPassAuthenticationMethod
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TemporaryAccessPassAuthenticationMethod {
        return new TemporaryAccessPassAuthenticationMethod();
    }

    /**
     * Gets the createdDateTime property value. The date and time when the Temporary Access Pass was created.
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
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'isUsable' => fn(ParseNode $n) => $o->setIsUsable($n->getBooleanValue()),
            'isUsableOnce' => fn(ParseNode $n) => $o->setIsUsableOnce($n->getBooleanValue()),
            'lifetimeInMinutes' => fn(ParseNode $n) => $o->setLifetimeInMinutes($n->getIntegerValue()),
            'methodUsabilityReason' => fn(ParseNode $n) => $o->setMethodUsabilityReason($n->getStringValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'temporaryAccessPass' => fn(ParseNode $n) => $o->setTemporaryAccessPass($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isUsable property value. The state of the authentication method that indicates whether it's currently usable by the user.
     * @return bool|null
    */
    public function getIsUsable(): ?bool {
        $val = $this->getBackingStore()->get('isUsable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isUsable'");
    }

    /**
     * Gets the isUsableOnce property value. Determines whether the pass is limited to a one-time use. If true, the pass can be used once; if false, the pass can be used multiple times within the Temporary Access Pass lifetime.
     * @return bool|null
    */
    public function getIsUsableOnce(): ?bool {
        $val = $this->getBackingStore()->get('isUsableOnce');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isUsableOnce'");
    }

    /**
     * Gets the lifetimeInMinutes property value. The lifetime of the Temporary Access Pass in minutes starting at startDateTime. Must be between 10 and 43200 inclusive (equivalent to 30 days).
     * @return int|null
    */
    public function getLifetimeInMinutes(): ?int {
        $val = $this->getBackingStore()->get('lifetimeInMinutes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lifetimeInMinutes'");
    }

    /**
     * Gets the methodUsabilityReason property value. Details about the usability state (isUsable). Reasons can include: EnabledByPolicy, DisabledByPolicy, Expired, NotYetValid, OneTimeUsed.
     * @return string|null
    */
    public function getMethodUsabilityReason(): ?string {
        $val = $this->getBackingStore()->get('methodUsabilityReason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'methodUsabilityReason'");
    }

    /**
     * Gets the startDateTime property value. The date and time when the Temporary Access Pass becomes available to use and when isUsable is true is enforced.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Gets the temporaryAccessPass property value. The Temporary Access Pass used to authenticate. Returned only on creation of a new temporaryAccessPassAuthenticationMethod object; Hidden in subsequent read operations and returned as null with GET.
     * @return string|null
    */
    public function getTemporaryAccessPass(): ?string {
        $val = $this->getBackingStore()->get('temporaryAccessPass');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'temporaryAccessPass'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeBooleanValue('isUsable', $this->getIsUsable());
        $writer->writeBooleanValue('isUsableOnce', $this->getIsUsableOnce());
        $writer->writeIntegerValue('lifetimeInMinutes', $this->getLifetimeInMinutes());
        $writer->writeStringValue('methodUsabilityReason', $this->getMethodUsabilityReason());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeStringValue('temporaryAccessPass', $this->getTemporaryAccessPass());
    }

    /**
     * Sets the createdDateTime property value. The date and time when the Temporary Access Pass was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the isUsable property value. The state of the authentication method that indicates whether it's currently usable by the user.
     * @param bool|null $value Value to set for the isUsable property.
    */
    public function setIsUsable(?bool $value): void {
        $this->getBackingStore()->set('isUsable', $value);
    }

    /**
     * Sets the isUsableOnce property value. Determines whether the pass is limited to a one-time use. If true, the pass can be used once; if false, the pass can be used multiple times within the Temporary Access Pass lifetime.
     * @param bool|null $value Value to set for the isUsableOnce property.
    */
    public function setIsUsableOnce(?bool $value): void {
        $this->getBackingStore()->set('isUsableOnce', $value);
    }

    /**
     * Sets the lifetimeInMinutes property value. The lifetime of the Temporary Access Pass in minutes starting at startDateTime. Must be between 10 and 43200 inclusive (equivalent to 30 days).
     * @param int|null $value Value to set for the lifetimeInMinutes property.
    */
    public function setLifetimeInMinutes(?int $value): void {
        $this->getBackingStore()->set('lifetimeInMinutes', $value);
    }

    /**
     * Sets the methodUsabilityReason property value. Details about the usability state (isUsable). Reasons can include: EnabledByPolicy, DisabledByPolicy, Expired, NotYetValid, OneTimeUsed.
     * @param string|null $value Value to set for the methodUsabilityReason property.
    */
    public function setMethodUsabilityReason(?string $value): void {
        $this->getBackingStore()->set('methodUsabilityReason', $value);
    }

    /**
     * Sets the startDateTime property value. The date and time when the Temporary Access Pass becomes available to use and when isUsable is true is enforced.
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the temporaryAccessPass property value. The Temporary Access Pass used to authenticate. Returned only on creation of a new temporaryAccessPassAuthenticationMethod object; Hidden in subsequent read operations and returned as null with GET.
     * @param string|null $value Value to set for the temporaryAccessPass property.
    */
    public function setTemporaryAccessPass(?string $value): void {
        $this->getBackingStore()->set('temporaryAccessPass', $value);
    }

}
