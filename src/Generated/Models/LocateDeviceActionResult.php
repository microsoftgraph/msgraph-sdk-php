<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Device action result
*/
class LocateDeviceActionResult extends DeviceActionResult implements Parsable 
{
    /**
     * Instantiates a new locateDeviceActionResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LocateDeviceActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LocateDeviceActionResult {
        return new LocateDeviceActionResult();
    }

    /**
     * Gets the deviceLocation property value. device location
     * @return DeviceGeoLocation|null
    */
    public function getDeviceLocation(): ?DeviceGeoLocation {
        $val = $this->getBackingStore()->get('deviceLocation');
        if (is_null($val) || $val instanceof DeviceGeoLocation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceLocation'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceLocation' => fn(ParseNode $n) => $o->setDeviceLocation($n->getObjectValue([DeviceGeoLocation::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('deviceLocation', $this->getDeviceLocation());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the deviceLocation property value. device location
     * @param DeviceGeoLocation|null $value Value to set for the deviceLocation property.
    */
    public function setDeviceLocation(?DeviceGeoLocation $value): void {
        $this->getBackingStore()->set('deviceLocation', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
