<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class HostLogonSessionEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new HostLogonSessionEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.hostLogonSessionEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HostLogonSessionEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HostLogonSessionEvidence {
        return new HostLogonSessionEvidence();
    }

    /**
     * Gets the account property value. The account property
     * @return UserEvidence|null
    */
    public function getAccount(): ?UserEvidence {
        $val = $this->getBackingStore()->get('account');
        if (is_null($val) || $val instanceof UserEvidence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'account'");
    }

    /**
     * Gets the endUtcDateTime property value. The endUtcDateTime property
     * @return DateTime|null
    */
    public function getEndUtcDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('endUtcDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endUtcDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'account' => fn(ParseNode $n) => $o->setAccount($n->getObjectValue([UserEvidence::class, 'createFromDiscriminatorValue'])),
            'endUtcDateTime' => fn(ParseNode $n) => $o->setEndUtcDateTime($n->getDateTimeValue()),
            'host' => fn(ParseNode $n) => $o->setHost($n->getObjectValue([DeviceEvidence::class, 'createFromDiscriminatorValue'])),
            'sessionId' => fn(ParseNode $n) => $o->setSessionId($n->getStringValue()),
            'startUtcDateTime' => fn(ParseNode $n) => $o->setStartUtcDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the host property value. The host property
     * @return DeviceEvidence|null
    */
    public function getHost(): ?DeviceEvidence {
        $val = $this->getBackingStore()->get('host');
        if (is_null($val) || $val instanceof DeviceEvidence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'host'");
    }

    /**
     * Gets the sessionId property value. The sessionId property
     * @return string|null
    */
    public function getSessionId(): ?string {
        $val = $this->getBackingStore()->get('sessionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sessionId'");
    }

    /**
     * Gets the startUtcDateTime property value. The startUtcDateTime property
     * @return DateTime|null
    */
    public function getStartUtcDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startUtcDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startUtcDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('account', $this->getAccount());
        $writer->writeDateTimeValue('endUtcDateTime', $this->getEndUtcDateTime());
        $writer->writeObjectValue('host', $this->getHost());
        $writer->writeStringValue('sessionId', $this->getSessionId());
        $writer->writeDateTimeValue('startUtcDateTime', $this->getStartUtcDateTime());
    }

    /**
     * Sets the account property value. The account property
     * @param UserEvidence|null $value Value to set for the account property.
    */
    public function setAccount(?UserEvidence $value): void {
        $this->getBackingStore()->set('account', $value);
    }

    /**
     * Sets the endUtcDateTime property value. The endUtcDateTime property
     * @param DateTime|null $value Value to set for the endUtcDateTime property.
    */
    public function setEndUtcDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endUtcDateTime', $value);
    }

    /**
     * Sets the host property value. The host property
     * @param DeviceEvidence|null $value Value to set for the host property.
    */
    public function setHost(?DeviceEvidence $value): void {
        $this->getBackingStore()->set('host', $value);
    }

    /**
     * Sets the sessionId property value. The sessionId property
     * @param string|null $value Value to set for the sessionId property.
    */
    public function setSessionId(?string $value): void {
        $this->getBackingStore()->set('sessionId', $value);
    }

    /**
     * Sets the startUtcDateTime property value. The startUtcDateTime property
     * @param DateTime|null $value Value to set for the startUtcDateTime property.
    */
    public function setStartUtcDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startUtcDateTime', $value);
    }

}
