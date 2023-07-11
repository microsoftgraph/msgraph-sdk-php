<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties used to assign an Microsoft Store for Business mobile app to a group.
*/
class MicrosoftStoreForBusinessAppAssignmentSettings extends MobileAppAssignmentSettings implements Parsable 
{
    /**
     * Instantiates a new microsoftStoreForBusinessAppAssignmentSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.microsoftStoreForBusinessAppAssignmentSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftStoreForBusinessAppAssignmentSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftStoreForBusinessAppAssignmentSettings {
        return new MicrosoftStoreForBusinessAppAssignmentSettings();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'useDeviceContext' => fn(ParseNode $n) => $o->setUseDeviceContext($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the useDeviceContext property value. Whether or not to use device execution context for Microsoft Store for Business mobile app.
     * @return bool|null
    */
    public function getUseDeviceContext(): ?bool {
        $val = $this->getBackingStore()->get('useDeviceContext');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'useDeviceContext'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('useDeviceContext', $this->getUseDeviceContext());
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the useDeviceContext property value. Whether or not to use device execution context for Microsoft Store for Business mobile app.
     * @param bool|null $value Value to set for the useDeviceContext property.
    */
    public function setUseDeviceContext(?bool $value): void {
        $this->getBackingStore()->set('useDeviceContext', $value);
    }

}
