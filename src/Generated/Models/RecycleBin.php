<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RecycleBin extends BaseItem implements Parsable 
{
    /**
     * Instantiates a new RecycleBin and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.recycleBin');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecycleBin
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RecycleBin {
        return new RecycleBin();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([RecycleBinItem::class, 'createFromDiscriminatorValue'])),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([RecycleBinSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the items property value. List of the recycleBinItems deleted by a user.
     * @return array<RecycleBinItem>|null
    */
    public function getItems(): ?array {
        $val = $this->getBackingStore()->get('items');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RecycleBinItem::class);
            /** @var array<RecycleBinItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'items'");
    }

    /**
     * Gets the settings property value. The settings property
     * @return RecycleBinSettings|null
    */
    public function getSettings(): ?RecycleBinSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof RecycleBinSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
        $writer->writeObjectValue('settings', $this->getSettings());
    }

    /**
     * Sets the items property value. List of the recycleBinItems deleted by a user.
     * @param array<RecycleBinItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->getBackingStore()->set('items', $value);
    }

    /**
     * Sets the settings property value. The settings property
     * @param RecycleBinSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?RecycleBinSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

}
