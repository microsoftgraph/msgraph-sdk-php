<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The identifier for the deployment an app.
*/
class ManagedMobileApp extends Entity implements Parsable 
{
    /**
     * Instantiates a new managedMobileApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedMobileApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedMobileApp {
        return new ManagedMobileApp();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'mobileAppIdentifier' => fn(ParseNode $n) => $o->setMobileAppIdentifier($n->getObjectValue([MobileAppIdentifier::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the mobileAppIdentifier property value. The identifier for an app with it's operating system type.
     * @return MobileAppIdentifier|null
    */
    public function getMobileAppIdentifier(): ?MobileAppIdentifier {
        $val = $this->getBackingStore()->get('mobileAppIdentifier');
        if (is_null($val) || $val instanceof MobileAppIdentifier) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mobileAppIdentifier'");
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
     * Gets the version property value. Version of the entity.
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
        $writer->writeObjectValue('mobileAppIdentifier', $this->getMobileAppIdentifier());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the mobileAppIdentifier property value. The identifier for an app with it's operating system type.
     * @param MobileAppIdentifier|null $value Value to set for the mobileAppIdentifier property.
    */
    public function setMobileAppIdentifier(?MobileAppIdentifier $value): void {
        $this->getBackingStore()->set('mobileAppIdentifier', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the version property value. Version of the entity.
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
