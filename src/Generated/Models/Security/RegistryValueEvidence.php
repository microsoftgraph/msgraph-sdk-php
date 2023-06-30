<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RegistryValueEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new RegistryValueEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RegistryValueEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RegistryValueEvidence {
        return new RegistryValueEvidence();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'mdeDeviceId' => fn(ParseNode $n) => $o->setMdeDeviceId($n->getStringValue()),
            'registryHive' => fn(ParseNode $n) => $o->setRegistryHive($n->getStringValue()),
            'registryKey' => fn(ParseNode $n) => $o->setRegistryKey($n->getStringValue()),
            'registryValue' => fn(ParseNode $n) => $o->setRegistryValue($n->getStringValue()),
            'registryValueName' => fn(ParseNode $n) => $o->setRegistryValueName($n->getStringValue()),
            'registryValueType' => fn(ParseNode $n) => $o->setRegistryValueType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the mdeDeviceId property value. The mdeDeviceId property
     * @return string|null
    */
    public function getMdeDeviceId(): ?string {
        $val = $this->getBackingStore()->get('mdeDeviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mdeDeviceId'");
    }

    /**
     * Gets the registryHive property value. Registry hive of the key that the recorded action was applied to.
     * @return string|null
    */
    public function getRegistryHive(): ?string {
        $val = $this->getBackingStore()->get('registryHive');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registryHive'");
    }

    /**
     * Gets the registryKey property value. Registry key that the recorded action was applied to.
     * @return string|null
    */
    public function getRegistryKey(): ?string {
        $val = $this->getBackingStore()->get('registryKey');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registryKey'");
    }

    /**
     * Gets the registryValue property value. Data of the registry value that the recorded action was applied to.
     * @return string|null
    */
    public function getRegistryValue(): ?string {
        $val = $this->getBackingStore()->get('registryValue');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registryValue'");
    }

    /**
     * Gets the registryValueName property value. Name of the registry value that the recorded action was applied to.
     * @return string|null
    */
    public function getRegistryValueName(): ?string {
        $val = $this->getBackingStore()->get('registryValueName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registryValueName'");
    }

    /**
     * Gets the registryValueType property value. Data type, such as binary or string, of the registry value that the recorded action was applied to.
     * @return string|null
    */
    public function getRegistryValueType(): ?string {
        $val = $this->getBackingStore()->get('registryValueType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registryValueType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('mdeDeviceId', $this->getMdeDeviceId());
        $writer->writeStringValue('registryHive', $this->getRegistryHive());
        $writer->writeStringValue('registryKey', $this->getRegistryKey());
        $writer->writeStringValue('registryValue', $this->getRegistryValue());
        $writer->writeStringValue('registryValueName', $this->getRegistryValueName());
        $writer->writeStringValue('registryValueType', $this->getRegistryValueType());
    }

    /**
     * Sets the mdeDeviceId property value. The mdeDeviceId property
     * @param string|null $value Value to set for the mdeDeviceId property.
    */
    public function setMdeDeviceId(?string $value): void {
        $this->getBackingStore()->set('mdeDeviceId', $value);
    }

    /**
     * Sets the registryHive property value. Registry hive of the key that the recorded action was applied to.
     * @param string|null $value Value to set for the registryHive property.
    */
    public function setRegistryHive(?string $value): void {
        $this->getBackingStore()->set('registryHive', $value);
    }

    /**
     * Sets the registryKey property value. Registry key that the recorded action was applied to.
     * @param string|null $value Value to set for the registryKey property.
    */
    public function setRegistryKey(?string $value): void {
        $this->getBackingStore()->set('registryKey', $value);
    }

    /**
     * Sets the registryValue property value. Data of the registry value that the recorded action was applied to.
     * @param string|null $value Value to set for the registryValue property.
    */
    public function setRegistryValue(?string $value): void {
        $this->getBackingStore()->set('registryValue', $value);
    }

    /**
     * Sets the registryValueName property value. Name of the registry value that the recorded action was applied to.
     * @param string|null $value Value to set for the registryValueName property.
    */
    public function setRegistryValueName(?string $value): void {
        $this->getBackingStore()->set('registryValueName', $value);
    }

    /**
     * Sets the registryValueType property value. Data type, such as binary or string, of the registry value that the recorded action was applied to.
     * @param string|null $value Value to set for the registryValueType property.
    */
    public function setRegistryValueType(?string $value): void {
        $this->getBackingStore()->set('registryValueType', $value);
    }

}
