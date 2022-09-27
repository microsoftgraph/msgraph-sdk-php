<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChatMessageMentionCollectionResponse extends BaseCollectionPaginationCountResponse implements Parsable 
{
    /**
     * @var array<ChatMessageMention>|null $value The value property
    */
    private ?array $value = null;
    
    /**
     * Instantiates a new ChatMessageMentionCollectionResponse and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChatMessageMentionCollectionResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChatMessageMentionCollectionResponse {
        return new ChatMessageMentionCollectionResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'value' => function (ParseNode $n) use ($o) { $o->setValue($n->getCollectionOfObjectValues(array(ChatMessageMention::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the value property value. The value property
     * @return array<ChatMessageMention>|null
    */
    public function getValue(): ?array {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('value', $this->value);
    }

    /**
     * Sets the value property value. The value property
     *  @param array<ChatMessageMention>|null $value Value to set for the value property.
    */
    public function setValue(?array $value ): void {
        $this->value = $value;
    }

}
