<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A class that represents a contained app of a WindowsUniversalAppX app.
*/
class WindowsUniversalAppXContainedApp extends MobileContainedApp implements Parsable 
{
    /**
     * Instantiates a new windowsUniversalAppXContainedApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUniversalAppXContainedApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsUniversalAppXContainedApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsUniversalAppXContainedApp {
        return new WindowsUniversalAppXContainedApp();
    }

    /**
     * Gets the appUserModelId property value. The app user model ID of the contained app of a WindowsUniversalAppX app.
     * @return string|null
    */
    public function getAppUserModelId(): ?string {
        $val = $this->getBackingStore()->get('appUserModelId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appUserModelId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appUserModelId' => fn(ParseNode $n) => $o->setAppUserModelId($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appUserModelId', $this->getAppUserModelId());
    }

    /**
     * Sets the appUserModelId property value. The app user model ID of the contained app of a WindowsUniversalAppX app.
     * @param string|null $value Value to set for the appUserModelId property.
    */
    public function setAppUserModelId(?string $value): void {
        $this->getBackingStore()->set('appUserModelId', $value);
    }

}
