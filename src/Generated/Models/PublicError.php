<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PublicError implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new publicError and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PublicError
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PublicError {
        return new PublicError();
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
     * Gets the code property value. Represents the error code.
     * @return string|null
    */
    public function getCode(): ?string {
        return $this->getBackingStore()->get('code');
    }

    /**
     * Gets the details property value. Details of the error.
     * @return array<PublicErrorDetail>|null
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
            'code' => fn(ParseNode $n) => $o->setCode($n->getStringValue()),
            'details' => fn(ParseNode $n) => $o->setDetails($n->getCollectionOfObjectValues([PublicErrorDetail::class, 'createFromDiscriminatorValue'])),
            'innerError' => fn(ParseNode $n) => $o->setInnerError($n->getObjectValue([PublicInnerError::class, 'createFromDiscriminatorValue'])),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'target' => fn(ParseNode $n) => $o->setTarget($n->getStringValue()),
        ];
    }

    /**
     * Gets the innerError property value. Details of the inner error.
     * @return PublicInnerError|null
    */
    public function getInnerError(): ?PublicInnerError {
        return $this->getBackingStore()->get('innerError');
    }

    /**
     * Gets the message property value. A non-localized message for the developer.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->getBackingStore()->get('message');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the target property value. The target of the error.
     * @return string|null
    */
    public function getTarget(): ?string {
        return $this->getBackingStore()->get('target');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('code', $this->getCode());
        $writer->writeCollectionOfObjectValues('details', $this->getDetails());
        $writer->writeObjectValue('innerError', $this->getInnerError());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('target', $this->getTarget());
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
     * Sets the code property value. Represents the error code.
     * @param string|null $value Value to set for the code property.
    */
    public function setCode(?string $value): void {
        $this->getBackingStore()->set('code', $value);
    }

    /**
     * Sets the details property value. Details of the error.
     * @param array<PublicErrorDetail>|null $value Value to set for the details property.
    */
    public function setDetails(?array $value): void {
        $this->getBackingStore()->set('details', $value);
    }

    /**
     * Sets the innerError property value. Details of the inner error.
     * @param PublicInnerError|null $value Value to set for the innerError property.
    */
    public function setInnerError(?PublicInnerError $value): void {
        $this->getBackingStore()->set('innerError', $value);
    }

    /**
     * Sets the message property value. A non-localized message for the developer.
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->getBackingStore()->set('message', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the target property value. The target of the error.
     * @param string|null $value Value to set for the target property.
    */
    public function setTarget(?string $value): void {
        $this->getBackingStore()->set('target', $value);
    }

}
