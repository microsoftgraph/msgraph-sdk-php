<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BroadcastMeetingCaptionSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $isCaptionEnabled Indicates whether captions are enabled for this Teams live event.
    */
    private ?bool $isCaptionEnabled = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $spokenLanguage The spoken language.
    */
    private ?string $spokenLanguage = null;
    
    /**
     * @var array<string>|null $translationLanguages The translation languages (choose up to 6).
    */
    private ?array $translationLanguages = null;
    
    /**
     * Instantiates a new broadcastMeetingCaptionSettings and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.broadcastMeetingCaptionSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BroadcastMeetingCaptionSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BroadcastMeetingCaptionSettings {
        return new BroadcastMeetingCaptionSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'isCaptionEnabled' => function (ParseNode $n) use ($o) { $o->setIsCaptionEnabled($n->getBooleanValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'spokenLanguage' => function (ParseNode $n) use ($o) { $o->setSpokenLanguage($n->getStringValue()); },
            'translationLanguages' => function (ParseNode $n) use ($o) { $o->setTranslationLanguages($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the isCaptionEnabled property value. Indicates whether captions are enabled for this Teams live event.
     * @return bool|null
    */
    public function getIsCaptionEnabled(): ?bool {
        return $this->isCaptionEnabled;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the spokenLanguage property value. The spoken language.
     * @return string|null
    */
    public function getSpokenLanguage(): ?string {
        return $this->spokenLanguage;
    }

    /**
     * Gets the translationLanguages property value. The translation languages (choose up to 6).
     * @return array<string>|null
    */
    public function getTranslationLanguages(): ?array {
        return $this->translationLanguages;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isCaptionEnabled', $this->isCaptionEnabled);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('spokenLanguage', $this->spokenLanguage);
        $writer->writeCollectionOfPrimitiveValues('translationLanguages', $this->translationLanguages);
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
     * Sets the isCaptionEnabled property value. Indicates whether captions are enabled for this Teams live event.
     *  @param bool|null $value Value to set for the isCaptionEnabled property.
    */
    public function setIsCaptionEnabled(?bool $value ): void {
        $this->isCaptionEnabled = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the spokenLanguage property value. The spoken language.
     *  @param string|null $value Value to set for the spokenLanguage property.
    */
    public function setSpokenLanguage(?string $value ): void {
        $this->spokenLanguage = $value;
    }

    /**
     * Sets the translationLanguages property value. The translation languages (choose up to 6).
     *  @param array<string>|null $value Value to set for the translationLanguages property.
    */
    public function setTranslationLanguages(?array $value ): void {
        $this->translationLanguages = $value;
    }

}
