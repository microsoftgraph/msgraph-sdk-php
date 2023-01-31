<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsUniversalAppXAppAssignmentSettings extends MobileAppAssignmentSettings implements Parsable 
{
    /**
     * Instantiates a new WindowsUniversalAppXAppAssignmentSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUniversalAppXAppAssignmentSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsUniversalAppXAppAssignmentSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsUniversalAppXAppAssignmentSettings {
        return new WindowsUniversalAppXAppAssignmentSettings();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'useDeviceContext' => fn(ParseNode $n) => $o->setUseDeviceContext($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the useDeviceContext property value. If true, uses device execution context for Windows Universal AppX mobile app. Device-context install is not allowed when this type of app is targeted with Available intent. Defaults to false.
     * @return bool|null
    */
    public function getUseDeviceContext(): ?bool {
        return $this->getBackingStore()->get('useDeviceContext');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('useDeviceContext', $this->getUseDeviceContext());
    }

    /**
     * Sets the useDeviceContext property value. If true, uses device execution context for Windows Universal AppX mobile app. Device-context install is not allowed when this type of app is targeted with Available intent. Defaults to false.
     * @param bool|null $value Value to set for the useDeviceContext property.
    */
    public function setUseDeviceContext(?bool $value): void {
        $this->getBackingStore()->set('useDeviceContext', $value);
    }

}
