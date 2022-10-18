<?php

namespace Microsoft\Graph\Generated\Communications\Calls\Item\Answer;

use Microsoft\Graph\Generated\Models\IncomingCallOptions;
use Microsoft\Graph\Generated\Models\MediaConfig;
use Microsoft\Graph\Generated\Models\Modality;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AnswerPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<Modality>|null $acceptedModalities The acceptedModalities property
    */
    private ?array $acceptedModalities = null;
    
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $callbackUri The callbackUri property
    */
    private ?string $callbackUri = null;
    
    /**
     * @var IncomingCallOptions|null $callOptions The callOptions property
    */
    private ?IncomingCallOptions $callOptions = null;
    
    /**
     * @var MediaConfig|null $mediaConfig The mediaConfig property
    */
    private ?MediaConfig $mediaConfig = null;
    
    /**
     * @var int|null $participantCapacity The participantCapacity property
    */
    private ?int $participantCapacity = null;
    
    /**
     * Instantiates a new answerPostRequestBody and sets the default values.
    */
    public function __construct() {
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
        return $this->acceptedModalities;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the callbackUri property value. The callbackUri property
     * @return string|null
    */
    public function getCallbackUri(): ?string {
        return $this->callbackUri;
    }

    /**
     * Gets the callOptions property value. The callOptions property
     * @return IncomingCallOptions|null
    */
    public function getCallOptions(): ?IncomingCallOptions {
        return $this->callOptions;
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
        return $this->mediaConfig;
    }

    /**
     * Gets the participantCapacity property value. The participantCapacity property
     * @return int|null
    */
    public function getParticipantCapacity(): ?int {
        return $this->participantCapacity;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfEnumValues('acceptedModalities', $this->acceptedModalities);
        $writer->writeStringValue('callbackUri', $this->callbackUri);
        $writer->writeObjectValue('callOptions', $this->callOptions);
        $writer->writeObjectValue('mediaConfig', $this->mediaConfig);
        $writer->writeIntegerValue('participantCapacity', $this->participantCapacity);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the acceptedModalities property value. The acceptedModalities property
     *  @param array<Modality>|null $value Value to set for the acceptedModalities property.
    */
    public function setAcceptedModalities(?array $value ): void {
        $this->acceptedModalities = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the callbackUri property value. The callbackUri property
     *  @param string|null $value Value to set for the callbackUri property.
    */
    public function setCallbackUri(?string $value ): void {
        $this->callbackUri = $value;
    }

    /**
     * Sets the callOptions property value. The callOptions property
     *  @param IncomingCallOptions|null $value Value to set for the callOptions property.
    */
    public function setCallOptions(?IncomingCallOptions $value ): void {
        $this->callOptions = $value;
    }

    /**
     * Sets the mediaConfig property value. The mediaConfig property
     *  @param MediaConfig|null $value Value to set for the mediaConfig property.
    */
    public function setMediaConfig(?MediaConfig $value ): void {
        $this->mediaConfig = $value;
    }

    /**
     * Sets the participantCapacity property value. The participantCapacity property
     *  @param int|null $value Value to set for the participantCapacity property.
    */
    public function setParticipantCapacity(?int $value ): void {
        $this->participantCapacity = $value;
    }

}
