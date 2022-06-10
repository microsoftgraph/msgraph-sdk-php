<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class HyperlinkOrPictureColumn implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $isPicture Specifies whether the display format used for URL columns is an image or a hyperlink.
    */
    private ?bool $isPicture = null;
    
    /**
     * Instantiates a new hyperlinkOrPictureColumn and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HyperlinkOrPictureColumn
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HyperlinkOrPictureColumn {
        return new HyperlinkOrPictureColumn();
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
            'isPicture' => function (ParseNode $n) use ($o) { $o->setIsPicture($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the isPicture property value. Specifies whether the display format used for URL columns is an image or a hyperlink.
     * @return bool|null
    */
    public function getIsPicture(): ?bool {
        return $this->isPicture;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isPicture', $this->isPicture);
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
     * Sets the isPicture property value. Specifies whether the display format used for URL columns is an image or a hyperlink.
     *  @param bool|null $value Value to set for the isPicture property.
    */
    public function setIsPicture(?bool $value ): void {
        $this->isPicture = $value;
    }

}
