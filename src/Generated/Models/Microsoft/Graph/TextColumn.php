<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TextColumn implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $allowMultipleLines Whether to allow multiple lines of text. */
    private ?bool $allowMultipleLines = null;
    
    /** @var bool|null $appendChangesToExistingText Whether updates to this column should replace existing text, or append to it. */
    private ?bool $appendChangesToExistingText = null;
    
    /** @var int|null $linesForEditing The size of the text box. */
    private ?int $linesForEditing = null;
    
    /** @var int|null $maxLength The maximum number of characters for the value. */
    private ?int $maxLength = null;
    
    /** @var string|null $textType The type of text being stored. Must be one of plain or richText */
    private ?string $textType = null;
    
    /**
     * Instantiates a new textColumn and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TextColumn
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TextColumn {
        return new TextColumn();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowMultipleLines property value. Whether to allow multiple lines of text.
     * @return bool|null
    */
    public function getAllowMultipleLines(): ?bool {
        return $this->allowMultipleLines;
    }

    /**
     * Gets the appendChangesToExistingText property value. Whether updates to this column should replace existing text, or append to it.
     * @return bool|null
    */
    public function getAppendChangesToExistingText(): ?bool {
        return $this->appendChangesToExistingText;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'allowMultipleLines' => function (self $o, ParseNode $n) { $o->setAllowMultipleLines($n->getBooleanValue()); },
            'appendChangesToExistingText' => function (self $o, ParseNode $n) { $o->setAppendChangesToExistingText($n->getBooleanValue()); },
            'linesForEditing' => function (self $o, ParseNode $n) { $o->setLinesForEditing($n->getIntegerValue()); },
            'maxLength' => function (self $o, ParseNode $n) { $o->setMaxLength($n->getIntegerValue()); },
            'textType' => function (self $o, ParseNode $n) { $o->setTextType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the linesForEditing property value. The size of the text box.
     * @return int|null
    */
    public function getLinesForEditing(): ?int {
        return $this->linesForEditing;
    }

    /**
     * Gets the maxLength property value. The maximum number of characters for the value.
     * @return int|null
    */
    public function getMaxLength(): ?int {
        return $this->maxLength;
    }

    /**
     * Gets the textType property value. The type of text being stored. Must be one of plain or richText
     * @return string|null
    */
    public function getTextType(): ?string {
        return $this->textType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowMultipleLines', $this->allowMultipleLines);
        $writer->writeBooleanValue('appendChangesToExistingText', $this->appendChangesToExistingText);
        $writer->writeIntegerValue('linesForEditing', $this->linesForEditing);
        $writer->writeIntegerValue('maxLength', $this->maxLength);
        $writer->writeStringValue('textType', $this->textType);
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
     * Sets the allowMultipleLines property value. Whether to allow multiple lines of text.
     *  @param bool|null $value Value to set for the allowMultipleLines property.
    */
    public function setAllowMultipleLines(?bool $value ): void {
        $this->allowMultipleLines = $value;
    }

    /**
     * Sets the appendChangesToExistingText property value. Whether updates to this column should replace existing text, or append to it.
     *  @param bool|null $value Value to set for the appendChangesToExistingText property.
    */
    public function setAppendChangesToExistingText(?bool $value ): void {
        $this->appendChangesToExistingText = $value;
    }

    /**
     * Sets the linesForEditing property value. The size of the text box.
     *  @param int|null $value Value to set for the linesForEditing property.
    */
    public function setLinesForEditing(?int $value ): void {
        $this->linesForEditing = $value;
    }

    /**
     * Sets the maxLength property value. The maximum number of characters for the value.
     *  @param int|null $value Value to set for the maxLength property.
    */
    public function setMaxLength(?int $value ): void {
        $this->maxLength = $value;
    }

    /**
     * Sets the textType property value. The type of text being stored. Must be one of plain or richText
     *  @param string|null $value Value to set for the textType property.
    */
    public function setTextType(?string $value ): void {
        $this->textType = $value;
    }

}
