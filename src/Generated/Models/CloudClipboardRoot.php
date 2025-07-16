<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CloudClipboardRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudClipboardRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudClipboardRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudClipboardRoot {
        return new CloudClipboardRoot();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([CloudClipboardItem::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the items property value. Represents a collection of Cloud Clipboard items.
     * @return array<CloudClipboardItem>|null
    */
    public function getItems(): ?array {
        $val = $this->getBackingStore()->get('items');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CloudClipboardItem::class);
            /** @var array<CloudClipboardItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'items'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
    }

    /**
     * Sets the items property value. Represents a collection of Cloud Clipboard items.
     * @param array<CloudClipboardItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->getBackingStore()->set('items', $value);
    }

}
