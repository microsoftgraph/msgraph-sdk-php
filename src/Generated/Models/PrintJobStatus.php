<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PrintJobStatus implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new printJobStatus and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.printJobStatus');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintJobStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrintJobStatus {
        return new PrintJobStatus();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
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
     * Gets the description property value. A human-readable description of the print job's current processing state. Read-only.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the details property value. Additional details for print job state. Valid values are described in the following table. Read-only.
     * @return array<PrintJobStateDetail>|null
    */
    public function getDetails(): ?array {
        return $this->getBackingStore()->get('details');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'details' => fn(ParseNode $n) => $o->setDetails($n->getCollectionOfEnumValues(PrintJobStateDetail::class)),
            'isAcquiredByPrinter' => fn(ParseNode $n) => $o->setIsAcquiredByPrinter($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(PrintJobProcessingState::class)),
        ];
    }

    /**
     * Gets the isAcquiredByPrinter property value. True if the job was acknowledged by a printer; false otherwise. Read-only.
     * @return bool|null
    */
    public function getIsAcquiredByPrinter(): ?bool {
        return $this->getBackingStore()->get('isAcquiredByPrinter');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the state property value. The state property
     * @return PrintJobProcessingState|null
    */
    public function getState(): ?PrintJobProcessingState {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeCollectionOfEnumValues('details', $this->getDetails());
        $writer->writeBooleanValue('isAcquiredByPrinter', $this->getIsAcquiredByPrinter());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the description property value. A human-readable description of the print job's current processing state. Read-only.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the details property value. Additional details for print job state. Valid values are described in the following table. Read-only.
     *  @param array<PrintJobStateDetail>|null $value Value to set for the details property.
    */
    public function setDetails(?array $value): void {
        $this->getBackingStore()->set('details', $value);
    }

    /**
     * Sets the isAcquiredByPrinter property value. True if the job was acknowledged by a printer; false otherwise. Read-only.
     *  @param bool|null $value Value to set for the isAcquiredByPrinter property.
    */
    public function setIsAcquiredByPrinter(?bool $value): void {
        $this->getBackingStore()->set('isAcquiredByPrinter', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the state property value. The state property
     *  @param PrintJobProcessingState|null $value Value to set for the state property.
    */
    public function setState(?PrintJobProcessingState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
