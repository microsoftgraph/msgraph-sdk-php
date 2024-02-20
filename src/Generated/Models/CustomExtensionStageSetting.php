<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomExtensionStageSetting extends Entity implements Parsable 
{
    /**
     * Instantiates a new CustomExtensionStageSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomExtensionStageSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomExtensionStageSetting {
        return new CustomExtensionStageSetting();
    }

    /**
     * Gets the customExtension property value. Indicates the custom workflow extension that will be executed at this stage. Nullable. Supports $expand.
     * @return CustomCalloutExtension|null
    */
    public function getCustomExtension(): ?CustomCalloutExtension {
        $val = $this->getBackingStore()->get('customExtension');
        if (is_null($val) || $val instanceof CustomCalloutExtension) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customExtension'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'customExtension' => fn(ParseNode $n) => $o->setCustomExtension($n->getObjectValue([CustomCalloutExtension::class, 'createFromDiscriminatorValue'])),
            'stage' => fn(ParseNode $n) => $o->setStage($n->getEnumValue(AccessPackageCustomExtensionStage::class)),
        ]);
    }

    /**
     * Gets the stage property value. The stage property
     * @return AccessPackageCustomExtensionStage|null
    */
    public function getStage(): ?AccessPackageCustomExtensionStage {
        $val = $this->getBackingStore()->get('stage');
        if (is_null($val) || $val instanceof AccessPackageCustomExtensionStage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'stage'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('customExtension', $this->getCustomExtension());
        $writer->writeEnumValue('stage', $this->getStage());
    }

    /**
     * Sets the customExtension property value. Indicates the custom workflow extension that will be executed at this stage. Nullable. Supports $expand.
     * @param CustomCalloutExtension|null $value Value to set for the customExtension property.
    */
    public function setCustomExtension(?CustomCalloutExtension $value): void {
        $this->getBackingStore()->set('customExtension', $value);
    }

    /**
     * Sets the stage property value. The stage property
     * @param AccessPackageCustomExtensionStage|null $value Value to set for the stage property.
    */
    public function setStage(?AccessPackageCustomExtensionStage $value): void {
        $this->getBackingStore()->set('stage', $value);
    }

}
