<?php

namespace Microsoft\Graph\Generated\Models\ODataErrors;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class InnerError implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new InnerError and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InnerError
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InnerError {
        return new InnerError();
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
     * Gets the client-request-id property value. Client request Id as sent by the client application.
     * @return string|null
    */
    public function getClientRequestId(): ?string {
        return $this->getBackingStore()->get('clientRequestId');
    }

    /**
     * Gets the date property value. Date when the error occured.
     * @return DateTime|null
    */
    public function getDate(): ?DateTime {
        return $this->getBackingStore()->get('date');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'client-request-id' => fn(ParseNode $n) => $o->setClientRequestId($n->getStringValue()),
            'date' => fn(ParseNode $n) => $o->setDate($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'request-id' => fn(ParseNode $n) => $o->setRequestId($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the request-id property value. Request Id as tracked internally by the service
     * @return string|null
    */
    public function getRequestId(): ?string {
        return $this->getBackingStore()->get('requestId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('client-request-id', $this->getClientRequestId());
        $writer->writeDateTimeValue('date', $this->getDate());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('request-id', $this->getRequestId());
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
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the client-request-id property value. Client request Id as sent by the client application.
     *  @param string|null $value Value to set for the clientRequestId property.
    */
    public function setClientRequestId(?string $value): void {
        $this->getBackingStore()->set('clientRequestId', $value);
    }

    /**
     * Sets the date property value. Date when the error occured.
     *  @param DateTime|null $value Value to set for the Date property.
    */
    public function setDate(?DateTime $value): void {
        $this->getBackingStore()->set('date', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the request-id property value. Request Id as tracked internally by the service
     *  @param string|null $value Value to set for the requestId property.
    */
    public function setRequestId(?string $value): void {
        $this->getBackingStore()->set('requestId', $value);
    }

}
