<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MediaContentRatingAustralia implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var RatingAustraliaMoviesType|null $movieRating Movies rating labels in Australia
    */
    private ?RatingAustraliaMoviesType $movieRating = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var RatingAustraliaTelevisionType|null $tvRating TV content rating labels in Australia
    */
    private ?RatingAustraliaTelevisionType $tvRating = null;
    
    /**
     * Instantiates a new mediaContentRatingAustralia and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.mediaContentRatingAustralia');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MediaContentRatingAustralia
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MediaContentRatingAustralia {
        return new MediaContentRatingAustralia();
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
            'movieRating' => fn(ParseNode $n) => $o->setMovieRating($n->getEnumValue(RatingAustraliaMoviesType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'tvRating' => fn(ParseNode $n) => $o->setTvRating($n->getEnumValue(RatingAustraliaTelevisionType::class)),
        ];
    }

    /**
     * Gets the movieRating property value. Movies rating labels in Australia
     * @return RatingAustraliaMoviesType|null
    */
    public function getMovieRating(): ?RatingAustraliaMoviesType {
        return $this->movieRating;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the tvRating property value. TV content rating labels in Australia
     * @return RatingAustraliaTelevisionType|null
    */
    public function getTvRating(): ?RatingAustraliaTelevisionType {
        return $this->tvRating;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('movieRating', $this->movieRating);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('tvRating', $this->tvRating);
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
     * Sets the movieRating property value. Movies rating labels in Australia
     *  @param RatingAustraliaMoviesType|null $value Value to set for the movieRating property.
    */
    public function setMovieRating(?RatingAustraliaMoviesType $value ): void {
        $this->movieRating = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the tvRating property value. TV content rating labels in Australia
     *  @param RatingAustraliaTelevisionType|null $value Value to set for the tvRating property.
    */
    public function setTvRating(?RatingAustraliaTelevisionType $value ): void {
        $this->tvRating = $value;
    }

}
