<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnPremisesDirectorySynchronization extends Entity implements Parsable 
{
    /**
     * Instantiates a new OnPremisesDirectorySynchronization and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnPremisesDirectorySynchronization
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnPremisesDirectorySynchronization {
        return new OnPremisesDirectorySynchronization();
    }

    /**
     * Gets the configuration property value. Consists of configurations that can be fine-tuned and impact the on-premises directory synchronization process for a tenant. Nullable.
     * @return OnPremisesDirectorySynchronizationConfiguration|null
    */
    public function getConfiguration(): ?OnPremisesDirectorySynchronizationConfiguration {
        $val = $this->getBackingStore()->get('configuration');
        if (is_null($val) || $val instanceof OnPremisesDirectorySynchronizationConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configuration'");
    }

    /**
     * Gets the features property value. The features property
     * @return OnPremisesDirectorySynchronizationFeature|null
    */
    public function getFeatures(): ?OnPremisesDirectorySynchronizationFeature {
        $val = $this->getBackingStore()->get('features');
        if (is_null($val) || $val instanceof OnPremisesDirectorySynchronizationFeature) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'features'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'configuration' => fn(ParseNode $n) => $o->setConfiguration($n->getObjectValue([OnPremisesDirectorySynchronizationConfiguration::class, 'createFromDiscriminatorValue'])),
            'features' => fn(ParseNode $n) => $o->setFeatures($n->getObjectValue([OnPremisesDirectorySynchronizationFeature::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('configuration', $this->getConfiguration());
        $writer->writeObjectValue('features', $this->getFeatures());
    }

    /**
     * Sets the configuration property value. Consists of configurations that can be fine-tuned and impact the on-premises directory synchronization process for a tenant. Nullable.
     * @param OnPremisesDirectorySynchronizationConfiguration|null $value Value to set for the configuration property.
    */
    public function setConfiguration(?OnPremisesDirectorySynchronizationConfiguration $value): void {
        $this->getBackingStore()->set('configuration', $value);
    }

    /**
     * Sets the features property value. The features property
     * @param OnPremisesDirectorySynchronizationFeature|null $value Value to set for the features property.
    */
    public function setFeatures(?OnPremisesDirectorySynchronizationFeature $value): void {
        $this->getBackingStore()->set('features', $value);
    }

}
