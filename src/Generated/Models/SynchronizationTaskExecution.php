<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SynchronizationTaskExecution implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new synchronizationTaskExecution and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SynchronizationTaskExecution
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SynchronizationTaskExecution {
        return new SynchronizationTaskExecution();
    }

    /**
     * Gets the activityIdentifier property value. The activityIdentifier property
     * @return string|null
    */
    public function getActivityIdentifier(): ?string {
        $val = $this->getBackingStore()->get('activityIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activityIdentifier'");
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the countEntitled property value. The countEntitled property
     * @return int|null
    */
    public function getCountEntitled(): ?int {
        $val = $this->getBackingStore()->get('countEntitled');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'countEntitled'");
    }

    /**
     * Gets the countEntitledForProvisioning property value. The countEntitledForProvisioning property
     * @return int|null
    */
    public function getCountEntitledForProvisioning(): ?int {
        $val = $this->getBackingStore()->get('countEntitledForProvisioning');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'countEntitledForProvisioning'");
    }

    /**
     * Gets the countEscrowed property value. The countEscrowed property
     * @return int|null
    */
    public function getCountEscrowed(): ?int {
        $val = $this->getBackingStore()->get('countEscrowed');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'countEscrowed'");
    }

    /**
     * Gets the countEscrowedRaw property value. The countEscrowedRaw property
     * @return int|null
    */
    public function getCountEscrowedRaw(): ?int {
        $val = $this->getBackingStore()->get('countEscrowedRaw');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'countEscrowedRaw'");
    }

    /**
     * Gets the countExported property value. The countExported property
     * @return int|null
    */
    public function getCountExported(): ?int {
        $val = $this->getBackingStore()->get('countExported');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'countExported'");
    }

    /**
     * Gets the countExports property value. The countExports property
     * @return int|null
    */
    public function getCountExports(): ?int {
        $val = $this->getBackingStore()->get('countExports');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'countExports'");
    }

    /**
     * Gets the countImported property value. The countImported property
     * @return int|null
    */
    public function getCountImported(): ?int {
        $val = $this->getBackingStore()->get('countImported');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'countImported'");
    }

    /**
     * Gets the countImportedDeltas property value. The countImportedDeltas property
     * @return int|null
    */
    public function getCountImportedDeltas(): ?int {
        $val = $this->getBackingStore()->get('countImportedDeltas');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'countImportedDeltas'");
    }

    /**
     * Gets the countImportedReferenceDeltas property value. The countImportedReferenceDeltas property
     * @return int|null
    */
    public function getCountImportedReferenceDeltas(): ?int {
        $val = $this->getBackingStore()->get('countImportedReferenceDeltas');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'countImportedReferenceDeltas'");
    }

    /**
     * Gets the error property value. The error property
     * @return SynchronizationError|null
    */
    public function getError(): ?SynchronizationError {
        $val = $this->getBackingStore()->get('error');
        if (is_null($val) || $val instanceof SynchronizationError) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'error'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'activityIdentifier' => fn(ParseNode $n) => $o->setActivityIdentifier($n->getStringValue()),
            'countEntitled' => fn(ParseNode $n) => $o->setCountEntitled($n->getIntegerValue()),
            'countEntitledForProvisioning' => fn(ParseNode $n) => $o->setCountEntitledForProvisioning($n->getIntegerValue()),
            'countEscrowed' => fn(ParseNode $n) => $o->setCountEscrowed($n->getIntegerValue()),
            'countEscrowedRaw' => fn(ParseNode $n) => $o->setCountEscrowedRaw($n->getIntegerValue()),
            'countExported' => fn(ParseNode $n) => $o->setCountExported($n->getIntegerValue()),
            'countExports' => fn(ParseNode $n) => $o->setCountExports($n->getIntegerValue()),
            'countImported' => fn(ParseNode $n) => $o->setCountImported($n->getIntegerValue()),
            'countImportedDeltas' => fn(ParseNode $n) => $o->setCountImportedDeltas($n->getIntegerValue()),
            'countImportedReferenceDeltas' => fn(ParseNode $n) => $o->setCountImportedReferenceDeltas($n->getIntegerValue()),
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([SynchronizationError::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(SynchronizationTaskExecutionResult::class)),
            'timeBegan' => fn(ParseNode $n) => $o->setTimeBegan($n->getDateTimeValue()),
            'timeEnded' => fn(ParseNode $n) => $o->setTimeEnded($n->getDateTimeValue()),
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
     * Gets the state property value. The state property
     * @return SynchronizationTaskExecutionResult|null
    */
    public function getState(): ?SynchronizationTaskExecutionResult {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof SynchronizationTaskExecutionResult) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Gets the timeBegan property value. The timeBegan property
     * @return DateTime|null
    */
    public function getTimeBegan(): ?DateTime {
        $val = $this->getBackingStore()->get('timeBegan');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeBegan'");
    }

    /**
     * Gets the timeEnded property value. The timeEnded property
     * @return DateTime|null
    */
    public function getTimeEnded(): ?DateTime {
        $val = $this->getBackingStore()->get('timeEnded');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeEnded'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('activityIdentifier', $this->getActivityIdentifier());
        $writer->writeIntegerValue('countEntitled', $this->getCountEntitled());
        $writer->writeIntegerValue('countEntitledForProvisioning', $this->getCountEntitledForProvisioning());
        $writer->writeIntegerValue('countEscrowed', $this->getCountEscrowed());
        $writer->writeIntegerValue('countEscrowedRaw', $this->getCountEscrowedRaw());
        $writer->writeIntegerValue('countExported', $this->getCountExported());
        $writer->writeIntegerValue('countExports', $this->getCountExports());
        $writer->writeIntegerValue('countImported', $this->getCountImported());
        $writer->writeIntegerValue('countImportedDeltas', $this->getCountImportedDeltas());
        $writer->writeIntegerValue('countImportedReferenceDeltas', $this->getCountImportedReferenceDeltas());
        $writer->writeObjectValue('error', $this->getError());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeDateTimeValue('timeBegan', $this->getTimeBegan());
        $writer->writeDateTimeValue('timeEnded', $this->getTimeEnded());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the activityIdentifier property value. The activityIdentifier property
     * @param string|null $value Value to set for the activityIdentifier property.
    */
    public function setActivityIdentifier(?string $value): void {
        $this->getBackingStore()->set('activityIdentifier', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the countEntitled property value. The countEntitled property
     * @param int|null $value Value to set for the countEntitled property.
    */
    public function setCountEntitled(?int $value): void {
        $this->getBackingStore()->set('countEntitled', $value);
    }

    /**
     * Sets the countEntitledForProvisioning property value. The countEntitledForProvisioning property
     * @param int|null $value Value to set for the countEntitledForProvisioning property.
    */
    public function setCountEntitledForProvisioning(?int $value): void {
        $this->getBackingStore()->set('countEntitledForProvisioning', $value);
    }

    /**
     * Sets the countEscrowed property value. The countEscrowed property
     * @param int|null $value Value to set for the countEscrowed property.
    */
    public function setCountEscrowed(?int $value): void {
        $this->getBackingStore()->set('countEscrowed', $value);
    }

    /**
     * Sets the countEscrowedRaw property value. The countEscrowedRaw property
     * @param int|null $value Value to set for the countEscrowedRaw property.
    */
    public function setCountEscrowedRaw(?int $value): void {
        $this->getBackingStore()->set('countEscrowedRaw', $value);
    }

    /**
     * Sets the countExported property value. The countExported property
     * @param int|null $value Value to set for the countExported property.
    */
    public function setCountExported(?int $value): void {
        $this->getBackingStore()->set('countExported', $value);
    }

    /**
     * Sets the countExports property value. The countExports property
     * @param int|null $value Value to set for the countExports property.
    */
    public function setCountExports(?int $value): void {
        $this->getBackingStore()->set('countExports', $value);
    }

    /**
     * Sets the countImported property value. The countImported property
     * @param int|null $value Value to set for the countImported property.
    */
    public function setCountImported(?int $value): void {
        $this->getBackingStore()->set('countImported', $value);
    }

    /**
     * Sets the countImportedDeltas property value. The countImportedDeltas property
     * @param int|null $value Value to set for the countImportedDeltas property.
    */
    public function setCountImportedDeltas(?int $value): void {
        $this->getBackingStore()->set('countImportedDeltas', $value);
    }

    /**
     * Sets the countImportedReferenceDeltas property value. The countImportedReferenceDeltas property
     * @param int|null $value Value to set for the countImportedReferenceDeltas property.
    */
    public function setCountImportedReferenceDeltas(?int $value): void {
        $this->getBackingStore()->set('countImportedReferenceDeltas', $value);
    }

    /**
     * Sets the error property value. The error property
     * @param SynchronizationError|null $value Value to set for the error property.
    */
    public function setError(?SynchronizationError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the state property value. The state property
     * @param SynchronizationTaskExecutionResult|null $value Value to set for the state property.
    */
    public function setState(?SynchronizationTaskExecutionResult $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the timeBegan property value. The timeBegan property
     * @param DateTime|null $value Value to set for the timeBegan property.
    */
    public function setTimeBegan(?DateTime $value): void {
        $this->getBackingStore()->set('timeBegan', $value);
    }

    /**
     * Sets the timeEnded property value. The timeEnded property
     * @param DateTime|null $value Value to set for the timeEnded property.
    */
    public function setTimeEnded(?DateTime $value): void {
        $this->getBackingStore()->set('timeEnded', $value);
    }

}
