<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnenotePatchContentCommand implements AdditionalDataHolder, Parsable 
{
    /** @var OnenotePatchActionType|null $action The action to perform on the target element. The possible values are: replace, append, delete, insert, or prepend. */
    private ?OnenotePatchActionType $action = null;
    
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $content A string of well-formed HTML to add to the page, and any image or file binary data. If the content contains binary data, the request must be sent using the multipart/form-data content type with a 'Commands' part. */
    private ?string $content = null;
    
    /** @var OnenotePatchInsertPosition|null $position The location to add the supplied content, relative to the target element. The possible values are: after (default) or before. */
    private ?OnenotePatchInsertPosition $position = null;
    
    /** @var string|null $target The element to update. Must be the #<data-id> or the generated <id> of the element, or the body or title keyword. */
    private ?string $target = null;
    
    /**
     * Instantiates a new onenotePatchContentCommand and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnenotePatchContentCommand
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): OnenotePatchContentCommand {
        return new OnenotePatchContentCommand();
    }

    /**
     * Gets the action property value. The action to perform on the target element. The possible values are: replace, append, delete, insert, or prepend.
     * @return OnenotePatchActionType|null
    */
    public function getAction(): ?OnenotePatchActionType {
        return $this->action;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the content property value. A string of well-formed HTML to add to the page, and any image or file binary data. If the content contains binary data, the request must be sent using the multipart/form-data content type with a 'Commands' part.
     * @return string|null
    */
    public function getContent(): ?string {
        return $this->content;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'action' => function (self $o, ParseNode $n) { $o->setAction($n->getEnumValue(OnenotePatchActionType::class)); },
            'content' => function (self $o, ParseNode $n) { $o->setContent($n->getStringValue()); },
            'position' => function (self $o, ParseNode $n) { $o->setPosition($n->getEnumValue(OnenotePatchInsertPosition::class)); },
            'target' => function (self $o, ParseNode $n) { $o->setTarget($n->getStringValue()); },
        ];
    }

    /**
     * Gets the position property value. The location to add the supplied content, relative to the target element. The possible values are: after (default) or before.
     * @return OnenotePatchInsertPosition|null
    */
    public function getPosition(): ?OnenotePatchInsertPosition {
        return $this->position;
    }

    /**
     * Gets the target property value. The element to update. Must be the #<data-id> or the generated <id> of the element, or the body or title keyword.
     * @return string|null
    */
    public function getTarget(): ?string {
        return $this->target;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('action', $this->action);
        $writer->writeStringValue('content', $this->content);
        $writer->writeEnumValue('position', $this->position);
        $writer->writeStringValue('target', $this->target);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the action property value. The action to perform on the target element. The possible values are: replace, append, delete, insert, or prepend.
     *  @param OnenotePatchActionType|null $value Value to set for the action property.
    */
    public function setAction(?OnenotePatchActionType $value ): void {
        $this->action = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the content property value. A string of well-formed HTML to add to the page, and any image or file binary data. If the content contains binary data, the request must be sent using the multipart/form-data content type with a 'Commands' part.
     *  @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value ): void {
        $this->content = $value;
    }

    /**
     * Sets the position property value. The location to add the supplied content, relative to the target element. The possible values are: after (default) or before.
     *  @param OnenotePatchInsertPosition|null $value Value to set for the position property.
    */
    public function setPosition(?OnenotePatchInsertPosition $value ): void {
        $this->position = $value;
    }

    /**
     * Sets the target property value. The element to update. Must be the #<data-id> or the generated <id> of the element, or the body or title keyword.
     *  @param string|null $value Value to set for the target property.
    */
    public function setTarget(?string $value ): void {
        $this->target = $value;
    }

}
