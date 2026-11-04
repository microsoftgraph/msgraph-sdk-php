<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceAction extends AutomatedAction implements Parsable 
{
    /**
     * Instantiates a new DeviceAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.deviceAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceAction {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.security.isolateDeviceAction': return new IsolateDeviceAction();
            }
        }
        return new DeviceAction();
    }

    /**
     * Gets the deviceIdColumn property value. Name of the hunting-query result column that contains the device ID for the targeted device.
     * @return string|null
    */
    public function getDeviceIdColumn(): ?string {
        $val = $this->getBackingStore()->get('deviceIdColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceIdColumn'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceIdColumn' => fn(ParseNode $n) => $o->setDeviceIdColumn($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceIdColumn', $this->getDeviceIdColumn());
    }

    /**
     * Sets the deviceIdColumn property value. Name of the hunting-query result column that contains the device ID for the targeted device.
     * @param string|null $value Value to set for the deviceIdColumn property.
    */
    public function setDeviceIdColumn(?string $value): void {
        $this->getBackingStore()->set('deviceIdColumn', $value);
    }

}
