<?php

namespace Microsoft\Graph\Generated\Models\TeamsAdministration;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class EffectivePolicyAssignment implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new EffectivePolicyAssignment and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EffectivePolicyAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EffectivePolicyAssignment {
        return new EffectivePolicyAssignment();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'policyAssignment' => fn(ParseNode $n) => $o->setPolicyAssignment($n->getObjectValue([PolicyAssignment::class, 'createFromDiscriminatorValue'])),
            'policyType' => fn(ParseNode $n) => $o->setPolicyType($n->getStringValue()),
        ];
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
     * Gets the policyAssignment property value. The policyAssignment property
     * @return PolicyAssignment|null
    */
    public function getPolicyAssignment(): ?PolicyAssignment {
        $val = $this->getBackingStore()->get('policyAssignment');
        if (is_null($val) || $val instanceof PolicyAssignment) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyAssignment'");
    }

    /**
     * Gets the policyType property value. The type of the assigned policy; for example, TeamsMeetingPolicy and TeamsCallingPolicy.
     * @return string|null
    */
    public function getPolicyType(): ?string {
        $val = $this->getBackingStore()->get('policyType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('policyAssignment', $this->getPolicyAssignment());
        $writer->writeStringValue('policyType', $this->getPolicyType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the policyAssignment property value. The policyAssignment property
     * @param PolicyAssignment|null $value Value to set for the policyAssignment property.
    */
    public function setPolicyAssignment(?PolicyAssignment $value): void {
        $this->getBackingStore()->set('policyAssignment', $value);
    }

    /**
     * Sets the policyType property value. The type of the assigned policy; for example, TeamsMeetingPolicy and TeamsCallingPolicy.
     * @param string|null $value Value to set for the policyType property.
    */
    public function setPolicyType(?string $value): void {
        $this->getBackingStore()->set('policyType', $value);
    }

}
