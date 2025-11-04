<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FileHashEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new FileHashEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.fileHashEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileHashEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileHashEvidence {
        return new FileHashEvidence();
    }

    /**
     * Gets the algorithm property value. The algorithm property
     * @return FileHashAlgorithm|null
    */
    public function getAlgorithm(): ?FileHashAlgorithm {
        $val = $this->getBackingStore()->get('algorithm');
        if (is_null($val) || $val instanceof FileHashAlgorithm) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'algorithm'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'algorithm' => fn(ParseNode $n) => $o->setAlgorithm($n->getEnumValue(FileHashAlgorithm::class)),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ]);
    }

    /**
     * Gets the value property value. The value property
     * @return string|null
    */
    public function getValue(): ?string {
        $val = $this->getBackingStore()->get('value');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'value'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('algorithm', $this->getAlgorithm());
        $writer->writeStringValue('value', $this->getValue());
    }

    /**
     * Sets the algorithm property value. The algorithm property
     * @param FileHashAlgorithm|null $value Value to set for the algorithm property.
    */
    public function setAlgorithm(?FileHashAlgorithm $value): void {
        $this->getBackingStore()->set('algorithm', $value);
    }

    /**
     * Sets the value property value. The value property
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
