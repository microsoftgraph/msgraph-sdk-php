<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TeamFunSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new teamFunSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamFunSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamFunSettings {
        return new TeamFunSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the allowCustomMemes property value. If set to true, enables users to include custom memes.
     * @return bool|null
    */
    public function getAllowCustomMemes(): ?bool {
        $val = $this->getBackingStore()->get('allowCustomMemes');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowCustomMemes'");
    }

    /**
     * Gets the allowGiphy property value. If set to true, enables Giphy use.
     * @return bool|null
    */
    public function getAllowGiphy(): ?bool {
        $val = $this->getBackingStore()->get('allowGiphy');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowGiphy'");
    }

    /**
     * Gets the allowStickersAndMemes property value. If set to true, enables users to include stickers and memes.
     * @return bool|null
    */
    public function getAllowStickersAndMemes(): ?bool {
        $val = $this->getBackingStore()->get('allowStickersAndMemes');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowStickersAndMemes'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowCustomMemes' => fn(ParseNode $n) => $o->setAllowCustomMemes($n->getBooleanValue()),
            'allowGiphy' => fn(ParseNode $n) => $o->setAllowGiphy($n->getBooleanValue()),
            'allowStickersAndMemes' => fn(ParseNode $n) => $o->setAllowStickersAndMemes($n->getBooleanValue()),
            'giphyContentRating' => fn(ParseNode $n) => $o->setGiphyContentRating($n->getEnumValue(GiphyRatingType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the giphyContentRating property value. Giphy content rating. Possible values are: moderate, strict.
     * @return GiphyRatingType|null
    */
    public function getGiphyContentRating(): ?GiphyRatingType {
        $val = $this->getBackingStore()->get('giphyContentRating');
        if (is_null($val) || $val instanceof GiphyRatingType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'giphyContentRating'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowCustomMemes', $this->getAllowCustomMemes());
        $writer->writeBooleanValue('allowGiphy', $this->getAllowGiphy());
        $writer->writeBooleanValue('allowStickersAndMemes', $this->getAllowStickersAndMemes());
        $writer->writeEnumValue('giphyContentRating', $this->getGiphyContentRating());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the allowCustomMemes property value. If set to true, enables users to include custom memes.
     * @param bool|null $value Value to set for the allowCustomMemes property.
    */
    public function setAllowCustomMemes(?bool $value): void {
        $this->getBackingStore()->set('allowCustomMemes', $value);
    }

    /**
     * Sets the allowGiphy property value. If set to true, enables Giphy use.
     * @param bool|null $value Value to set for the allowGiphy property.
    */
    public function setAllowGiphy(?bool $value): void {
        $this->getBackingStore()->set('allowGiphy', $value);
    }

    /**
     * Sets the allowStickersAndMemes property value. If set to true, enables users to include stickers and memes.
     * @param bool|null $value Value to set for the allowStickersAndMemes property.
    */
    public function setAllowStickersAndMemes(?bool $value): void {
        $this->getBackingStore()->set('allowStickersAndMemes', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the giphyContentRating property value. Giphy content rating. Possible values are: moderate, strict.
     * @param GiphyRatingType|null $value Value to set for the giphyContentRating property.
    */
    public function setGiphyContentRating(?GiphyRatingType $value): void {
        $this->getBackingStore()->set('giphyContentRating', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
