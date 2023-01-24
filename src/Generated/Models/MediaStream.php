<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class MediaStream implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new mediaStream and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MediaStream
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MediaStream {
        return new MediaStream();
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
     * Gets the direction property value. The direction property
     * @return MediaDirection|null
    */
    public function getDirection(): ?MediaDirection {
        return $this->getBackingStore()->get('direction');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'direction' => fn(ParseNode $n) => $o->setDirection($n->getEnumValue(MediaDirection::class)),
            'label' => fn(ParseNode $n) => $o->setLabel($n->getStringValue()),
            'mediaType' => fn(ParseNode $n) => $o->setMediaType($n->getEnumValue(Modality::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'serverMuted' => fn(ParseNode $n) => $o->setServerMuted($n->getBooleanValue()),
            'sourceId' => fn(ParseNode $n) => $o->setSourceId($n->getStringValue()),
        ];
    }

    /**
     * Gets the label property value. The media stream label.
     * @return string|null
    */
    public function getLabel(): ?string {
        return $this->getBackingStore()->get('label');
    }

    /**
     * Gets the mediaType property value. The mediaType property
     * @return Modality|null
    */
    public function getMediaType(): ?Modality {
        return $this->getBackingStore()->get('mediaType');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the serverMuted property value. If the media is muted by the server.
     * @return bool|null
    */
    public function getServerMuted(): ?bool {
        return $this->getBackingStore()->get('serverMuted');
    }

    /**
     * Gets the sourceId property value. The source ID.
     * @return string|null
    */
    public function getSourceId(): ?string {
        return $this->getBackingStore()->get('sourceId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('direction', $this->getDirection());
        $writer->writeStringValue('label', $this->getLabel());
        $writer->writeEnumValue('mediaType', $this->getMediaType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('serverMuted', $this->getServerMuted());
        $writer->writeStringValue('sourceId', $this->getSourceId());
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
     * Sets the direction property value. The direction property
     * @param MediaDirection|null $value Value to set for the direction property.
    */
    public function setDirection(?MediaDirection $value): void {
        $this->getBackingStore()->set('direction', $value);
    }

    /**
     * Sets the label property value. The media stream label.
     * @param string|null $value Value to set for the label property.
    */
    public function setLabel(?string $value): void {
        $this->getBackingStore()->set('label', $value);
    }

    /**
     * Sets the mediaType property value. The mediaType property
     * @param Modality|null $value Value to set for the mediaType property.
    */
    public function setMediaType(?Modality $value): void {
        $this->getBackingStore()->set('mediaType', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the serverMuted property value. If the media is muted by the server.
     * @param bool|null $value Value to set for the serverMuted property.
    */
    public function setServerMuted(?bool $value): void {
        $this->getBackingStore()->set('serverMuted', $value);
    }

    /**
     * Sets the sourceId property value. The source ID.
     * @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value): void {
        $this->getBackingStore()->set('sourceId', $value);
    }

}
