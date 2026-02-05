<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlatformCredentialAuthenticationMethod extends AuthenticationMethod implements Parsable 
{
    /**
     * Instantiates a new PlatformCredentialAuthenticationMethod and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.platformCredentialAuthenticationMethod');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlatformCredentialAuthenticationMethod
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlatformCredentialAuthenticationMethod {
        return new PlatformCredentialAuthenticationMethod();
    }

    /**
     * Gets the device property value. The registered device on which this Platform Credential resides. Supports $expand. When you get a user's Platform Credential registration information, this property is returned only on a single GET and when you specify ?$expand. For example, GET /users/admin@contoso.com/authentication/platformCredentialAuthenticationMethod/_jpuR-TGZtk6aQCLF3BQjA2?$expand=device.
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
     * Gets the displayName property value. The name of the device on which Platform Credential is registered.
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
            'device' => fn(ParseNode $n) => $o->setDevice($n->getObjectValue([Device::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'keyStrength' => fn(ParseNode $n) => $o->setKeyStrength($n->getEnumValue(AuthenticationMethodKeyStrength::class)),
            'platform' => fn(ParseNode $n) => $o->setPlatform($n->getEnumValue(AuthenticationMethodPlatform::class)),
        ]);
    }

    /**
     * Gets the keyStrength property value. Key strength of this Platform Credential key. The possible values are: normal, weak, unknown.
     * @return AuthenticationMethodKeyStrength|null
    */
    public function getKeyStrength(): ?AuthenticationMethodKeyStrength {
        $val = $this->getBackingStore()->get('keyStrength');
        if (is_null($val) || $val instanceof AuthenticationMethodKeyStrength) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyStrength'");
    }

    /**
     * Gets the platform property value. Platform on which this Platform Credential key is present. The possible values are: unknown, windows, macOS,iOS, android, linux.
     * @return AuthenticationMethodPlatform|null
    */
    public function getPlatform(): ?AuthenticationMethodPlatform {
        $val = $this->getBackingStore()->get('platform');
        if (is_null($val) || $val instanceof AuthenticationMethodPlatform) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'platform'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('device', $this->getDevice());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('keyStrength', $this->getKeyStrength());
        $writer->writeEnumValue('platform', $this->getPlatform());
    }

    /**
     * Sets the device property value. The registered device on which this Platform Credential resides. Supports $expand. When you get a user's Platform Credential registration information, this property is returned only on a single GET and when you specify ?$expand. For example, GET /users/admin@contoso.com/authentication/platformCredentialAuthenticationMethod/_jpuR-TGZtk6aQCLF3BQjA2?$expand=device.
     * @param Device|null $value Value to set for the device property.
    */
    public function setDevice(?Device $value): void {
        $this->getBackingStore()->set('device', $value);
    }

    /**
     * Sets the displayName property value. The name of the device on which Platform Credential is registered.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the keyStrength property value. Key strength of this Platform Credential key. The possible values are: normal, weak, unknown.
     * @param AuthenticationMethodKeyStrength|null $value Value to set for the keyStrength property.
    */
    public function setKeyStrength(?AuthenticationMethodKeyStrength $value): void {
        $this->getBackingStore()->set('keyStrength', $value);
    }

    /**
     * Sets the platform property value. Platform on which this Platform Credential key is present. The possible values are: unknown, windows, macOS,iOS, android, linux.
     * @param AuthenticationMethodPlatform|null $value Value to set for the platform property.
    */
    public function setPlatform(?AuthenticationMethodPlatform $value): void {
        $this->getBackingStore()->set('platform', $value);
    }

}
