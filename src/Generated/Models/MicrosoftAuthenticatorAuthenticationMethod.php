<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MicrosoftAuthenticatorAuthenticationMethod extends AuthenticationMethod implements Parsable 
{
    /**
     * @var DateTime|null $createdDateTime The date and time that this app was registered. This property is null if the device is not registered for passwordless Phone Sign-In.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var Device|null $device The registered device on which Microsoft Authenticator resides. This property is null if the device is not registered for passwordless Phone Sign-In.
    */
    private ?Device $device = null;
    
    /**
     * @var string|null $deviceTag Tags containing app metadata.
    */
    private ?string $deviceTag = null;
    
    /**
     * @var string|null $displayName The name of the device on which this app is registered.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $phoneAppVersion Numerical version of this instance of the Authenticator app.
    */
    private ?string $phoneAppVersion = null;
    
    /**
     * Instantiates a new MicrosoftAuthenticatorAuthenticationMethod and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->createdDateTime;
    }

    /**
     * Gets the device property value. The registered device on which Microsoft Authenticator resides. This property is null if the device is not registered for passwordless Phone Sign-In.
     * @return Device|null
    */
    public function getDevice(): ?Device {
        return $this->device;
    }

    /**
     * Gets the deviceTag property value. Tags containing app metadata.
     * @return string|null
    */
    public function getDeviceTag(): ?string {
        return $this->deviceTag;
    }

    /**
     * Gets the displayName property value. The name of the device on which this app is registered.
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
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'device' => function (ParseNode $n) use ($o) { $o->setDevice($n->getObjectValue(array(Device::class, 'createFromDiscriminatorValue'))); },
            'deviceTag' => function (ParseNode $n) use ($o) { $o->setDeviceTag($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'phoneAppVersion' => function (ParseNode $n) use ($o) { $o->setPhoneAppVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the phoneAppVersion property value. Numerical version of this instance of the Authenticator app.
     * @return string|null
    */
    public function getPhoneAppVersion(): ?string {
        return $this->phoneAppVersion;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('device', $this->device);
        $writer->writeStringValue('deviceTag', $this->deviceTag);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('phoneAppVersion', $this->phoneAppVersion);
    }

    /**
     * Sets the createdDateTime property value. The date and time that this app was registered. This property is null if the device is not registered for passwordless Phone Sign-In.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the device property value. The registered device on which Microsoft Authenticator resides. This property is null if the device is not registered for passwordless Phone Sign-In.
     *  @param Device|null $value Value to set for the device property.
    */
    public function setDevice(?Device $value ): void {
        $this->device = $value;
    }

    /**
     * Sets the deviceTag property value. Tags containing app metadata.
     *  @param string|null $value Value to set for the deviceTag property.
    */
    public function setDeviceTag(?string $value ): void {
        $this->deviceTag = $value;
    }

    /**
     * Sets the displayName property value. The name of the device on which this app is registered.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the phoneAppVersion property value. Numerical version of this instance of the Authenticator app.
     *  @param string|null $value Value to set for the phoneAppVersion property.
    */
    public function setPhoneAppVersion(?string $value ): void {
        $this->phoneAppVersion = $value;
    }

}
