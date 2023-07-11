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
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SynchronizationStatus implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new synchronizationStatus and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SynchronizationStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SynchronizationStatus {
        return new SynchronizationStatus();
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
     * Gets the code property value. The code property
     * @return SynchronizationStatusCode|null
    */
    public function getCode(): ?SynchronizationStatusCode {
        $val = $this->getBackingStore()->get('code');
        if (is_null($val) || $val instanceof SynchronizationStatusCode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'code'");
    }

    /**
     * Gets the countSuccessiveCompleteFailures property value. Number of consecutive times this job failed.
     * @return int|null
    */
    public function getCountSuccessiveCompleteFailures(): ?int {
        $val = $this->getBackingStore()->get('countSuccessiveCompleteFailures');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'countSuccessiveCompleteFailures'");
    }

    /**
     * Gets the escrowsPruned property value. true if the job's escrows (object-level errors) were pruned during initial synchronization. Escrows can be pruned if during the initial synchronization, you reach the threshold of errors that would normally put the job in quarantine. Instead of going into quarantine, the synchronization process clears the job's errors and continues until the initial synchronization is completed. When the initial synchronization is completed, the job will pause and wait for the customer to clean up the errors.
     * @return bool|null
    */
    public function getEscrowsPruned(): ?bool {
        $val = $this->getBackingStore()->get('escrowsPruned');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'escrowsPruned'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'code' => fn(ParseNode $n) => $o->setCode($n->getEnumValue(SynchronizationStatusCode::class)),
            'countSuccessiveCompleteFailures' => fn(ParseNode $n) => $o->setCountSuccessiveCompleteFailures($n->getIntegerValue()),
            'escrowsPruned' => fn(ParseNode $n) => $o->setEscrowsPruned($n->getBooleanValue()),
            'lastExecution' => fn(ParseNode $n) => $o->setLastExecution($n->getObjectValue([SynchronizationTaskExecution::class, 'createFromDiscriminatorValue'])),
            'lastSuccessfulExecution' => fn(ParseNode $n) => $o->setLastSuccessfulExecution($n->getObjectValue([SynchronizationTaskExecution::class, 'createFromDiscriminatorValue'])),
            'lastSuccessfulExecutionWithExports' => fn(ParseNode $n) => $o->setLastSuccessfulExecutionWithExports($n->getObjectValue([SynchronizationTaskExecution::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'progress' => fn(ParseNode $n) => $o->setProgress($n->getCollectionOfObjectValues([SynchronizationProgress::class, 'createFromDiscriminatorValue'])),
            'quarantine' => fn(ParseNode $n) => $o->setQuarantine($n->getObjectValue([SynchronizationQuarantine::class, 'createFromDiscriminatorValue'])),
            'steadyStateFirstAchievedTime' => fn(ParseNode $n) => $o->setSteadyStateFirstAchievedTime($n->getDateTimeValue()),
            'steadyStateLastAchievedTime' => fn(ParseNode $n) => $o->setSteadyStateLastAchievedTime($n->getDateTimeValue()),
            'synchronizedEntryCountByType' => fn(ParseNode $n) => $o->setSynchronizedEntryCountByType($n->getCollectionOfObjectValues([StringKeyLongValuePair::class, 'createFromDiscriminatorValue'])),
            'troubleshootingUrl' => fn(ParseNode $n) => $o->setTroubleshootingUrl($n->getStringValue()),
        ];
    }

    /**
     * Gets the lastExecution property value. Details of the last execution of the job.
     * @return SynchronizationTaskExecution|null
    */
    public function getLastExecution(): ?SynchronizationTaskExecution {
        $val = $this->getBackingStore()->get('lastExecution');
        if (is_null($val) || $val instanceof SynchronizationTaskExecution) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastExecution'");
    }

    /**
     * Gets the lastSuccessfulExecution property value. Details of the last execution of this job, which didn't have any errors.
     * @return SynchronizationTaskExecution|null
    */
    public function getLastSuccessfulExecution(): ?SynchronizationTaskExecution {
        $val = $this->getBackingStore()->get('lastSuccessfulExecution');
        if (is_null($val) || $val instanceof SynchronizationTaskExecution) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSuccessfulExecution'");
    }

    /**
     * Gets the lastSuccessfulExecutionWithExports property value. Details of the last execution of the job, which exported objects into the target directory.
     * @return SynchronizationTaskExecution|null
    */
    public function getLastSuccessfulExecutionWithExports(): ?SynchronizationTaskExecution {
        $val = $this->getBackingStore()->get('lastSuccessfulExecutionWithExports');
        if (is_null($val) || $val instanceof SynchronizationTaskExecution) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSuccessfulExecutionWithExports'");
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
     * Gets the progress property value. Details of the progress of a job toward completion.
     * @return array<SynchronizationProgress>|null
    */
    public function getProgress(): ?array {
        $val = $this->getBackingStore()->get('progress');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SynchronizationProgress::class);
            /** @var array<SynchronizationProgress>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'progress'");
    }

    /**
     * Gets the quarantine property value. If job is in quarantine, quarantine details.
     * @return SynchronizationQuarantine|null
    */
    public function getQuarantine(): ?SynchronizationQuarantine {
        $val = $this->getBackingStore()->get('quarantine');
        if (is_null($val) || $val instanceof SynchronizationQuarantine) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'quarantine'");
    }

    /**
     * Gets the steadyStateFirstAchievedTime property value. The time when steady state (no more changes to the process) was first achieved. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getSteadyStateFirstAchievedTime(): ?DateTime {
        $val = $this->getBackingStore()->get('steadyStateFirstAchievedTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'steadyStateFirstAchievedTime'");
    }

    /**
     * Gets the steadyStateLastAchievedTime property value. The time when steady state (no more changes to the process) was last achieved. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getSteadyStateLastAchievedTime(): ?DateTime {
        $val = $this->getBackingStore()->get('steadyStateLastAchievedTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'steadyStateLastAchievedTime'");
    }

    /**
     * Gets the synchronizedEntryCountByType property value. Count of synchronized objects, listed by object type.
     * @return array<StringKeyLongValuePair>|null
    */
    public function getSynchronizedEntryCountByType(): ?array {
        $val = $this->getBackingStore()->get('synchronizedEntryCountByType');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, StringKeyLongValuePair::class);
            /** @var array<StringKeyLongValuePair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'synchronizedEntryCountByType'");
    }

    /**
     * Gets the troubleshootingUrl property value. In the event of an error, the URL with the troubleshooting steps for the issue.
     * @return string|null
    */
    public function getTroubleshootingUrl(): ?string {
        $val = $this->getBackingStore()->get('troubleshootingUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'troubleshootingUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('code', $this->getCode());
        $writer->writeIntegerValue('countSuccessiveCompleteFailures', $this->getCountSuccessiveCompleteFailures());
        $writer->writeBooleanValue('escrowsPruned', $this->getEscrowsPruned());
        $writer->writeObjectValue('lastExecution', $this->getLastExecution());
        $writer->writeObjectValue('lastSuccessfulExecution', $this->getLastSuccessfulExecution());
        $writer->writeObjectValue('lastSuccessfulExecutionWithExports', $this->getLastSuccessfulExecutionWithExports());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('progress', $this->getProgress());
        $writer->writeObjectValue('quarantine', $this->getQuarantine());
        $writer->writeDateTimeValue('steadyStateFirstAchievedTime', $this->getSteadyStateFirstAchievedTime());
        $writer->writeDateTimeValue('steadyStateLastAchievedTime', $this->getSteadyStateLastAchievedTime());
        $writer->writeCollectionOfObjectValues('synchronizedEntryCountByType', $this->getSynchronizedEntryCountByType());
        $writer->writeStringValue('troubleshootingUrl', $this->getTroubleshootingUrl());
        $writer->writeAdditionalData($this->getAdditionalData());
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
     * Sets the code property value. The code property
     * @param SynchronizationStatusCode|null $value Value to set for the code property.
    */
    public function setCode(?SynchronizationStatusCode $value): void {
        $this->getBackingStore()->set('code', $value);
    }

    /**
     * Sets the countSuccessiveCompleteFailures property value. Number of consecutive times this job failed.
     * @param int|null $value Value to set for the countSuccessiveCompleteFailures property.
    */
    public function setCountSuccessiveCompleteFailures(?int $value): void {
        $this->getBackingStore()->set('countSuccessiveCompleteFailures', $value);
    }

    /**
     * Sets the escrowsPruned property value. true if the job's escrows (object-level errors) were pruned during initial synchronization. Escrows can be pruned if during the initial synchronization, you reach the threshold of errors that would normally put the job in quarantine. Instead of going into quarantine, the synchronization process clears the job's errors and continues until the initial synchronization is completed. When the initial synchronization is completed, the job will pause and wait for the customer to clean up the errors.
     * @param bool|null $value Value to set for the escrowsPruned property.
    */
    public function setEscrowsPruned(?bool $value): void {
        $this->getBackingStore()->set('escrowsPruned', $value);
    }

    /**
     * Sets the lastExecution property value. Details of the last execution of the job.
     * @param SynchronizationTaskExecution|null $value Value to set for the lastExecution property.
    */
    public function setLastExecution(?SynchronizationTaskExecution $value): void {
        $this->getBackingStore()->set('lastExecution', $value);
    }

    /**
     * Sets the lastSuccessfulExecution property value. Details of the last execution of this job, which didn't have any errors.
     * @param SynchronizationTaskExecution|null $value Value to set for the lastSuccessfulExecution property.
    */
    public function setLastSuccessfulExecution(?SynchronizationTaskExecution $value): void {
        $this->getBackingStore()->set('lastSuccessfulExecution', $value);
    }

    /**
     * Sets the lastSuccessfulExecutionWithExports property value. Details of the last execution of the job, which exported objects into the target directory.
     * @param SynchronizationTaskExecution|null $value Value to set for the lastSuccessfulExecutionWithExports property.
    */
    public function setLastSuccessfulExecutionWithExports(?SynchronizationTaskExecution $value): void {
        $this->getBackingStore()->set('lastSuccessfulExecutionWithExports', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the progress property value. Details of the progress of a job toward completion.
     * @param array<SynchronizationProgress>|null $value Value to set for the progress property.
    */
    public function setProgress(?array $value): void {
        $this->getBackingStore()->set('progress', $value);
    }

    /**
     * Sets the quarantine property value. If job is in quarantine, quarantine details.
     * @param SynchronizationQuarantine|null $value Value to set for the quarantine property.
    */
    public function setQuarantine(?SynchronizationQuarantine $value): void {
        $this->getBackingStore()->set('quarantine', $value);
    }

    /**
     * Sets the steadyStateFirstAchievedTime property value. The time when steady state (no more changes to the process) was first achieved. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the steadyStateFirstAchievedTime property.
    */
    public function setSteadyStateFirstAchievedTime(?DateTime $value): void {
        $this->getBackingStore()->set('steadyStateFirstAchievedTime', $value);
    }

    /**
     * Sets the steadyStateLastAchievedTime property value. The time when steady state (no more changes to the process) was last achieved. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the steadyStateLastAchievedTime property.
    */
    public function setSteadyStateLastAchievedTime(?DateTime $value): void {
        $this->getBackingStore()->set('steadyStateLastAchievedTime', $value);
    }

    /**
     * Sets the synchronizedEntryCountByType property value. Count of synchronized objects, listed by object type.
     * @param array<StringKeyLongValuePair>|null $value Value to set for the synchronizedEntryCountByType property.
    */
    public function setSynchronizedEntryCountByType(?array $value): void {
        $this->getBackingStore()->set('synchronizedEntryCountByType', $value);
    }

    /**
     * Sets the troubleshootingUrl property value. In the event of an error, the URL with the troubleshooting steps for the issue.
     * @param string|null $value Value to set for the troubleshootingUrl property.
    */
    public function setTroubleshootingUrl(?string $value): void {
        $this->getBackingStore()->set('troubleshootingUrl', $value);
    }

}
