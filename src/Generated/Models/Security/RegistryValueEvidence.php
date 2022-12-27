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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'registryHive' => fn(ParseNode $n) => $o->setRegistryHive($n->getStringValue()),
            'registryKey' => fn(ParseNode $n) => $o->setRegistryKey($n->getStringValue()),
            'registryValue' => fn(ParseNode $n) => $o->setRegistryValue($n->getStringValue()),
            'registryValueName' => fn(ParseNode $n) => $o->setRegistryValueName($n->getStringValue()),
            'registryValueType' => fn(ParseNode $n) => $o->setRegistryValueType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the registryHive property value. Registry hive of the key that the recorded action was applied to.
     * @return string|null
    */
    public function getRegistryHive(): ?string {
        return $this->getBackingStore()->get('registryHive');
    }

    /**
     * Gets the registryKey property value. Registry key that the recorded action was applied to.
     * @return string|null
    */
    public function getRegistryKey(): ?string {
        return $this->getBackingStore()->get('registryKey');
    }

    /**
     * Gets the registryValue property value. Data of the registry value that the recorded action was applied to.
     * @return string|null
    */
    public function getRegistryValue(): ?string {
        return $this->getBackingStore()->get('registryValue');
    }

    /**
     * Gets the registryValueName property value. Name of the registry value that the recorded action was applied to.
     * @return string|null
    */
    public function getRegistryValueName(): ?string {
        return $this->getBackingStore()->get('registryValueName');
    }

    /**
     * Gets the registryValueType property value. Data type, such as binary or string, of the registry value that the recorded action was applied to.
     * @return string|null
    */
    public function getRegistryValueType(): ?string {
        return $this->getBackingStore()->get('registryValueType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('registryHive', $this->getRegistryHive());
        $writer->writeStringValue('registryKey', $this->getRegistryKey());
        $writer->writeStringValue('registryValue', $this->getRegistryValue());
        $writer->writeStringValue('registryValueName', $this->getRegistryValueName());
        $writer->writeStringValue('registryValueType', $this->getRegistryValueType());
    }

    /**
     * Sets the registryHive property value. Registry hive of the key that the recorded action was applied to.
     *  @param string|null $value Value to set for the registryHive property.
    */
    public function setRegistryHive(?string $value): void {
        $this->getBackingStore()->set('registryHive', $value);
    }

    /**
     * Sets the registryKey property value. Registry key that the recorded action was applied to.
     *  @param string|null $value Value to set for the registryKey property.
    */
    public function setRegistryKey(?string $value): void {
        $this->getBackingStore()->set('registryKey', $value);
    }

    /**
     * Sets the registryValue property value. Data of the registry value that the recorded action was applied to.
     *  @param string|null $value Value to set for the registryValue property.
    */
    public function setRegistryValue(?string $value): void {
        $this->getBackingStore()->set('registryValue', $value);
    }

    /**
     * Sets the registryValueName property value. Name of the registry value that the recorded action was applied to.
     *  @param string|null $value Value to set for the registryValueName property.
    */
    public function setRegistryValueName(?string $value): void {
        $this->getBackingStore()->set('registryValueName', $value);
    }

    /**
     * Sets the registryValueType property value. Data type, such as binary or string, of the registry value that the recorded action was applied to.
     *  @param string|null $value Value to set for the registryValueType property.
    */
    public function setRegistryValueType(?string $value): void {
        $this->getBackingStore()->set('registryValueType', $value);
    }

}
