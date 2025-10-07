<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudLogonSessionEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new CloudLogonSessionEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.cloudLogonSessionEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudLogonSessionEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudLogonSessionEvidence {
        return new CloudLogonSessionEvidence();
    }

    /**
     * Gets the account property value. The account associated with the sign-in session.
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
     * Gets the browser property value. The browser that is used for the sign-in, if known.
     * @return string|null
    */
    public function getBrowser(): ?string {
        $val = $this->getBackingStore()->get('browser');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'browser'");
    }

    /**
     * Gets the deviceName property value. The friendly name of the device, if known.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        $val = $this->getBackingStore()->get('deviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'account' => fn(ParseNode $n) => $o->setAccount($n->getObjectValue([UserEvidence::class, 'createFromDiscriminatorValue'])),
            'browser' => fn(ParseNode $n) => $o->setBrowser($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'operatingSystem' => fn(ParseNode $n) => $o->setOperatingSystem($n->getStringValue()),
            'previousLogonDateTime' => fn(ParseNode $n) => $o->setPreviousLogonDateTime($n->getDateTimeValue()),
            'protocol' => fn(ParseNode $n) => $o->setProtocol($n->getStringValue()),
            'sessionId' => fn(ParseNode $n) => $o->setSessionId($n->getStringValue()),
            'startUtcDateTime' => fn(ParseNode $n) => $o->setStartUtcDateTime($n->getDateTimeValue()),
            'userAgent' => fn(ParseNode $n) => $o->setUserAgent($n->getStringValue()),
        ]);
    }

    /**
     * Gets the operatingSystem property value. The operating system that the device is running, if known.
     * @return string|null
    */
    public function getOperatingSystem(): ?string {
        $val = $this->getBackingStore()->get('operatingSystem');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operatingSystem'");
    }

    /**
     * Gets the previousLogonDateTime property value. The previous sign-in time for this account, if known.
     * @return DateTime|null
    */
    public function getPreviousLogonDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('previousLogonDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'previousLogonDateTime'");
    }

    /**
     * Gets the protocol property value. The authentication protocol that is used in this session, if known.
     * @return string|null
    */
    public function getProtocol(): ?string {
        $val = $this->getBackingStore()->get('protocol');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'protocol'");
    }

    /**
     * Gets the sessionId property value. The session ID for the account reported in the alert.
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
     * Gets the startUtcDateTime property value. The session start time, if known.
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
     * Gets the userAgent property value. The user agent that is used for the sign-in, if known.
     * @return string|null
    */
    public function getUserAgent(): ?string {
        $val = $this->getBackingStore()->get('userAgent');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userAgent'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('account', $this->getAccount());
        $writer->writeStringValue('browser', $this->getBrowser());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeStringValue('operatingSystem', $this->getOperatingSystem());
        $writer->writeDateTimeValue('previousLogonDateTime', $this->getPreviousLogonDateTime());
        $writer->writeStringValue('protocol', $this->getProtocol());
        $writer->writeStringValue('sessionId', $this->getSessionId());
        $writer->writeDateTimeValue('startUtcDateTime', $this->getStartUtcDateTime());
        $writer->writeStringValue('userAgent', $this->getUserAgent());
    }

    /**
     * Sets the account property value. The account associated with the sign-in session.
     * @param UserEvidence|null $value Value to set for the account property.
    */
    public function setAccount(?UserEvidence $value): void {
        $this->getBackingStore()->set('account', $value);
    }

    /**
     * Sets the browser property value. The browser that is used for the sign-in, if known.
     * @param string|null $value Value to set for the browser property.
    */
    public function setBrowser(?string $value): void {
        $this->getBackingStore()->set('browser', $value);
    }

    /**
     * Sets the deviceName property value. The friendly name of the device, if known.
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the operatingSystem property value. The operating system that the device is running, if known.
     * @param string|null $value Value to set for the operatingSystem property.
    */
    public function setOperatingSystem(?string $value): void {
        $this->getBackingStore()->set('operatingSystem', $value);
    }

    /**
     * Sets the previousLogonDateTime property value. The previous sign-in time for this account, if known.
     * @param DateTime|null $value Value to set for the previousLogonDateTime property.
    */
    public function setPreviousLogonDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('previousLogonDateTime', $value);
    }

    /**
     * Sets the protocol property value. The authentication protocol that is used in this session, if known.
     * @param string|null $value Value to set for the protocol property.
    */
    public function setProtocol(?string $value): void {
        $this->getBackingStore()->set('protocol', $value);
    }

    /**
     * Sets the sessionId property value. The session ID for the account reported in the alert.
     * @param string|null $value Value to set for the sessionId property.
    */
    public function setSessionId(?string $value): void {
        $this->getBackingStore()->set('sessionId', $value);
    }

    /**
     * Sets the startUtcDateTime property value. The session start time, if known.
     * @param DateTime|null $value Value to set for the startUtcDateTime property.
    */
    public function setStartUtcDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startUtcDateTime', $value);
    }

    /**
     * Sets the userAgent property value. The user agent that is used for the sign-in, if known.
     * @param string|null $value Value to set for the userAgent property.
    */
    public function setUserAgent(?string $value): void {
        $this->getBackingStore()->set('userAgent', $value);
    }

}
