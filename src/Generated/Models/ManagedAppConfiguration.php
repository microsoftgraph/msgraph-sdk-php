<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Configuration used to deliver a set of custom settings as-is to apps for users to whom the configuration is scoped
*/
class ManagedAppConfiguration extends ManagedAppPolicy implements Parsable 
{
    /**
     * Instantiates a new managedAppConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedAppConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedAppConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedAppConfiguration {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.targetedManagedAppConfiguration': return new TargetedManagedAppConfiguration();
            }
        }
        return new ManagedAppConfiguration();
    }

    /**
     * Gets the customSettings property value. A set of string key and string value pairs to be sent to apps for users to whom the configuration is scoped, unalterned by this service
     * @return array<KeyValuePair>|null
    */
    public function getCustomSettings(): ?array {
        $val = $this->getBackingStore()->get('customSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyValuePair::class);
            /** @var array<KeyValuePair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customSettings'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'customSettings' => fn(ParseNode $n) => $o->setCustomSettings($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
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
        $writer->writeCollectionOfObjectValues('customSettings', $this->getCustomSettings());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the customSettings property value. A set of string key and string value pairs to be sent to apps for users to whom the configuration is scoped, unalterned by this service
     * @param array<KeyValuePair>|null $value Value to set for the customSettings property.
    */
    public function setCustomSettings(?array $value): void {
        $this->getBackingStore()->set('customSettings', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
