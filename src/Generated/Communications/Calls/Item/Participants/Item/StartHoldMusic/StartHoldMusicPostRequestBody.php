<?php

namespace Microsoft\Graph\Generated\Communications\Calls\Item\Participants\Item\StartHoldMusic;

use Microsoft\Graph\Generated\Models\Prompt;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class StartHoldMusicPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new startHoldMusicPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StartHoldMusicPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StartHoldMusicPostRequestBody {
        return new StartHoldMusicPostRequestBody();
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
     * Gets the customPrompt property value. The customPrompt property
     * @return Prompt|null
    */
    public function getCustomPrompt(): ?Prompt {
        return $this->getBackingStore()->get('customPrompt');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'clientContext' => fn(ParseNode $n) => $o->setClientContext($n->getStringValue()),
            'customPrompt' => fn(ParseNode $n) => $o->setCustomPrompt($n->getObjectValue([Prompt::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('clientContext', $this->getClientContext());
        $writer->writeObjectValue('customPrompt', $this->getCustomPrompt());
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
     * Sets the customPrompt property value. The customPrompt property
     * @param Prompt|null $value Value to set for the customPrompt property.
    */
    public function setCustomPrompt(?Prompt $value): void {
        $this->getBackingStore()->set('customPrompt', $value);
    }

}
