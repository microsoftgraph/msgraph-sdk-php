<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FraudProtectionProviderConfiguration extends FraudProtectionConfiguration implements Parsable 
{
    /**
     * Instantiates a new FraudProtectionProviderConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.fraudProtectionProviderConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FraudProtectionProviderConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FraudProtectionProviderConfiguration {
        return new FraudProtectionProviderConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fraudProtectionProvider' => fn(ParseNode $n) => $o->setFraudProtectionProvider($n->getObjectValue([FraudProtectionProvider::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the fraudProtectionProvider property value. The fraudProtectionProvider property
     * @return FraudProtectionProvider|null
    */
    public function getFraudProtectionProvider(): ?FraudProtectionProvider {
        $val = $this->getBackingStore()->get('fraudProtectionProvider');
        if (is_null($val) || $val instanceof FraudProtectionProvider) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fraudProtectionProvider'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('fraudProtectionProvider', $this->getFraudProtectionProvider());
    }

    /**
     * Sets the fraudProtectionProvider property value. The fraudProtectionProvider property
     * @param FraudProtectionProvider|null $value Value to set for the fraudProtectionProvider property.
    */
    public function setFraudProtectionProvider(?FraudProtectionProvider $value): void {
        $this->getBackingStore()->set('fraudProtectionProvider', $value);
    }

}
