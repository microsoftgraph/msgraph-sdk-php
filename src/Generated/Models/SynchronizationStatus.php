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
        return $this->getBackingStore()->get('additionalData');
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
        return $this->getBackingStore()->get('code');
    }

    /**
     * Gets the countSuccessiveCompleteFailures property value. The countSuccessiveCompleteFailures property
     * @return int|null
    */
    public function getCountSuccessiveCompleteFailures(): ?int {
        return $this->getBackingStore()->get('countSuccessiveCompleteFailures');
    }

    /**
     * Gets the escrowsPruned property value. The escrowsPruned property
     * @return bool|null
    */
    public function getEscrowsPruned(): ?bool {
        return $this->getBackingStore()->get('escrowsPruned');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
     * Gets the lastExecution property value. The lastExecution property
     * @return SynchronizationTaskExecution|null
    */
    public function getLastExecution(): ?SynchronizationTaskExecution {
        return $this->getBackingStore()->get('lastExecution');
    }

    /**
     * Gets the lastSuccessfulExecution property value. The lastSuccessfulExecution property
     * @return SynchronizationTaskExecution|null
    */
    public function getLastSuccessfulExecution(): ?SynchronizationTaskExecution {
        return $this->getBackingStore()->get('lastSuccessfulExecution');
    }

    /**
     * Gets the lastSuccessfulExecutionWithExports property value. The lastSuccessfulExecutionWithExports property
     * @return SynchronizationTaskExecution|null
    */
    public function getLastSuccessfulExecutionWithExports(): ?SynchronizationTaskExecution {
        return $this->getBackingStore()->get('lastSuccessfulExecutionWithExports');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the progress property value. The progress property
     * @return array<SynchronizationProgress>|null
    */
    public function getProgress(): ?array {
        return $this->getBackingStore()->get('progress');
    }

    /**
     * Gets the quarantine property value. The quarantine property
     * @return SynchronizationQuarantine|null
    */
    public function getQuarantine(): ?SynchronizationQuarantine {
        return $this->getBackingStore()->get('quarantine');
    }

    /**
     * Gets the steadyStateFirstAchievedTime property value. The steadyStateFirstAchievedTime property
     * @return DateTime|null
    */
    public function getSteadyStateFirstAchievedTime(): ?DateTime {
        return $this->getBackingStore()->get('steadyStateFirstAchievedTime');
    }

    /**
     * Gets the steadyStateLastAchievedTime property value. The steadyStateLastAchievedTime property
     * @return DateTime|null
    */
    public function getSteadyStateLastAchievedTime(): ?DateTime {
        return $this->getBackingStore()->get('steadyStateLastAchievedTime');
    }

    /**
     * Gets the synchronizedEntryCountByType property value. The synchronizedEntryCountByType property
     * @return array<StringKeyLongValuePair>|null
    */
    public function getSynchronizedEntryCountByType(): ?array {
        return $this->getBackingStore()->get('synchronizedEntryCountByType');
    }

    /**
     * Gets the troubleshootingUrl property value. The troubleshootingUrl property
     * @return string|null
    */
    public function getTroubleshootingUrl(): ?string {
        return $this->getBackingStore()->get('troubleshootingUrl');
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
     * Sets the countSuccessiveCompleteFailures property value. The countSuccessiveCompleteFailures property
     * @param int|null $value Value to set for the countSuccessiveCompleteFailures property.
    */
    public function setCountSuccessiveCompleteFailures(?int $value): void {
        $this->getBackingStore()->set('countSuccessiveCompleteFailures', $value);
    }

    /**
     * Sets the escrowsPruned property value. The escrowsPruned property
     * @param bool|null $value Value to set for the escrowsPruned property.
    */
    public function setEscrowsPruned(?bool $value): void {
        $this->getBackingStore()->set('escrowsPruned', $value);
    }

    /**
     * Sets the lastExecution property value. The lastExecution property
     * @param SynchronizationTaskExecution|null $value Value to set for the lastExecution property.
    */
    public function setLastExecution(?SynchronizationTaskExecution $value): void {
        $this->getBackingStore()->set('lastExecution', $value);
    }

    /**
     * Sets the lastSuccessfulExecution property value. The lastSuccessfulExecution property
     * @param SynchronizationTaskExecution|null $value Value to set for the lastSuccessfulExecution property.
    */
    public function setLastSuccessfulExecution(?SynchronizationTaskExecution $value): void {
        $this->getBackingStore()->set('lastSuccessfulExecution', $value);
    }

    /**
     * Sets the lastSuccessfulExecutionWithExports property value. The lastSuccessfulExecutionWithExports property
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
     * Sets the progress property value. The progress property
     * @param array<SynchronizationProgress>|null $value Value to set for the progress property.
    */
    public function setProgress(?array $value): void {
        $this->getBackingStore()->set('progress', $value);
    }

    /**
     * Sets the quarantine property value. The quarantine property
     * @param SynchronizationQuarantine|null $value Value to set for the quarantine property.
    */
    public function setQuarantine(?SynchronizationQuarantine $value): void {
        $this->getBackingStore()->set('quarantine', $value);
    }

    /**
     * Sets the steadyStateFirstAchievedTime property value. The steadyStateFirstAchievedTime property
     * @param DateTime|null $value Value to set for the steadyStateFirstAchievedTime property.
    */
    public function setSteadyStateFirstAchievedTime(?DateTime $value): void {
        $this->getBackingStore()->set('steadyStateFirstAchievedTime', $value);
    }

    /**
     * Sets the steadyStateLastAchievedTime property value. The steadyStateLastAchievedTime property
     * @param DateTime|null $value Value to set for the steadyStateLastAchievedTime property.
    */
    public function setSteadyStateLastAchievedTime(?DateTime $value): void {
        $this->getBackingStore()->set('steadyStateLastAchievedTime', $value);
    }

    /**
     * Sets the synchronizedEntryCountByType property value. The synchronizedEntryCountByType property
     * @param array<StringKeyLongValuePair>|null $value Value to set for the synchronizedEntryCountByType property.
    */
    public function setSynchronizedEntryCountByType(?array $value): void {
        $this->getBackingStore()->set('synchronizedEntryCountByType', $value);
    }

    /**
     * Sets the troubleshootingUrl property value. The troubleshootingUrl property
     * @param string|null $value Value to set for the troubleshootingUrl property.
    */
    public function setTroubleshootingUrl(?string $value): void {
        $this->getBackingStore()->set('troubleshootingUrl', $value);
    }

}
