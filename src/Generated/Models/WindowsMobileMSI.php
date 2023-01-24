<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsMobileMSI extends MobileLobApp implements Parsable 
{
    /**
     * Instantiates a new WindowsMobileMSI and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsMobileMSI');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsMobileMSI
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsMobileMSI {
        return new WindowsMobileMSI();
    }

    /**
     * Gets the commandLine property value. The command line.
     * @return string|null
    */
    public function getCommandLine(): ?string {
        return $this->getBackingStore()->get('commandLine');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'commandLine' => fn(ParseNode $n) => $o->setCommandLine($n->getStringValue()),
            'ignoreVersionDetection' => fn(ParseNode $n) => $o->setIgnoreVersionDetection($n->getBooleanValue()),
            'productCode' => fn(ParseNode $n) => $o->setProductCode($n->getStringValue()),
            'productVersion' => fn(ParseNode $n) => $o->setProductVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the ignoreVersionDetection property value. A boolean to control whether the app's version will be used to detect the app after it is installed on a device. Set this to true for Windows Mobile MSI Line of Business (LoB) apps that use a self update feature.
     * @return bool|null
    */
    public function getIgnoreVersionDetection(): ?bool {
        return $this->getBackingStore()->get('ignoreVersionDetection');
    }

    /**
     * Gets the productCode property value. The product code.
     * @return string|null
    */
    public function getProductCode(): ?string {
        return $this->getBackingStore()->get('productCode');
    }

    /**
     * Gets the productVersion property value. The product version of Windows Mobile MSI Line of Business (LoB) app.
     * @return string|null
    */
    public function getProductVersion(): ?string {
        return $this->getBackingStore()->get('productVersion');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('commandLine', $this->getCommandLine());
        $writer->writeBooleanValue('ignoreVersionDetection', $this->getIgnoreVersionDetection());
        $writer->writeStringValue('productCode', $this->getProductCode());
        $writer->writeStringValue('productVersion', $this->getProductVersion());
    }

    /**
     * Sets the commandLine property value. The command line.
     * @param string|null $value Value to set for the commandLine property.
    */
    public function setCommandLine(?string $value): void {
        $this->getBackingStore()->set('commandLine', $value);
    }

    /**
     * Sets the ignoreVersionDetection property value. A boolean to control whether the app's version will be used to detect the app after it is installed on a device. Set this to true for Windows Mobile MSI Line of Business (LoB) apps that use a self update feature.
     * @param bool|null $value Value to set for the ignoreVersionDetection property.
    */
    public function setIgnoreVersionDetection(?bool $value): void {
        $this->getBackingStore()->set('ignoreVersionDetection', $value);
    }

    /**
     * Sets the productCode property value. The product code.
     * @param string|null $value Value to set for the productCode property.
    */
    public function setProductCode(?string $value): void {
        $this->getBackingStore()->set('productCode', $value);
    }

    /**
     * Sets the productVersion property value. The product version of Windows Mobile MSI Line of Business (LoB) app.
     * @param string|null $value Value to set for the productVersion property.
    */
    public function setProductVersion(?string $value): void {
        $this->getBackingStore()->set('productVersion', $value);
    }

}
