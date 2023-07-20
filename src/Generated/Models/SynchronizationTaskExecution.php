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
     * Gets the activityIdentifier property value. Identifier of the job run.
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
     * Gets the countEntitled property value. Count of processed entries that were assigned for this application.
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
     * Gets the countEntitledForProvisioning property value. Count of processed entries that were assigned for provisioning.
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
     * Gets the countEscrowed property value. Count of entries that were escrowed (errors).
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
     * Gets the countEscrowedRaw property value. Count of entries that were escrowed, including system-generated escrows.
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
     * Gets the countExported property value. Count of exported entries.
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
     * Gets the countExports property value. Count of entries that were expected to be exported.
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
     * Gets the countImported property value. Count of imported entries.
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
     * Gets the countImportedDeltas property value. Count of imported delta-changes.
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
     * Gets the countImportedReferenceDeltas property value. Count of imported delta-changes pertaining to reference changes.
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
     * Gets the error property value. If an error was encountered, contains a synchronizationError object with details.
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
     * Gets the timeBegan property value. Time when this job run began. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the timeEnded property value. Time when this job run ended. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Sets the activityIdentifier property value. Identifier of the job run.
     * @param string|null $value Value to set for the activityIdentifier property.
    */
    public function setActivityIdentifier(?string $value): void {
        $this->getBackingStore()->set('activityIdentifier', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the countEntitled property value. Count of processed entries that were assigned for this application.
     * @param int|null $value Value to set for the countEntitled property.
    */
    public function setCountEntitled(?int $value): void {
        $this->getBackingStore()->set('countEntitled', $value);
    }

    /**
     * Sets the countEntitledForProvisioning property value. Count of processed entries that were assigned for provisioning.
     * @param int|null $value Value to set for the countEntitledForProvisioning property.
    */
    public function setCountEntitledForProvisioning(?int $value): void {
        $this->getBackingStore()->set('countEntitledForProvisioning', $value);
    }

    /**
     * Sets the countEscrowed property value. Count of entries that were escrowed (errors).
     * @param int|null $value Value to set for the countEscrowed property.
    */
    public function setCountEscrowed(?int $value): void {
        $this->getBackingStore()->set('countEscrowed', $value);
    }

    /**
     * Sets the countEscrowedRaw property value. Count of entries that were escrowed, including system-generated escrows.
     * @param int|null $value Value to set for the countEscrowedRaw property.
    */
    public function setCountEscrowedRaw(?int $value): void {
        $this->getBackingStore()->set('countEscrowedRaw', $value);
    }

    /**
     * Sets the countExported property value. Count of exported entries.
     * @param int|null $value Value to set for the countExported property.
    */
    public function setCountExported(?int $value): void {
        $this->getBackingStore()->set('countExported', $value);
    }

    /**
     * Sets the countExports property value. Count of entries that were expected to be exported.
     * @param int|null $value Value to set for the countExports property.
    */
    public function setCountExports(?int $value): void {
        $this->getBackingStore()->set('countExports', $value);
    }

    /**
     * Sets the countImported property value. Count of imported entries.
     * @param int|null $value Value to set for the countImported property.
    */
    public function setCountImported(?int $value): void {
        $this->getBackingStore()->set('countImported', $value);
    }

    /**
     * Sets the countImportedDeltas property value. Count of imported delta-changes.
     * @param int|null $value Value to set for the countImportedDeltas property.
    */
    public function setCountImportedDeltas(?int $value): void {
        $this->getBackingStore()->set('countImportedDeltas', $value);
    }

    /**
     * Sets the countImportedReferenceDeltas property value. Count of imported delta-changes pertaining to reference changes.
     * @param int|null $value Value to set for the countImportedReferenceDeltas property.
    */
    public function setCountImportedReferenceDeltas(?int $value): void {
        $this->getBackingStore()->set('countImportedReferenceDeltas', $value);
    }

    /**
     * Sets the error property value. If an error was encountered, contains a synchronizationError object with details.
     * @param SynchronizationError|null $value Value to set for the error property.
    */
    public function setError(?SynchronizationError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
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
     * Sets the timeBegan property value. Time when this job run began. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the timeBegan property.
    */
    public function setTimeBegan(?DateTime $value): void {
        $this->getBackingStore()->set('timeBegan', $value);
    }

    /**
     * Sets the timeEnded property value. Time when this job run ended. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the timeEnded property.
    */
    public function setTimeEnded(?DateTime $value): void {
        $this->getBackingStore()->set('timeEnded', $value);
    }

}
