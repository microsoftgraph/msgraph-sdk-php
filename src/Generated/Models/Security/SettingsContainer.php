<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SettingsContainer extends Entity implements Parsable 
{
    /**
     * Instantiates a new SettingsContainer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SettingsContainer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SettingsContainer {
        return new SettingsContainer();
    }

    /**
     * Gets the autoAuditingConfiguration property value. Represents automatic configuration for collection of Windows event logs as needed for Defender for Identity sensors.
     * @return AutoAuditingConfiguration|null
    */
    public function getAutoAuditingConfiguration(): ?AutoAuditingConfiguration {
        $val = $this->getBackingStore()->get('autoAuditingConfiguration');
        if (is_null($val) || $val instanceof AutoAuditingConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'autoAuditingConfiguration'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'autoAuditingConfiguration' => fn(ParseNode $n) => $o->setAutoAuditingConfiguration($n->getObjectValue([AutoAuditingConfiguration::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('autoAuditingConfiguration', $this->getAutoAuditingConfiguration());
    }

    /**
     * Sets the autoAuditingConfiguration property value. Represents automatic configuration for collection of Windows event logs as needed for Defender for Identity sensors.
     * @param AutoAuditingConfiguration|null $value Value to set for the autoAuditingConfiguration property.
    */
    public function setAutoAuditingConfiguration(?AutoAuditingConfiguration $value): void {
        $this->getBackingStore()->set('autoAuditingConfiguration', $value);
    }

}
