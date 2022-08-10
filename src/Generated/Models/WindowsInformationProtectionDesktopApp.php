<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsInformationProtectionDesktopApp extends WindowsInformationProtectionApp implements Parsable 
{
    /**
     * @var string|null $binaryName The binary name.
    */
    private ?string $binaryName = null;
    
    /**
     * @var string|null $binaryVersionHigh The high binary version.
    */
    private ?string $binaryVersionHigh = null;
    
    /**
     * @var string|null $binaryVersionLow The lower binary version.
    */
    private ?string $binaryVersionLow = null;
    
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
        return $this->binaryName;
    }

    /**
     * Gets the binaryVersionHigh property value. The high binary version.
     * @return string|null
    */
    public function getBinaryVersionHigh(): ?string {
        return $this->binaryVersionHigh;
    }

    /**
     * Gets the binaryVersionLow property value. The lower binary version.
     * @return string|null
    */
    public function getBinaryVersionLow(): ?string {
        return $this->binaryVersionLow;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'binaryName' => function (ParseNode $n) use ($o) { $o->setBinaryName($n->getStringValue()); },
            'binaryVersionHigh' => function (ParseNode $n) use ($o) { $o->setBinaryVersionHigh($n->getStringValue()); },
            'binaryVersionLow' => function (ParseNode $n) use ($o) { $o->setBinaryVersionLow($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('binaryName', $this->binaryName);
        $writer->writeStringValue('binaryVersionHigh', $this->binaryVersionHigh);
        $writer->writeStringValue('binaryVersionLow', $this->binaryVersionLow);
    }

    /**
     * Sets the binaryName property value. The binary name.
     *  @param string|null $value Value to set for the binaryName property.
    */
    public function setBinaryName(?string $value ): void {
        $this->binaryName = $value;
    }

    /**
     * Sets the binaryVersionHigh property value. The high binary version.
     *  @param string|null $value Value to set for the binaryVersionHigh property.
    */
    public function setBinaryVersionHigh(?string $value ): void {
        $this->binaryVersionHigh = $value;
    }

    /**
     * Sets the binaryVersionLow property value. The lower binary version.
     *  @param string|null $value Value to set for the binaryVersionLow property.
    */
    public function setBinaryVersionLow(?string $value ): void {
        $this->binaryVersionLow = $value;
    }

}
