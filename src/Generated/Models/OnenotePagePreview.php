<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnenotePagePreview implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var OnenotePagePreviewLinks|null $links The links property
    */
    private ?OnenotePagePreviewLinks $links = null;
    
    /**
     * @var string|null $previewText The previewText property
    */
    private ?string $previewText = null;
    
    /**
     * Instantiates a new OnenotePagePreview and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnenotePagePreview
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnenotePagePreview {
        return new OnenotePagePreview();
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
            'links' => function (ParseNode $n) use ($o) { $o->setLinks($n->getObjectValue(array(OnenotePagePreviewLinks::class, 'createFromDiscriminatorValue'))); },
            'previewText' => function (ParseNode $n) use ($o) { $o->setPreviewText($n->getStringValue()); },
        ];
    }

    /**
     * Gets the links property value. The links property
     * @return OnenotePagePreviewLinks|null
    */
    public function getLinks(): ?OnenotePagePreviewLinks {
        return $this->links;
    }

    /**
     * Gets the previewText property value. The previewText property
     * @return string|null
    */
    public function getPreviewText(): ?string {
        return $this->previewText;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('links', $this->links);
        $writer->writeStringValue('previewText', $this->previewText);
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
     * Sets the links property value. The links property
     *  @param OnenotePagePreviewLinks|null $value Value to set for the links property.
    */
    public function setLinks(?OnenotePagePreviewLinks $value ): void {
        $this->links = $value;
    }

    /**
     * Sets the previewText property value. The previewText property
     *  @param string|null $value Value to set for the previewText property.
    */
    public function setPreviewText(?string $value ): void {
        $this->previewText = $value;
    }

}
