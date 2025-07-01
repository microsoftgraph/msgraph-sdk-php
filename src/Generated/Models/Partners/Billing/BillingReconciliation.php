<?php

namespace Microsoft\Graph\Generated\Models\Partners\Billing;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BillingReconciliation extends Entity implements Parsable 
{
    /**
     * Instantiates a new BillingReconciliation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BillingReconciliation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BillingReconciliation {
        return new BillingReconciliation();
    }

    /**
     * Gets the billed property value. The billed property
     * @return BilledReconciliation|null
    */
    public function getBilled(): ?BilledReconciliation {
        $val = $this->getBackingStore()->get('billed');
        if (is_null($val) || $val instanceof BilledReconciliation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'billed'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'billed' => fn(ParseNode $n) => $o->setBilled($n->getObjectValue([BilledReconciliation::class, 'createFromDiscriminatorValue'])),
            'unbilled' => fn(ParseNode $n) => $o->setUnbilled($n->getObjectValue([UnbilledReconciliation::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the unbilled property value. The unbilled property
     * @return UnbilledReconciliation|null
    */
    public function getUnbilled(): ?UnbilledReconciliation {
        $val = $this->getBackingStore()->get('unbilled');
        if (is_null($val) || $val instanceof UnbilledReconciliation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unbilled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('billed', $this->getBilled());
        $writer->writeObjectValue('unbilled', $this->getUnbilled());
    }

    /**
     * Sets the billed property value. The billed property
     * @param BilledReconciliation|null $value Value to set for the billed property.
    */
    public function setBilled(?BilledReconciliation $value): void {
        $this->getBackingStore()->set('billed', $value);
    }

    /**
     * Sets the unbilled property value. The unbilled property
     * @param UnbilledReconciliation|null $value Value to set for the unbilled property.
    */
    public function setUnbilled(?UnbilledReconciliation $value): void {
        $this->getBackingStore()->set('unbilled', $value);
    }

}
