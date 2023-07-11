<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MicrosoftAuthenticatorAuthenticationMethod extends AuthenticationMethod implements Parsable 
{
    /**
     * Instantiates a new microsoftAuthenticatorAuthenticationMethod and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.microsoftAuthenticatorAuthenticationMethod');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftAuthenticatorAuthenticationMethod
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftAuthenticatorAuthenticationMethod {
        return new MicrosoftAuthenticatorAuthenticationMethod();
    }

    /**
     * Gets the createdDateTime property value. The date and time that this app was registered. This property is null if the device is not registered for passwordless Phone Sign-In.
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
     * Gets the device property value. The registered device on which Microsoft Authenticator resides. This property is null if the device is not registered for passwordless Phone Sign-In.
     * @return Device|null
    */
    public function getDevice(): ?Device {
        $val = $this->getBackingStore()->get('device');
        if (is_null($val) || $val instanceof Device) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'device'");
    }

    /**
     * Gets the deviceTag property value. Tags containing app metadata.
     * @return string|null
    */
    public function getDeviceTag(): ?string {
        $val = $this->getBackingStore()->get('deviceTag');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceTag'");
    }

    /**
     * Gets the displayName property value. The name of the device on which this app is registered.
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
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'device' => fn(ParseNode $n) => $o->setDevice($n->getObjectValue([Device::class, 'createFromDiscriminatorValue'])),
            'deviceTag' => fn(ParseNode $n) => $o->setDeviceTag($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'phoneAppVersion' => fn(ParseNode $n) => $o->setPhoneAppVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the phoneAppVersion property value. Numerical version of this instance of the Authenticator app.
     * @return string|null
    */
    public function getPhoneAppVersion(): ?string {
        $val = $this->getBackingStore()->get('phoneAppVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'phoneAppVersion'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('device', $this->getDevice());
        $writer->writeStringValue('deviceTag', $this->getDeviceTag());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('phoneAppVersion', $this->getPhoneAppVersion());
    }

    /**
     * Sets the createdDateTime property value. The date and time that this app was registered. This property is null if the device is not registered for passwordless Phone Sign-In.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the device property value. The registered device on which Microsoft Authenticator resides. This property is null if the device is not registered for passwordless Phone Sign-In.
     * @param Device|null $value Value to set for the device property.
    */
    public function setDevice(?Device $value): void {
        $this->getBackingStore()->set('device', $value);
    }

    /**
     * Sets the deviceTag property value. Tags containing app metadata.
     * @param string|null $value Value to set for the deviceTag property.
    */
    public function setDeviceTag(?string $value): void {
        $this->getBackingStore()->set('deviceTag', $value);
    }

    /**
     * Sets the displayName property value. The name of the device on which this app is registered.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the phoneAppVersion property value. Numerical version of this instance of the Authenticator app.
     * @param string|null $value Value to set for the phoneAppVersion property.
    */
    public function setPhoneAppVersion(?string $value): void {
        $this->getBackingStore()->set('phoneAppVersion', $value);
    }

}
