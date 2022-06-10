<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrintDocument extends Entity implements Parsable 
{
    /**
     * @var string|null $contentType The document's content (MIME) type. Read-only.
    */
    private ?string $contentType = null;
    
    /**
     * @var string|null $displayName The document's name. Read-only.
    */
    private ?string $displayName = null;
    
    /**
     * @var int|null $size The document's size in bytes. Read-only.
    */
    private ?int $size = null;
    
    /**
     * Instantiates a new printDocument and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintDocument
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrintDocument {
        return new PrintDocument();
    }

    /**
     * Gets the contentType property value. The document's content (MIME) type. Read-only.
     * @return string|null
    */
    public function getContentType(): ?string {
        return $this->contentType;
    }

    /**
     * Gets the displayName property value. The document's name. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contentType' => function (ParseNode $n) use ($o) { $o->setContentType($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'size' => function (ParseNode $n) use ($o) { $o->setSize($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the size property value. The document's size in bytes. Read-only.
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->size;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('contentType', $this->contentType);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeIntegerValue('size', $this->size);
    }

    /**
     * Sets the contentType property value. The document's content (MIME) type. Read-only.
     *  @param string|null $value Value to set for the contentType property.
    */
    public function setContentType(?string $value ): void {
        $this->contentType = $value;
    }

    /**
     * Sets the displayName property value. The document's name. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the size property value. The document's size in bytes. Read-only.
     *  @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value ): void {
        $this->size = $value;
    }

}
