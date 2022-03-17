<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsHelloForBusinessAuthenticationMethod extends AuthenticationMethod 
{
    /** @var DateTime|null $createdDateTime The date and time that this Windows Hello for Business key was registered. */
    private ?DateTime $createdDateTime = null;
    
    /** @var Device|null $device The registered device on which this Windows Hello for Business key resides. Supports $expand. When you get a user's Windows Hello for Business registration information, this property is returned only on a single GET and when you specify ?$expand. For example, GET /users/admin@contoso.com/authentication/windowsHelloForBusinessMethods/_jpuR-TGZtk6aQCLF3BQjA2?$expand=device. */
    private ?Device $device = null;
    
    /** @var string|null $displayName The name of the device on which Windows Hello for Business is registered */
    private ?string $displayName = null;
    
    /** @var AuthenticationMethodKeyStrength|null $keyStrength Key strength of this Windows Hello for Business key. Possible values are: normal, weak, unknown. */
    private ?AuthenticationMethodKeyStrength $keyStrength = null;
    
    /**
     * Instantiates a new windowsHelloForBusinessAuthenticationMethod and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsHelloForBusinessAuthenticationMethod
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): WindowsHelloForBusinessAuthenticationMethod {
        return new WindowsHelloForBusinessAuthenticationMethod();
    }

    /**
     * Gets the createdDateTime property value. The date and time that this Windows Hello for Business key was registered.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the device property value. The registered device on which this Windows Hello for Business key resides. Supports $expand. When you get a user's Windows Hello for Business registration information, this property is returned only on a single GET and when you specify ?$expand. For example, GET /users/admin@contoso.com/authentication/windowsHelloForBusinessMethods/_jpuR-TGZtk6aQCLF3BQjA2?$expand=device.
     * @return Device|null
    */
    public function getDevice(): ?Device {
        return $this->device;
    }

    /**
     * Gets the displayName property value. The name of the device on which Windows Hello for Business is registered
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
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'device' => function (self $o, ParseNode $n) { $o->setDevice($n->getObjectValue(Device::class)); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'keyStrength' => function (self $o, ParseNode $n) { $o->setKeyStrength($n->getEnumValue(AuthenticationMethodKeyStrength::class)); },
        ]);
    }

    /**
     * Gets the keyStrength property value. Key strength of this Windows Hello for Business key. Possible values are: normal, weak, unknown.
     * @return AuthenticationMethodKeyStrength|null
    */
    public function getKeyStrength(): ?AuthenticationMethodKeyStrength {
        return $this->keyStrength;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('device', $this->device);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('keyStrength', $this->keyStrength);
    }

    /**
     * Sets the createdDateTime property value. The date and time that this Windows Hello for Business key was registered.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the device property value. The registered device on which this Windows Hello for Business key resides. Supports $expand. When you get a user's Windows Hello for Business registration information, this property is returned only on a single GET and when you specify ?$expand. For example, GET /users/admin@contoso.com/authentication/windowsHelloForBusinessMethods/_jpuR-TGZtk6aQCLF3BQjA2?$expand=device.
     *  @param Device|null $value Value to set for the device property.
    */
    public function setDevice(?Device $value ): void {
        $this->device = $value;
    }

    /**
     * Sets the displayName property value. The name of the device on which Windows Hello for Business is registered
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the keyStrength property value. Key strength of this Windows Hello for Business key. Possible values are: normal, weak, unknown.
     *  @param AuthenticationMethodKeyStrength|null $value Value to set for the keyStrength property.
    */
    public function setKeyStrength(?AuthenticationMethodKeyStrength $value ): void {
        $this->keyStrength = $value;
    }

}
