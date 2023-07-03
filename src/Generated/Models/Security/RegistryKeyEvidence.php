<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RegistryKeyEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new RegistryKeyEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RegistryKeyEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RegistryKeyEvidence {
        return new RegistryKeyEvidence();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'registryHive' => fn(ParseNode $n) => $o->setRegistryHive($n->getStringValue()),
            'registryKey' => fn(ParseNode $n) => $o->setRegistryKey($n->getStringValue()),
        ]);
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('registryHive', $this->getRegistryHive());
        $writer->writeStringValue('registryKey', $this->getRegistryKey());
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

}
