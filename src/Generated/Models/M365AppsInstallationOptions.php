<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class M365AppsInstallationOptions extends Entity implements Parsable 
{
    /**
     * Instantiates a new M365AppsInstallationOptions and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return M365AppsInstallationOptions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): M365AppsInstallationOptions {
        return new M365AppsInstallationOptions();
    }

    /**
     * Gets the appsForMac property value. The appsForMac property
     * @return AppsInstallationOptionsForMac|null
    */
    public function getAppsForMac(): ?AppsInstallationOptionsForMac {
        $val = $this->getBackingStore()->get('appsForMac');
        if (is_null($val) || $val instanceof AppsInstallationOptionsForMac) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appsForMac'");
    }

    /**
     * Gets the appsForWindows property value. The appsForWindows property
     * @return AppsInstallationOptionsForWindows|null
    */
    public function getAppsForWindows(): ?AppsInstallationOptionsForWindows {
        $val = $this->getBackingStore()->get('appsForWindows');
        if (is_null($val) || $val instanceof AppsInstallationOptionsForWindows) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appsForWindows'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appsForMac' => fn(ParseNode $n) => $o->setAppsForMac($n->getObjectValue([AppsInstallationOptionsForMac::class, 'createFromDiscriminatorValue'])),
            'appsForWindows' => fn(ParseNode $n) => $o->setAppsForWindows($n->getObjectValue([AppsInstallationOptionsForWindows::class, 'createFromDiscriminatorValue'])),
            'updateChannel' => fn(ParseNode $n) => $o->setUpdateChannel($n->getEnumValue(AppsUpdateChannelType::class)),
        ]);
    }

    /**
     * Gets the updateChannel property value. The updateChannel property
     * @return AppsUpdateChannelType|null
    */
    public function getUpdateChannel(): ?AppsUpdateChannelType {
        $val = $this->getBackingStore()->get('updateChannel');
        if (is_null($val) || $val instanceof AppsUpdateChannelType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'updateChannel'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('appsForMac', $this->getAppsForMac());
        $writer->writeObjectValue('appsForWindows', $this->getAppsForWindows());
        $writer->writeEnumValue('updateChannel', $this->getUpdateChannel());
    }

    /**
     * Sets the appsForMac property value. The appsForMac property
     * @param AppsInstallationOptionsForMac|null $value Value to set for the appsForMac property.
    */
    public function setAppsForMac(?AppsInstallationOptionsForMac $value): void {
        $this->getBackingStore()->set('appsForMac', $value);
    }

    /**
     * Sets the appsForWindows property value. The appsForWindows property
     * @param AppsInstallationOptionsForWindows|null $value Value to set for the appsForWindows property.
    */
    public function setAppsForWindows(?AppsInstallationOptionsForWindows $value): void {
        $this->getBackingStore()->set('appsForWindows', $value);
    }

    /**
     * Sets the updateChannel property value. The updateChannel property
     * @param AppsUpdateChannelType|null $value Value to set for the updateChannel property.
    */
    public function setUpdateChannel(?AppsUpdateChannelType $value): void {
        $this->getBackingStore()->set('updateChannel', $value);
    }

}
