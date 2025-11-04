<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Abstract class that contains properties and inherited properties for apps that you can manage with an Intune app protection policy.
*/
class ManagedApp extends MobileApp implements Parsable 
{
    /**
     * Instantiates a new ManagedApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedApp {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.managedAndroidLobApp': return new ManagedAndroidLobApp();
                case '#microsoft.graph.managedAndroidStoreApp': return new ManagedAndroidStoreApp();
                case '#microsoft.graph.managedIOSLobApp': return new ManagedIOSLobApp();
                case '#microsoft.graph.managedIOSStoreApp': return new ManagedIOSStoreApp();
                case '#microsoft.graph.managedMobileLobApp': return new ManagedMobileLobApp();
            }
        }
        return new ManagedApp();
    }

    /**
     * Gets the appAvailability property value. A managed (MAM) application's availability.
     * @return ManagedAppAvailability|null
    */
    public function getAppAvailability(): ?ManagedAppAvailability {
        $val = $this->getBackingStore()->get('appAvailability');
        if (is_null($val) || $val instanceof ManagedAppAvailability) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appAvailability'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appAvailability' => fn(ParseNode $n) => $o->setAppAvailability($n->getEnumValue(ManagedAppAvailability::class)),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the version property value. The Application's version.
     * @return string|null
    */
    public function getVersion(): ?string {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('appAvailability', $this->getAppAvailability());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the appAvailability property value. A managed (MAM) application's availability.
     * @param ManagedAppAvailability|null $value Value to set for the appAvailability property.
    */
    public function setAppAvailability(?ManagedAppAvailability $value): void {
        $this->getBackingStore()->set('appAvailability', $value);
    }

    /**
     * Sets the version property value. The Application's version.
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
