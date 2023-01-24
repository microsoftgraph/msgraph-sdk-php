<?php

namespace Microsoft\Graph\Generated\Communications\Calls\Item\UpdateRecordingStatus;

use Microsoft\Graph\Generated\Models\RecordingStatus;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UpdateRecordingStatusPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new updateRecordingStatusPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateRecordingStatusPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateRecordingStatusPostRequestBody {
        return new UpdateRecordingStatusPostRequestBody();
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
     * Gets the clientContext property value. The clientContext property
     * @return string|null
    */
    public function getClientContext(): ?string {
        return $this->getBackingStore()->get('clientContext');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'clientContext' => fn(ParseNode $n) => $o->setClientContext($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(RecordingStatus::class)),
        ];
    }

    /**
     * Gets the status property value. The status property
     * @return RecordingStatus|null
    */
    public function getStatus(): ?RecordingStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('clientContext', $this->getClientContext());
        $writer->writeEnumValue('status', $this->getStatus());
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
     * Sets the clientContext property value. The clientContext property
     * @param string|null $value Value to set for the clientContext property.
    */
    public function setClientContext(?string $value): void {
        $this->getBackingStore()->set('clientContext', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param RecordingStatus|null $value Value to set for the status property.
    */
    public function setStatus(?RecordingStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
