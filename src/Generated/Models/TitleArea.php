<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TitleArea implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new TitleArea and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TitleArea
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TitleArea {
        return new TitleArea();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the alternativeText property value. The alternativeText property
     * @return string|null
    */
    public function getAlternativeText(): ?string {
        $val = $this->getBackingStore()->get('alternativeText');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alternativeText'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the enableGradientEffect property value. The enableGradientEffect property
     * @return bool|null
    */
    public function getEnableGradientEffect(): ?bool {
        $val = $this->getBackingStore()->get('enableGradientEffect');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enableGradientEffect'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'alternativeText' => fn(ParseNode $n) => $o->setAlternativeText($n->getStringValue()),
            'enableGradientEffect' => fn(ParseNode $n) => $o->setEnableGradientEffect($n->getBooleanValue()),
            'imageWebUrl' => fn(ParseNode $n) => $o->setImageWebUrl($n->getStringValue()),
            'layout' => fn(ParseNode $n) => $o->setLayout($n->getEnumValue(TitleAreaLayoutType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'serverProcessedContent' => fn(ParseNode $n) => $o->setServerProcessedContent($n->getObjectValue([ServerProcessedContent::class, 'createFromDiscriminatorValue'])),
            'showAuthor' => fn(ParseNode $n) => $o->setShowAuthor($n->getBooleanValue()),
            'showPublishedDate' => fn(ParseNode $n) => $o->setShowPublishedDate($n->getBooleanValue()),
            'showTextBlockAboveTitle' => fn(ParseNode $n) => $o->setShowTextBlockAboveTitle($n->getBooleanValue()),
            'textAboveTitle' => fn(ParseNode $n) => $o->setTextAboveTitle($n->getStringValue()),
            'textAlignment' => fn(ParseNode $n) => $o->setTextAlignment($n->getEnumValue(TitleAreaTextAlignmentType::class)),
        ];
    }

    /**
     * Gets the imageWebUrl property value. The imageWebUrl property
     * @return string|null
    */
    public function getImageWebUrl(): ?string {
        $val = $this->getBackingStore()->get('imageWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'imageWebUrl'");
    }

    /**
     * Gets the layout property value. The layout property
     * @return TitleAreaLayoutType|null
    */
    public function getLayout(): ?TitleAreaLayoutType {
        $val = $this->getBackingStore()->get('layout');
        if (is_null($val) || $val instanceof TitleAreaLayoutType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'layout'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the serverProcessedContent property value. The serverProcessedContent property
     * @return ServerProcessedContent|null
    */
    public function getServerProcessedContent(): ?ServerProcessedContent {
        $val = $this->getBackingStore()->get('serverProcessedContent');
        if (is_null($val) || $val instanceof ServerProcessedContent) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serverProcessedContent'");
    }

    /**
     * Gets the showAuthor property value. The showAuthor property
     * @return bool|null
    */
    public function getShowAuthor(): ?bool {
        $val = $this->getBackingStore()->get('showAuthor');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'showAuthor'");
    }

    /**
     * Gets the showPublishedDate property value. The showPublishedDate property
     * @return bool|null
    */
    public function getShowPublishedDate(): ?bool {
        $val = $this->getBackingStore()->get('showPublishedDate');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'showPublishedDate'");
    }

    /**
     * Gets the showTextBlockAboveTitle property value. The showTextBlockAboveTitle property
     * @return bool|null
    */
    public function getShowTextBlockAboveTitle(): ?bool {
        $val = $this->getBackingStore()->get('showTextBlockAboveTitle');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'showTextBlockAboveTitle'");
    }

    /**
     * Gets the textAboveTitle property value. The textAboveTitle property
     * @return string|null
    */
    public function getTextAboveTitle(): ?string {
        $val = $this->getBackingStore()->get('textAboveTitle');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'textAboveTitle'");
    }

    /**
     * Gets the textAlignment property value. The textAlignment property
     * @return TitleAreaTextAlignmentType|null
    */
    public function getTextAlignment(): ?TitleAreaTextAlignmentType {
        $val = $this->getBackingStore()->get('textAlignment');
        if (is_null($val) || $val instanceof TitleAreaTextAlignmentType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'textAlignment'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('alternativeText', $this->getAlternativeText());
        $writer->writeBooleanValue('enableGradientEffect', $this->getEnableGradientEffect());
        $writer->writeStringValue('imageWebUrl', $this->getImageWebUrl());
        $writer->writeEnumValue('layout', $this->getLayout());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('serverProcessedContent', $this->getServerProcessedContent());
        $writer->writeBooleanValue('showAuthor', $this->getShowAuthor());
        $writer->writeBooleanValue('showPublishedDate', $this->getShowPublishedDate());
        $writer->writeBooleanValue('showTextBlockAboveTitle', $this->getShowTextBlockAboveTitle());
        $writer->writeStringValue('textAboveTitle', $this->getTextAboveTitle());
        $writer->writeEnumValue('textAlignment', $this->getTextAlignment());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the alternativeText property value. The alternativeText property
     * @param string|null $value Value to set for the alternativeText property.
    */
    public function setAlternativeText(?string $value): void {
        $this->getBackingStore()->set('alternativeText', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the enableGradientEffect property value. The enableGradientEffect property
     * @param bool|null $value Value to set for the enableGradientEffect property.
    */
    public function setEnableGradientEffect(?bool $value): void {
        $this->getBackingStore()->set('enableGradientEffect', $value);
    }

    /**
     * Sets the imageWebUrl property value. The imageWebUrl property
     * @param string|null $value Value to set for the imageWebUrl property.
    */
    public function setImageWebUrl(?string $value): void {
        $this->getBackingStore()->set('imageWebUrl', $value);
    }

    /**
     * Sets the layout property value. The layout property
     * @param TitleAreaLayoutType|null $value Value to set for the layout property.
    */
    public function setLayout(?TitleAreaLayoutType $value): void {
        $this->getBackingStore()->set('layout', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the serverProcessedContent property value. The serverProcessedContent property
     * @param ServerProcessedContent|null $value Value to set for the serverProcessedContent property.
    */
    public function setServerProcessedContent(?ServerProcessedContent $value): void {
        $this->getBackingStore()->set('serverProcessedContent', $value);
    }

    /**
     * Sets the showAuthor property value. The showAuthor property
     * @param bool|null $value Value to set for the showAuthor property.
    */
    public function setShowAuthor(?bool $value): void {
        $this->getBackingStore()->set('showAuthor', $value);
    }

    /**
     * Sets the showPublishedDate property value. The showPublishedDate property
     * @param bool|null $value Value to set for the showPublishedDate property.
    */
    public function setShowPublishedDate(?bool $value): void {
        $this->getBackingStore()->set('showPublishedDate', $value);
    }

    /**
     * Sets the showTextBlockAboveTitle property value. The showTextBlockAboveTitle property
     * @param bool|null $value Value to set for the showTextBlockAboveTitle property.
    */
    public function setShowTextBlockAboveTitle(?bool $value): void {
        $this->getBackingStore()->set('showTextBlockAboveTitle', $value);
    }

    /**
     * Sets the textAboveTitle property value. The textAboveTitle property
     * @param string|null $value Value to set for the textAboveTitle property.
    */
    public function setTextAboveTitle(?string $value): void {
        $this->getBackingStore()->set('textAboveTitle', $value);
    }

    /**
     * Sets the textAlignment property value. The textAlignment property
     * @param TitleAreaTextAlignmentType|null $value Value to set for the textAlignment property.
    */
    public function setTextAlignment(?TitleAreaTextAlignmentType $value): void {
        $this->getBackingStore()->set('textAlignment', $value);
    }

}
