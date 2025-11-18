<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceRegistrationPolicy extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceRegistrationPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceRegistrationPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceRegistrationPolicy {
        return new DeviceRegistrationPolicy();
    }

    /**
     * Gets the azureADJoin property value. The azureADJoin property
     * @return AzureADJoinPolicy|null
    */
    public function getAzureADJoin(): ?AzureADJoinPolicy {
        $val = $this->getBackingStore()->get('azureADJoin');
        if (is_null($val) || $val instanceof AzureADJoinPolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureADJoin'");
    }

    /**
     * Gets the azureADRegistration property value. The azureADRegistration property
     * @return AzureADRegistrationPolicy|null
    */
    public function getAzureADRegistration(): ?AzureADRegistrationPolicy {
        $val = $this->getBackingStore()->get('azureADRegistration');
        if (is_null($val) || $val instanceof AzureADRegistrationPolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureADRegistration'");
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The displayName property
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
            'azureADJoin' => fn(ParseNode $n) => $o->setAzureADJoin($n->getObjectValue([AzureADJoinPolicy::class, 'createFromDiscriminatorValue'])),
            'azureADRegistration' => fn(ParseNode $n) => $o->setAzureADRegistration($n->getObjectValue([AzureADRegistrationPolicy::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'localAdminPassword' => fn(ParseNode $n) => $o->setLocalAdminPassword($n->getObjectValue([LocalAdminPasswordSettings::class, 'createFromDiscriminatorValue'])),
            'multiFactorAuthConfiguration' => fn(ParseNode $n) => $o->setMultiFactorAuthConfiguration($n->getEnumValue(MultiFactorAuthConfiguration::class)),
            'userDeviceQuota' => fn(ParseNode $n) => $o->setUserDeviceQuota($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the localAdminPassword property value. The localAdminPassword property
     * @return LocalAdminPasswordSettings|null
    */
    public function getLocalAdminPassword(): ?LocalAdminPasswordSettings {
        $val = $this->getBackingStore()->get('localAdminPassword');
        if (is_null($val) || $val instanceof LocalAdminPasswordSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localAdminPassword'");
    }

    /**
     * Gets the multiFactorAuthConfiguration property value. The multiFactorAuthConfiguration property
     * @return MultiFactorAuthConfiguration|null
    */
    public function getMultiFactorAuthConfiguration(): ?MultiFactorAuthConfiguration {
        $val = $this->getBackingStore()->get('multiFactorAuthConfiguration');
        if (is_null($val) || $val instanceof MultiFactorAuthConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'multiFactorAuthConfiguration'");
    }

    /**
     * Gets the userDeviceQuota property value. The userDeviceQuota property
     * @return int|null
    */
    public function getUserDeviceQuota(): ?int {
        $val = $this->getBackingStore()->get('userDeviceQuota');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userDeviceQuota'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('azureADJoin', $this->getAzureADJoin());
        $writer->writeObjectValue('azureADRegistration', $this->getAzureADRegistration());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('localAdminPassword', $this->getLocalAdminPassword());
        $writer->writeEnumValue('multiFactorAuthConfiguration', $this->getMultiFactorAuthConfiguration());
        $writer->writeIntegerValue('userDeviceQuota', $this->getUserDeviceQuota());
    }

    /**
     * Sets the azureADJoin property value. The azureADJoin property
     * @param AzureADJoinPolicy|null $value Value to set for the azureADJoin property.
    */
    public function setAzureADJoin(?AzureADJoinPolicy $value): void {
        $this->getBackingStore()->set('azureADJoin', $value);
    }

    /**
     * Sets the azureADRegistration property value. The azureADRegistration property
     * @param AzureADRegistrationPolicy|null $value Value to set for the azureADRegistration property.
    */
    public function setAzureADRegistration(?AzureADRegistrationPolicy $value): void {
        $this->getBackingStore()->set('azureADRegistration', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the localAdminPassword property value. The localAdminPassword property
     * @param LocalAdminPasswordSettings|null $value Value to set for the localAdminPassword property.
    */
    public function setLocalAdminPassword(?LocalAdminPasswordSettings $value): void {
        $this->getBackingStore()->set('localAdminPassword', $value);
    }

    /**
     * Sets the multiFactorAuthConfiguration property value. The multiFactorAuthConfiguration property
     * @param MultiFactorAuthConfiguration|null $value Value to set for the multiFactorAuthConfiguration property.
    */
    public function setMultiFactorAuthConfiguration(?MultiFactorAuthConfiguration $value): void {
        $this->getBackingStore()->set('multiFactorAuthConfiguration', $value);
    }

    /**
     * Sets the userDeviceQuota property value. The userDeviceQuota property
     * @param int|null $value Value to set for the userDeviceQuota property.
    */
    public function setUserDeviceQuota(?int $value): void {
        $this->getBackingStore()->set('userDeviceQuota', $value);
    }

}
