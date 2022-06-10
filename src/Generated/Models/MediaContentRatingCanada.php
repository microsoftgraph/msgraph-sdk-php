<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MediaContentRatingCanada implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var RatingCanadaMoviesType|null $movieRating Movies rating selected for Canada. Possible values are: allAllowed, allBlocked, general, parentalGuidance, agesAbove14, agesAbove18, restricted.
    */
    private ?RatingCanadaMoviesType $movieRating = null;
    
    /**
     * @var RatingCanadaTelevisionType|null $tvRating TV rating selected for Canada. Possible values are: allAllowed, allBlocked, children, childrenAbove8, general, parentalGuidance, agesAbove14, agesAbove18.
    */
    private ?RatingCanadaTelevisionType $tvRating = null;
    
    /**
     * Instantiates a new mediaContentRatingCanada and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MediaContentRatingCanada
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MediaContentRatingCanada {
        return new MediaContentRatingCanada();
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
            'movieRating' => function (ParseNode $n) use ($o) { $o->setMovieRating($n->getEnumValue(RatingCanadaMoviesType::class)); },
            'tvRating' => function (ParseNode $n) use ($o) { $o->setTvRating($n->getEnumValue(RatingCanadaTelevisionType::class)); },
        ];
    }

    /**
     * Gets the movieRating property value. Movies rating selected for Canada. Possible values are: allAllowed, allBlocked, general, parentalGuidance, agesAbove14, agesAbove18, restricted.
     * @return RatingCanadaMoviesType|null
    */
    public function getMovieRating(): ?RatingCanadaMoviesType {
        return $this->movieRating;
    }

    /**
     * Gets the tvRating property value. TV rating selected for Canada. Possible values are: allAllowed, allBlocked, children, childrenAbove8, general, parentalGuidance, agesAbove14, agesAbove18.
     * @return RatingCanadaTelevisionType|null
    */
    public function getTvRating(): ?RatingCanadaTelevisionType {
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
     * Sets the movieRating property value. Movies rating selected for Canada. Possible values are: allAllowed, allBlocked, general, parentalGuidance, agesAbove14, agesAbove18, restricted.
     *  @param RatingCanadaMoviesType|null $value Value to set for the movieRating property.
    */
    public function setMovieRating(?RatingCanadaMoviesType $value ): void {
        $this->movieRating = $value;
    }

    /**
     * Sets the tvRating property value. TV rating selected for Canada. Possible values are: allAllowed, allBlocked, children, childrenAbove8, general, parentalGuidance, agesAbove14, agesAbove18.
     *  @param RatingCanadaTelevisionType|null $value Value to set for the tvRating property.
    */
    public function setTvRating(?RatingCanadaTelevisionType $value ): void {
        $this->tvRating = $value;
    }

}
