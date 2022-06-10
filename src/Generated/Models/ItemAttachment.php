<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemAttachment extends Attachment implements Parsable 
{
    /**
     * @var OutlookItem|null $item The attached contact, message or event. Navigation property.
    */
    private ?OutlookItem $item = null;
    
    /**
     * Instantiates a new ItemAttachment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemAttachment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemAttachment {
        return new ItemAttachment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'item' => function (ParseNode $n) use ($o) { $o->setItem($n->getObjectValue(array(OutlookItem::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the item property value. The attached contact, message or event. Navigation property.
     * @return OutlookItem|null
    */
    public function getItem(): ?OutlookItem {
        return $this->item;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('item', $this->item);
    }

    /**
     * Sets the item property value. The attached contact, message or event. Navigation property.
     *  @param OutlookItem|null $value Value to set for the item property.
    */
    public function setItem(?OutlookItem $value ): void {
        $this->item = $value;
    }

}
