<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MultiTenantApplicationMetrics extends Entity implements Parsable 
{
    /**
     * Instantiates a new MultiTenantApplicationMetrics and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MultiTenantApplicationMetrics
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MultiTenantApplicationMetrics {
        return new MultiTenantApplicationMetrics();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'initial' => fn(ParseNode $n) => $o->setInitial($n->getObjectValue([MultiTenantApplicationMetricsInitial::class, 'createFromDiscriminatorValue'])),
            'recent' => fn(ParseNode $n) => $o->setRecent($n->getObjectValue([MultiTenantApplicationMetricsRecent::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the initial property value. The initial property
     * @return MultiTenantApplicationMetricsInitial|null
    */
    public function getInitial(): ?MultiTenantApplicationMetricsInitial {
        $val = $this->getBackingStore()->get('initial');
        if (is_null($val) || $val instanceof MultiTenantApplicationMetricsInitial) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'initial'");
    }

    /**
     * Gets the recent property value. The recent property
     * @return MultiTenantApplicationMetricsRecent|null
    */
    public function getRecent(): ?MultiTenantApplicationMetricsRecent {
        $val = $this->getBackingStore()->get('recent');
        if (is_null($val) || $val instanceof MultiTenantApplicationMetricsRecent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recent'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('initial', $this->getInitial());
        $writer->writeObjectValue('recent', $this->getRecent());
    }

    /**
     * Sets the initial property value. The initial property
     * @param MultiTenantApplicationMetricsInitial|null $value Value to set for the initial property.
    */
    public function setInitial(?MultiTenantApplicationMetricsInitial $value): void {
        $this->getBackingStore()->set('initial', $value);
    }

    /**
     * Sets the recent property value. The recent property
     * @param MultiTenantApplicationMetricsRecent|null $value Value to set for the recent property.
    */
    public function setRecent(?MultiTenantApplicationMetricsRecent $value): void {
        $this->getBackingStore()->set('recent', $value);
    }

}
