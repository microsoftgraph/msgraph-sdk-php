<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ArchivedPrintJob implements AdditionalDataHolder, Parsable 
{
    /**
     * @var bool|null $acquiredByPrinter True if the job was acquired by a printer; false otherwise. Read-only.
    */
    private ?bool $acquiredByPrinter = null;
    
    /**
     * @var DateTime|null $acquiredDateTime The dateTimeOffset when the job was acquired by the printer, if any. Read-only.
    */
    private ?DateTime $acquiredDateTime = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $completionDateTime The dateTimeOffset when the job was completed, canceled or aborted. Read-only.
    */
    private ?DateTime $completionDateTime = null;
    
    /**
     * @var int|null $copiesPrinted The number of copies that were printed. Read-only.
    */
    private ?int $copiesPrinted = null;
    
    /**
     * @var UserIdentity|null $createdBy The user who created the print job. Read-only.
    */
    private ?UserIdentity $createdBy = null;
    
    /**
     * @var DateTime|null $createdDateTime The dateTimeOffset when the job was created. Read-only.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $id The archived print job's GUID. Read-only.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $printerId The printer ID that the job was queued for. Read-only.
    */
    private ?string $printerId = null;
    
    /**
     * @var PrintJobProcessingState|null $processingState The print job's final processing state. Read-only.
    */
    private ?PrintJobProcessingState $processingState = null;
    
    /**
     * Instantiates a new archivedPrintJob and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
        return $this->acquiredByPrinter;
    }

    /**
     * Gets the acquiredDateTime property value. The dateTimeOffset when the job was acquired by the printer, if any. Read-only.
     * @return DateTime|null
    */
    public function getAcquiredDateTime(): ?DateTime {
        return $this->acquiredDateTime;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the completionDateTime property value. The dateTimeOffset when the job was completed, canceled or aborted. Read-only.
     * @return DateTime|null
    */
    public function getCompletionDateTime(): ?DateTime {
        return $this->completionDateTime;
    }

    /**
     * Gets the copiesPrinted property value. The number of copies that were printed. Read-only.
     * @return int|null
    */
    public function getCopiesPrinted(): ?int {
        return $this->copiesPrinted;
    }

    /**
     * Gets the createdBy property value. The user who created the print job. Read-only.
     * @return UserIdentity|null
    */
    public function getCreatedBy(): ?UserIdentity {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. The dateTimeOffset when the job was created. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'acquiredByPrinter' => function (ParseNode $n) use ($o) { $o->setAcquiredByPrinter($n->getBooleanValue()); },
            'acquiredDateTime' => function (ParseNode $n) use ($o) { $o->setAcquiredDateTime($n->getDateTimeValue()); },
            'completionDateTime' => function (ParseNode $n) use ($o) { $o->setCompletionDateTime($n->getDateTimeValue()); },
            'copiesPrinted' => function (ParseNode $n) use ($o) { $o->setCopiesPrinted($n->getIntegerValue()); },
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getObjectValue(array(UserIdentity::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'id' => function (ParseNode $n) use ($o) { $o->setId($n->getStringValue()); },
            'printerId' => function (ParseNode $n) use ($o) { $o->setPrinterId($n->getStringValue()); },
            'processingState' => function (ParseNode $n) use ($o) { $o->setProcessingState($n->getEnumValue(PrintJobProcessingState::class)); },
        ];
    }

    /**
     * Gets the id property value. The archived print job's GUID. Read-only.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the printerId property value. The printer ID that the job was queued for. Read-only.
     * @return string|null
    */
    public function getPrinterId(): ?string {
        return $this->printerId;
    }

    /**
     * Gets the processingState property value. The print job's final processing state. Read-only.
     * @return PrintJobProcessingState|null
    */
    public function getProcessingState(): ?PrintJobProcessingState {
        return $this->processingState;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('acquiredByPrinter', $this->acquiredByPrinter);
        $writer->writeDateTimeValue('acquiredDateTime', $this->acquiredDateTime);
        $writer->writeDateTimeValue('completionDateTime', $this->completionDateTime);
        $writer->writeIntegerValue('copiesPrinted', $this->copiesPrinted);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('id', $this->id);
        $writer->writeStringValue('printerId', $this->printerId);
        $writer->writeEnumValue('processingState', $this->processingState);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the acquiredByPrinter property value. True if the job was acquired by a printer; false otherwise. Read-only.
     *  @param bool|null $value Value to set for the acquiredByPrinter property.
    */
    public function setAcquiredByPrinter(?bool $value ): void {
        $this->acquiredByPrinter = $value;
    }

    /**
     * Sets the acquiredDateTime property value. The dateTimeOffset when the job was acquired by the printer, if any. Read-only.
     *  @param DateTime|null $value Value to set for the acquiredDateTime property.
    */
    public function setAcquiredDateTime(?DateTime $value ): void {
        $this->acquiredDateTime = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the completionDateTime property value. The dateTimeOffset when the job was completed, canceled or aborted. Read-only.
     *  @param DateTime|null $value Value to set for the completionDateTime property.
    */
    public function setCompletionDateTime(?DateTime $value ): void {
        $this->completionDateTime = $value;
    }

    /**
     * Sets the copiesPrinted property value. The number of copies that were printed. Read-only.
     *  @param int|null $value Value to set for the copiesPrinted property.
    */
    public function setCopiesPrinted(?int $value ): void {
        $this->copiesPrinted = $value;
    }

    /**
     * Sets the createdBy property value. The user who created the print job. Read-only.
     *  @param UserIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?UserIdentity $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. The dateTimeOffset when the job was created. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the id property value. The archived print job's GUID. Read-only.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the printerId property value. The printer ID that the job was queued for. Read-only.
     *  @param string|null $value Value to set for the printerId property.
    */
    public function setPrinterId(?string $value ): void {
        $this->printerId = $value;
    }

    /**
     * Sets the processingState property value. The print job's final processing state. Read-only.
     *  @param PrintJobProcessingState|null $value Value to set for the processingState property.
    */
    public function setProcessingState(?PrintJobProcessingState $value ): void {
        $this->processingState = $value;
    }

}
