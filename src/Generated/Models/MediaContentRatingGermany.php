<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MediaContentRatingGermany implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var RatingGermanyMoviesType|null $movieRating Movies rating selected for Germany. Possible values are: allAllowed, allBlocked, general, agesAbove6, agesAbove12, agesAbove16, adults.
    */
    private ?RatingGermanyMoviesType $movieRating = null;
    
    /**
     * @var RatingGermanyTelevisionType|null $tvRating TV rating selected for Germany. Possible values are: allAllowed, allBlocked, general, agesAbove6, agesAbove12, agesAbove16, adults.
    */
    private ?RatingGermanyTelevisionType $tvRating = null;
    
    /**
     * Instantiates a new mediaContentRatingGermany and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MediaContentRatingGermany
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MediaContentRatingGermany {
        return new MediaContentRatingGermany();
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
            'movieRating' => function (ParseNode $n) use ($o) { $o->setMovieRating($n->getEnumValue(RatingGermanyMoviesType::class)); },
            'tvRating' => function (ParseNode $n) use ($o) { $o->setTvRating($n->getEnumValue(RatingGermanyTelevisionType::class)); },
        ];
    }

    /**
     * Gets the movieRating property value. Movies rating selected for Germany. Possible values are: allAllowed, allBlocked, general, agesAbove6, agesAbove12, agesAbove16, adults.
     * @return RatingGermanyMoviesType|null
    */
    public function getMovieRating(): ?RatingGermanyMoviesType {
        return $this->movieRating;
    }

    /**
     * Gets the tvRating property value. TV rating selected for Germany. Possible values are: allAllowed, allBlocked, general, agesAbove6, agesAbove12, agesAbove16, adults.
     * @return RatingGermanyTelevisionType|null
    */
    public function getTvRating(): ?RatingGermanyTelevisionType {
        return $this->tvRating;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('movieRating', $this->movieRating);
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
     * Sets the movieRating property value. Movies rating selected for Germany. Possible values are: allAllowed, allBlocked, general, agesAbove6, agesAbove12, agesAbove16, adults.
     *  @param RatingGermanyMoviesType|null $value Value to set for the movieRating property.
    */
    public function setMovieRating(?RatingGermanyMoviesType $value ): void {
        $this->movieRating = $value;
    }

    /**
     * Sets the tvRating property value. TV rating selected for Germany. Possible values are: allAllowed, allBlocked, general, agesAbove6, agesAbove12, agesAbove16, adults.
     *  @param RatingGermanyTelevisionType|null $value Value to set for the tvRating property.
    */
    public function setTvRating(?RatingGermanyTelevisionType $value ): void {
        $this->tvRating = $value;
    }

}
