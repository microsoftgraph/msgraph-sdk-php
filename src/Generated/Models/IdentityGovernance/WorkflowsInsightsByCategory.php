<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class WorkflowsInsightsByCategory implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new WorkflowsInsightsByCategory and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkflowsInsightsByCategory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkflowsInsightsByCategory {
        return new WorkflowsInsightsByCategory();
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
     * Gets the failedJoinerRuns property value. Failed 'Joiner' workflows processed in a tenant.
     * @return int|null
    */
    public function getFailedJoinerRuns(): ?int {
        $val = $this->getBackingStore()->get('failedJoinerRuns');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failedJoinerRuns'");
    }

    /**
     * Gets the failedLeaverRuns property value. Failed 'Leaver' workflows processed in a tenant.
     * @return int|null
    */
    public function getFailedLeaverRuns(): ?int {
        $val = $this->getBackingStore()->get('failedLeaverRuns');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failedLeaverRuns'");
    }

    /**
     * Gets the failedMoverRuns property value. Failed 'Mover' workflows processed in a tenant.
     * @return int|null
    */
    public function getFailedMoverRuns(): ?int {
        $val = $this->getBackingStore()->get('failedMoverRuns');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failedMoverRuns'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'failedJoinerRuns' => fn(ParseNode $n) => $o->setFailedJoinerRuns($n->getIntegerValue()),
            'failedLeaverRuns' => fn(ParseNode $n) => $o->setFailedLeaverRuns($n->getIntegerValue()),
            'failedMoverRuns' => fn(ParseNode $n) => $o->setFailedMoverRuns($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'successfulJoinerRuns' => fn(ParseNode $n) => $o->setSuccessfulJoinerRuns($n->getIntegerValue()),
            'successfulLeaverRuns' => fn(ParseNode $n) => $o->setSuccessfulLeaverRuns($n->getIntegerValue()),
            'successfulMoverRuns' => fn(ParseNode $n) => $o->setSuccessfulMoverRuns($n->getIntegerValue()),
            'totalJoinerRuns' => fn(ParseNode $n) => $o->setTotalJoinerRuns($n->getIntegerValue()),
            'totalLeaverRuns' => fn(ParseNode $n) => $o->setTotalLeaverRuns($n->getIntegerValue()),
            'totalMoverRuns' => fn(ParseNode $n) => $o->setTotalMoverRuns($n->getIntegerValue()),
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
     * Gets the successfulJoinerRuns property value. Successful 'Joiner' workflows processed in a tenant.
     * @return int|null
    */
    public function getSuccessfulJoinerRuns(): ?int {
        $val = $this->getBackingStore()->get('successfulJoinerRuns');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'successfulJoinerRuns'");
    }

    /**
     * Gets the successfulLeaverRuns property value. Successful 'Leaver' workflows processed in a tenant.
     * @return int|null
    */
    public function getSuccessfulLeaverRuns(): ?int {
        $val = $this->getBackingStore()->get('successfulLeaverRuns');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'successfulLeaverRuns'");
    }

    /**
     * Gets the successfulMoverRuns property value. Successful 'Mover' workflows processed in a tenant.
     * @return int|null
    */
    public function getSuccessfulMoverRuns(): ?int {
        $val = $this->getBackingStore()->get('successfulMoverRuns');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'successfulMoverRuns'");
    }

    /**
     * Gets the totalJoinerRuns property value. Total 'Joiner' workflows processed in a tenant.
     * @return int|null
    */
    public function getTotalJoinerRuns(): ?int {
        $val = $this->getBackingStore()->get('totalJoinerRuns');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalJoinerRuns'");
    }

    /**
     * Gets the totalLeaverRuns property value. Total 'Leaver' workflows processed in a tenant.
     * @return int|null
    */
    public function getTotalLeaverRuns(): ?int {
        $val = $this->getBackingStore()->get('totalLeaverRuns');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalLeaverRuns'");
    }

    /**
     * Gets the totalMoverRuns property value. Total 'Mover' workflows processed in a tenant.
     * @return int|null
    */
    public function getTotalMoverRuns(): ?int {
        $val = $this->getBackingStore()->get('totalMoverRuns');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalMoverRuns'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('failedJoinerRuns', $this->getFailedJoinerRuns());
        $writer->writeIntegerValue('failedLeaverRuns', $this->getFailedLeaverRuns());
        $writer->writeIntegerValue('failedMoverRuns', $this->getFailedMoverRuns());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('successfulJoinerRuns', $this->getSuccessfulJoinerRuns());
        $writer->writeIntegerValue('successfulLeaverRuns', $this->getSuccessfulLeaverRuns());
        $writer->writeIntegerValue('successfulMoverRuns', $this->getSuccessfulMoverRuns());
        $writer->writeIntegerValue('totalJoinerRuns', $this->getTotalJoinerRuns());
        $writer->writeIntegerValue('totalLeaverRuns', $this->getTotalLeaverRuns());
        $writer->writeIntegerValue('totalMoverRuns', $this->getTotalMoverRuns());
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
     * Sets the failedJoinerRuns property value. Failed 'Joiner' workflows processed in a tenant.
     * @param int|null $value Value to set for the failedJoinerRuns property.
    */
    public function setFailedJoinerRuns(?int $value): void {
        $this->getBackingStore()->set('failedJoinerRuns', $value);
    }

    /**
     * Sets the failedLeaverRuns property value. Failed 'Leaver' workflows processed in a tenant.
     * @param int|null $value Value to set for the failedLeaverRuns property.
    */
    public function setFailedLeaverRuns(?int $value): void {
        $this->getBackingStore()->set('failedLeaverRuns', $value);
    }

    /**
     * Sets the failedMoverRuns property value. Failed 'Mover' workflows processed in a tenant.
     * @param int|null $value Value to set for the failedMoverRuns property.
    */
    public function setFailedMoverRuns(?int $value): void {
        $this->getBackingStore()->set('failedMoverRuns', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the successfulJoinerRuns property value. Successful 'Joiner' workflows processed in a tenant.
     * @param int|null $value Value to set for the successfulJoinerRuns property.
    */
    public function setSuccessfulJoinerRuns(?int $value): void {
        $this->getBackingStore()->set('successfulJoinerRuns', $value);
    }

    /**
     * Sets the successfulLeaverRuns property value. Successful 'Leaver' workflows processed in a tenant.
     * @param int|null $value Value to set for the successfulLeaverRuns property.
    */
    public function setSuccessfulLeaverRuns(?int $value): void {
        $this->getBackingStore()->set('successfulLeaverRuns', $value);
    }

    /**
     * Sets the successfulMoverRuns property value. Successful 'Mover' workflows processed in a tenant.
     * @param int|null $value Value to set for the successfulMoverRuns property.
    */
    public function setSuccessfulMoverRuns(?int $value): void {
        $this->getBackingStore()->set('successfulMoverRuns', $value);
    }

    /**
     * Sets the totalJoinerRuns property value. Total 'Joiner' workflows processed in a tenant.
     * @param int|null $value Value to set for the totalJoinerRuns property.
    */
    public function setTotalJoinerRuns(?int $value): void {
        $this->getBackingStore()->set('totalJoinerRuns', $value);
    }

    /**
     * Sets the totalLeaverRuns property value. Total 'Leaver' workflows processed in a tenant.
     * @param int|null $value Value to set for the totalLeaverRuns property.
    */
    public function setTotalLeaverRuns(?int $value): void {
        $this->getBackingStore()->set('totalLeaverRuns', $value);
    }

    /**
     * Sets the totalMoverRuns property value. Total 'Mover' workflows processed in a tenant.
     * @param int|null $value Value to set for the totalMoverRuns property.
    */
    public function setTotalMoverRuns(?int $value): void {
        $this->getBackingStore()->set('totalMoverRuns', $value);
    }

}
