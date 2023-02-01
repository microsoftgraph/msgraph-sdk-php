<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class OnenotePatchContentCommand implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new onenotePatchContentCommand and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnenotePatchContentCommand
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnenotePatchContentCommand {
        return new OnenotePatchContentCommand();
    }

    /**
     * Gets the action property value. 
     * @return OnenotePatchActionType|null
    */
    public function getAction(): ?OnenotePatchActionType {
        return $this->getBackingStore()->get('action');
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
     * Gets the content property value. A string of well-formed HTML to add to the page, and any image or file binary data. If the content contains binary data, the request must be sent using the multipart/form-data content type with a 'Commands' part.
     * @return string|null
    */
    public function getContent(): ?string {
        return $this->getBackingStore()->get('content');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'action' => fn(ParseNode $n) => $o->setAction($n->getEnumValue(OnenotePatchActionType::class)),
            'content' => fn(ParseNode $n) => $o->setContent($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'position' => fn(ParseNode $n) => $o->setPosition($n->getEnumValue(OnenotePatchInsertPosition::class)),
            'target' => fn(ParseNode $n) => $o->setTarget($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the position property value. The location to add the supplied content, relative to the target element. The possible values are: after (default) or before.
     * @return OnenotePatchInsertPosition|null
    */
    public function getPosition(): ?OnenotePatchInsertPosition {
        return $this->getBackingStore()->get('position');
    }

    /**
     * Gets the target property value. The element to update. Must be the #<data-id> or the generated <id> of the element, or the body or title keyword.
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
        $writer->writeEnumValue('action', $this->getAction());
        $writer->writeStringValue('content', $this->getContent());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('position', $this->getPosition());
        $writer->writeStringValue('target', $this->getTarget());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the action property value. 
     * @param OnenotePatchActionType|null $value Value to set for the action property.
    */
    public function setAction(?OnenotePatchActionType $value): void {
        $this->getBackingStore()->set('action', $value);
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
     * Sets the content property value. A string of well-formed HTML to add to the page, and any image or file binary data. If the content contains binary data, the request must be sent using the multipart/form-data content type with a 'Commands' part.
     * @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the position property value. The location to add the supplied content, relative to the target element. The possible values are: after (default) or before.
     * @param OnenotePatchInsertPosition|null $value Value to set for the position property.
    */
    public function setPosition(?OnenotePatchInsertPosition $value): void {
        $this->getBackingStore()->set('position', $value);
    }

    /**
     * Sets the target property value. The element to update. Must be the #<data-id> or the generated <id> of the element, or the body or title keyword.
     * @param string|null $value Value to set for the target property.
    */
    public function setTarget(?string $value): void {
        $this->getBackingStore()->set('target', $value);
    }

}
