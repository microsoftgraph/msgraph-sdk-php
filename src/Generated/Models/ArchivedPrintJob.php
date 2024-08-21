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

class ArchivedPrintJob implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ArchivedPrintJob and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ArchivedPrintJob
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ArchivedPrintJob {
        return new ArchivedPrintJob();
    }

    /**
     * Gets the acquiredByPrinter property value. True if the job was acquired by a printer; false otherwise. Read-only.
     * @return bool|null
    */
    public function getAcquiredByPrinter(): ?bool {
        $val = $this->getBackingStore()->get('acquiredByPrinter');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'acquiredByPrinter'");
    }

    /**
     * Gets the acquiredDateTime property value. The dateTimeOffset when the job was acquired by the printer, if any. Read-only.
     * @return DateTime|null
    */
    public function getAcquiredDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('acquiredDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'acquiredDateTime'");
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
     * Gets the completionDateTime property value. The dateTimeOffset when the job was completed, canceled, or aborted. Read-only.
     * @return DateTime|null
    */
    public function getCompletionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('completionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completionDateTime'");
    }

    /**
     * Gets the copiesPrinted property value. The number of copies that were printed. Read-only.
     * @return int|null
    */
    public function getCopiesPrinted(): ?int {
        $val = $this->getBackingStore()->get('copiesPrinted');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'copiesPrinted'");
    }

    /**
     * Gets the createdBy property value. The user who created the print job. Read-only.
     * @return UserIdentity|null
    */
    public function getCreatedBy(): ?UserIdentity {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof UserIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. The dateTimeOffset when the job was created. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'acquiredByPrinter' => fn(ParseNode $n) => $o->setAcquiredByPrinter($n->getBooleanValue()),
            'acquiredDateTime' => fn(ParseNode $n) => $o->setAcquiredDateTime($n->getDateTimeValue()),
            'completionDateTime' => fn(ParseNode $n) => $o->setCompletionDateTime($n->getDateTimeValue()),
            'copiesPrinted' => fn(ParseNode $n) => $o->setCopiesPrinted($n->getIntegerValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([UserIdentity::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'printerId' => fn(ParseNode $n) => $o->setPrinterId($n->getStringValue()),
            'printerName' => fn(ParseNode $n) => $o->setPrinterName($n->getStringValue()),
            'processingState' => fn(ParseNode $n) => $o->setProcessingState($n->getEnumValue(PrintJobProcessingState::class)),
        ];
    }

    /**
     * Gets the id property value. The archived print job's GUID. Read-only.
     * @return string|null
    */
    public function getId(): ?string {
        $val = $this->getBackingStore()->get('id');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'id'");
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
     * Gets the printerId property value. The printer ID that the job was queued for. Read-only.
     * @return string|null
    */
    public function getPrinterId(): ?string {
        $val = $this->getBackingStore()->get('printerId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'printerId'");
    }

    /**
     * Gets the printerName property value. The printer name that the job was queued for. Read-only.
     * @return string|null
    */
    public function getPrinterName(): ?string {
        $val = $this->getBackingStore()->get('printerName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'printerName'");
    }

    /**
     * Gets the processingState property value. The processingState property
     * @return PrintJobProcessingState|null
    */
    public function getProcessingState(): ?PrintJobProcessingState {
        $val = $this->getBackingStore()->get('processingState');
        if (is_null($val) || $val instanceof PrintJobProcessingState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processingState'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('acquiredByPrinter', $this->getAcquiredByPrinter());
        $writer->writeDateTimeValue('acquiredDateTime', $this->getAcquiredDateTime());
        $writer->writeDateTimeValue('completionDateTime', $this->getCompletionDateTime());
        $writer->writeIntegerValue('copiesPrinted', $this->getCopiesPrinted());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('printerId', $this->getPrinterId());
        $writer->writeStringValue('printerName', $this->getPrinterName());
        $writer->writeEnumValue('processingState', $this->getProcessingState());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the acquiredByPrinter property value. True if the job was acquired by a printer; false otherwise. Read-only.
     * @param bool|null $value Value to set for the acquiredByPrinter property.
    */
    public function setAcquiredByPrinter(?bool $value): void {
        $this->getBackingStore()->set('acquiredByPrinter', $value);
    }

    /**
     * Sets the acquiredDateTime property value. The dateTimeOffset when the job was acquired by the printer, if any. Read-only.
     * @param DateTime|null $value Value to set for the acquiredDateTime property.
    */
    public function setAcquiredDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('acquiredDateTime', $value);
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
     * Sets the completionDateTime property value. The dateTimeOffset when the job was completed, canceled, or aborted. Read-only.
     * @param DateTime|null $value Value to set for the completionDateTime property.
    */
    public function setCompletionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completionDateTime', $value);
    }

    /**
     * Sets the copiesPrinted property value. The number of copies that were printed. Read-only.
     * @param int|null $value Value to set for the copiesPrinted property.
    */
    public function setCopiesPrinted(?int $value): void {
        $this->getBackingStore()->set('copiesPrinted', $value);
    }

    /**
     * Sets the createdBy property value. The user who created the print job. Read-only.
     * @param UserIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?UserIdentity $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The dateTimeOffset when the job was created. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the id property value. The archived print job's GUID. Read-only.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the printerId property value. The printer ID that the job was queued for. Read-only.
     * @param string|null $value Value to set for the printerId property.
    */
    public function setPrinterId(?string $value): void {
        $this->getBackingStore()->set('printerId', $value);
    }

    /**
     * Sets the printerName property value. The printer name that the job was queued for. Read-only.
     * @param string|null $value Value to set for the printerName property.
    */
    public function setPrinterName(?string $value): void {
        $this->getBackingStore()->set('printerName', $value);
    }

    /**
     * Sets the processingState property value. The processingState property
     * @param PrintJobProcessingState|null $value Value to set for the processingState property.
    */
    public function setProcessingState(?PrintJobProcessingState $value): void {
        $this->getBackingStore()->set('processingState', $value);
    }

}
