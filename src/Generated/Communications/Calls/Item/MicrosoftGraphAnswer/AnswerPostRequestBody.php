<?php

namespace Microsoft\Graph\Generated\Communications\Calls\Item\MicrosoftGraphAnswer;

use Microsoft\Graph\Generated\Models\IncomingCallOptions;
use Microsoft\Graph\Generated\Models\MediaConfig;
use Microsoft\Graph\Generated\Models\Modality;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AnswerPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new answerPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AnswerPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AnswerPostRequestBody {
        return new AnswerPostRequestBody();
    }

    /**
     * Gets the acceptedModalities property value. The acceptedModalities property
     * @return array<Modality>|null
    */
    public function getAcceptedModalities(): ?array {
        return $this->getBackingStore()->get('acceptedModalities');
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
     * Gets the callbackUri property value. The callbackUri property
     * @return string|null
    */
    public function getCallbackUri(): ?string {
        return $this->getBackingStore()->get('callbackUri');
    }

    /**
     * Gets the callOptions property value. The callOptions property
     * @return IncomingCallOptions|null
    */
    public function getCallOptions(): ?IncomingCallOptions {
        return $this->getBackingStore()->get('callOptions');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'acceptedModalities' => fn(ParseNode $n) => $o->setAcceptedModalities($n->getCollectionOfEnumValues(Modality::class)),
            'callbackUri' => fn(ParseNode $n) => $o->setCallbackUri($n->getStringValue()),
            'callOptions' => fn(ParseNode $n) => $o->setCallOptions($n->getObjectValue([IncomingCallOptions::class, 'createFromDiscriminatorValue'])),
            'mediaConfig' => fn(ParseNode $n) => $o->setMediaConfig($n->getObjectValue([MediaConfig::class, 'createFromDiscriminatorValue'])),
            'participantCapacity' => fn(ParseNode $n) => $o->setParticipantCapacity($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the mediaConfig property value. The mediaConfig property
     * @return MediaConfig|null
    */
    public function getMediaConfig(): ?MediaConfig {
        return $this->getBackingStore()->get('mediaConfig');
    }

    /**
     * Gets the participantCapacity property value. The participantCapacity property
     * @return int|null
    */
    public function getParticipantCapacity(): ?int {
        return $this->getBackingStore()->get('participantCapacity');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfEnumValues('acceptedModalities', $this->getAcceptedModalities());
        $writer->writeStringValue('callbackUri', $this->getCallbackUri());
        $writer->writeObjectValue('callOptions', $this->getCallOptions());
        $writer->writeObjectValue('mediaConfig', $this->getMediaConfig());
        $writer->writeIntegerValue('participantCapacity', $this->getParticipantCapacity());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the acceptedModalities property value. The acceptedModalities property
     * @param array<Modality>|null $value Value to set for the acceptedModalities property.
    */
    public function setAcceptedModalities(?array $value): void {
        $this->getBackingStore()->set('acceptedModalities', $value);
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
     * Sets the callbackUri property value. The callbackUri property
     * @param string|null $value Value to set for the callbackUri property.
    */
    public function setCallbackUri(?string $value): void {
        $this->getBackingStore()->set('callbackUri', $value);
    }

    /**
     * Sets the callOptions property value. The callOptions property
     * @param IncomingCallOptions|null $value Value to set for the callOptions property.
    */
    public function setCallOptions(?IncomingCallOptions $value): void {
        $this->getBackingStore()->set('callOptions', $value);
    }

    /**
     * Sets the mediaConfig property value. The mediaConfig property
     * @param MediaConfig|null $value Value to set for the mediaConfig property.
    */
    public function setMediaConfig(?MediaConfig $value): void {
        $this->getBackingStore()->set('mediaConfig', $value);
    }

    /**
     * Sets the participantCapacity property value. The participantCapacity property
     * @param int|null $value Value to set for the participantCapacity property.
    */
    public function setParticipantCapacity(?int $value): void {
        $this->getBackingStore()->set('participantCapacity', $value);
    }

}
