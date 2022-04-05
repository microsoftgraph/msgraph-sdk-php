<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnenotePagePreviewLinks implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var ExternalLink|null $previewImageUrl The previewImageUrl property */
    private ?ExternalLink $previewImageUrl = null;
    
    /**
     * Instantiates a new onenotePagePreviewLinks and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnenotePagePreviewLinks
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): OnenotePagePreviewLinks {
        return new OnenotePagePreviewLinks();
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
        return  [
            'previewImageUrl' => function (self $o, ParseNode $n) { $o->setPreviewImageUrl($n->getObjectValue(ExternalLink::class)); },
        ];
    }

    /**
     * Gets the previewImageUrl property value. The previewImageUrl property
     * @return ExternalLink|null
    */
    public function getPreviewImageUrl(): ?ExternalLink {
        return $this->previewImageUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('previewImageUrl', $this->previewImageUrl);
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
     * Sets the previewImageUrl property value. The previewImageUrl property
     *  @param ExternalLink|null $value Value to set for the previewImageUrl property.
    */
    public function setPreviewImageUrl(?ExternalLink $value ): void {
        $this->previewImageUrl = $value;
    }

}
