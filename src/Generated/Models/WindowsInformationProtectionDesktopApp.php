<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Desktop App for Windows information protection
*/
class WindowsInformationProtectionDesktopApp extends WindowsInformationProtectionApp implements Parsable 
{
    /**
     * Instantiates a new WindowsInformationProtectionDesktopApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsInformationProtectionDesktopApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsInformationProtectionDesktopApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsInformationProtectionDesktopApp {
        return new WindowsInformationProtectionDesktopApp();
    }

    /**
     * Gets the binaryName property value. The binary name.
     * @return string|null
    */
    public function getBinaryName(): ?string {
        $val = $this->getBackingStore()->get('binaryName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'binaryName'");
    }

    /**
     * Gets the binaryVersionHigh property value. The high binary version.
     * @return string|null
    */
    public function getBinaryVersionHigh(): ?string {
        $val = $this->getBackingStore()->get('binaryVersionHigh');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'binaryVersionHigh'");
    }

    /**
     * Gets the binaryVersionLow property value. The lower binary version.
     * @return string|null
    */
    public function getBinaryVersionLow(): ?string {
        $val = $this->getBackingStore()->get('binaryVersionLow');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'binaryVersionLow'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'binaryName' => fn(ParseNode $n) => $o->setBinaryName($n->getStringValue()),
            'binaryVersionHigh' => fn(ParseNode $n) => $o->setBinaryVersionHigh($n->getStringValue()),
            'binaryVersionLow' => fn(ParseNode $n) => $o->setBinaryVersionLow($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('binaryName', $this->getBinaryName());
        $writer->writeStringValue('binaryVersionHigh', $this->getBinaryVersionHigh());
        $writer->writeStringValue('binaryVersionLow', $this->getBinaryVersionLow());
    }

    /**
     * Sets the binaryName property value. The binary name.
     * @param string|null $value Value to set for the binaryName property.
    */
    public function setBinaryName(?string $value): void {
        $this->getBackingStore()->set('binaryName', $value);
    }

    /**
     * Sets the binaryVersionHigh property value. The high binary version.
     * @param string|null $value Value to set for the binaryVersionHigh property.
    */
    public function setBinaryVersionHigh(?string $value): void {
        $this->getBackingStore()->set('binaryVersionHigh', $value);
    }

    /**
     * Sets the binaryVersionLow property value. The lower binary version.
     * @param string|null $value Value to set for the binaryVersionLow property.
    */
    public function setBinaryVersionLow(?string $value): void {
        $this->getBackingStore()->set('binaryVersionLow', $value);
    }

}
