<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamFunSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $allowCustomMemes If set to true, enables users to include custom memes.
    */
    private ?bool $allowCustomMemes = null;
    
    /**
     * @var bool|null $allowGiphy If set to true, enables Giphy use.
    */
    private ?bool $allowGiphy = null;
    
    /**
     * @var bool|null $allowStickersAndMemes If set to true, enables users to include stickers and memes.
    */
    private ?bool $allowStickersAndMemes = null;
    
    /**
     * @var GiphyRatingType|null $giphyContentRating Giphy content rating. Possible values are: moderate, strict.
    */
    private ?GiphyRatingType $giphyContentRating = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new teamFunSettings and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.teamFunSettings');
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
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowCustomMemes property value. If set to true, enables users to include custom memes.
     * @return bool|null
    */
    public function getAllowCustomMemes(): ?bool {
        return $this->allowCustomMemes;
    }

    /**
     * Gets the allowGiphy property value. If set to true, enables Giphy use.
     * @return bool|null
    */
    public function getAllowGiphy(): ?bool {
        return $this->allowGiphy;
    }

    /**
     * Gets the allowStickersAndMemes property value. If set to true, enables users to include stickers and memes.
     * @return bool|null
    */
    public function getAllowStickersAndMemes(): ?bool {
        return $this->allowStickersAndMemes;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowCustomMemes' => function (ParseNode $n) use ($o) { $o->setAllowCustomMemes($n->getBooleanValue()); },
            'allowGiphy' => function (ParseNode $n) use ($o) { $o->setAllowGiphy($n->getBooleanValue()); },
            'allowStickersAndMemes' => function (ParseNode $n) use ($o) { $o->setAllowStickersAndMemes($n->getBooleanValue()); },
            'giphyContentRating' => function (ParseNode $n) use ($o) { $o->setGiphyContentRating($n->getEnumValue(GiphyRatingType::class)); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the giphyContentRating property value. Giphy content rating. Possible values are: moderate, strict.
     * @return GiphyRatingType|null
    */
    public function getGiphyContentRating(): ?GiphyRatingType {
        return $this->giphyContentRating;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowCustomMemes', $this->allowCustomMemes);
        $writer->writeBooleanValue('allowGiphy', $this->allowGiphy);
        $writer->writeBooleanValue('allowStickersAndMemes', $this->allowStickersAndMemes);
        $writer->writeEnumValue('giphyContentRating', $this->giphyContentRating);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the allowCustomMemes property value. If set to true, enables users to include custom memes.
     *  @param bool|null $value Value to set for the allowCustomMemes property.
    */
    public function setAllowCustomMemes(?bool $value ): void {
        $this->allowCustomMemes = $value;
    }

    /**
     * Sets the allowGiphy property value. If set to true, enables Giphy use.
     *  @param bool|null $value Value to set for the allowGiphy property.
    */
    public function setAllowGiphy(?bool $value ): void {
        $this->allowGiphy = $value;
    }

    /**
     * Sets the allowStickersAndMemes property value. If set to true, enables users to include stickers and memes.
     *  @param bool|null $value Value to set for the allowStickersAndMemes property.
    */
    public function setAllowStickersAndMemes(?bool $value ): void {
        $this->allowStickersAndMemes = $value;
    }

    /**
     * Sets the giphyContentRating property value. Giphy content rating. Possible values are: moderate, strict.
     *  @param GiphyRatingType|null $value Value to set for the giphyContentRating property.
    */
    public function setGiphyContentRating(?GiphyRatingType $value ): void {
        $this->giphyContentRating = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
