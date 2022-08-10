<?php

namespace Microsoft\Graph\Generated\Drives\Item\Root\Preview;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PreviewPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $page The page property
    */
    private ?string $page = null;
    
    /**
     * @var float|null $zoom The zoom property
    */
    private ?float $zoom = null;
    
    /**
     * Instantiates a new previewPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PreviewPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PreviewPostRequestBody {
        return new PreviewPostRequestBody();
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
            'page' => function (ParseNode $n) use ($o) { $o->setPage($n->getStringValue()); },
            'zoom' => function (ParseNode $n) use ($o) { $o->setZoom($n->getFloatValue()); },
        ];
    }

    /**
     * Gets the page property value. The page property
     * @return string|null
    */
    public function getPage(): ?string {
        return $this->page;
    }

    /**
     * Gets the zoom property value. The zoom property
     * @return float|null
    */
    public function getZoom(): ?float {
        return $this->zoom;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('page', $this->page);
        $writer->writeFloatValue('zoom', $this->zoom);
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
     * Sets the page property value. The page property
     *  @param string|null $value Value to set for the page property.
    */
    public function setPage(?string $value ): void {
        $this->page = $value;
    }

    /**
     * Sets the zoom property value. The zoom property
     *  @param float|null $value Value to set for the zoom property.
    */
    public function setZoom(?float $value ): void {
        $this->zoom = $value;
    }

}
