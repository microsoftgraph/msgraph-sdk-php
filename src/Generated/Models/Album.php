<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Album implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $coverImageItemId Unique identifier of the [driveItem][] that is the cover of the album.
    */
    private ?string $coverImageItemId = null;
    
    /**
     * Instantiates a new album and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Album
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Album {
        return new Album();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the coverImageItemId property value. Unique identifier of the [driveItem][] that is the cover of the album.
     * @return string|null
    */
    public function getCoverImageItemId(): ?string {
        return $this->coverImageItemId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'coverImageItemId' => function (ParseNode $n) use ($o) { $o->setCoverImageItemId($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('coverImageItemId', $this->coverImageItemId);
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
     * Sets the coverImageItemId property value. Unique identifier of the [driveItem][] that is the cover of the album.
     *  @param string|null $value Value to set for the coverImageItemId property.
    */
    public function setCoverImageItemId(?string $value ): void {
        $this->coverImageItemId = $value;
    }

}
