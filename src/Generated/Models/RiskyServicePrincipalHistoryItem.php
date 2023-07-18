<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RiskyServicePrincipalHistoryItem extends RiskyServicePrincipal implements Parsable 
{
    /**
     * Instantiates a new riskyServicePrincipalHistoryItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RiskyServicePrincipalHistoryItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RiskyServicePrincipalHistoryItem {
        return new RiskyServicePrincipalHistoryItem();
    }

    /**
     * Gets the activity property value. The activity related to service principal risk level change.
     * @return RiskServicePrincipalActivity|null
    */
    public function getActivity(): ?RiskServicePrincipalActivity {
        $val = $this->getBackingStore()->get('activity');
        if (is_null($val) || $val instanceof RiskServicePrincipalActivity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activity'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activity' => fn(ParseNode $n) => $o->setActivity($n->getObjectValue([RiskServicePrincipalActivity::class, 'createFromDiscriminatorValue'])),
            'initiatedBy' => fn(ParseNode $n) => $o->setInitiatedBy($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the initiatedBy property value. The identifier of the actor of the operation.
     * @return string|null
    */
    public function getInitiatedBy(): ?string {
        $val = $this->getBackingStore()->get('initiatedBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'initiatedBy'");
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
        $writer->writeObjectValue('activity', $this->getActivity());
        $writer->writeStringValue('initiatedBy', $this->getInitiatedBy());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the activity property value. The activity related to service principal risk level change.
     * @param RiskServicePrincipalActivity|null $value Value to set for the activity property.
    */
    public function setActivity(?RiskServicePrincipalActivity $value): void {
        $this->getBackingStore()->set('activity', $value);
    }

    /**
     * Sets the initiatedBy property value. The identifier of the actor of the operation.
     * @param string|null $value Value to set for the initiatedBy property.
    */
    public function setInitiatedBy(?string $value): void {
        $this->getBackingStore()->set('initiatedBy', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
