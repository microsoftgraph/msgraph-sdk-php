<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemAnalytics extends Entity implements Parsable 
{
    /**
     * Instantiates a new itemAnalytics and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemAnalytics
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemAnalytics {
        return new ItemAnalytics();
    }

    /**
     * Gets the allTime property value. The allTime property
     * @return ItemActivityStat|null
    */
    public function getAllTime(): ?ItemActivityStat {
        return $this->getBackingStore()->get('allTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allTime' => fn(ParseNode $n) => $o->setAllTime($n->getObjectValue([ItemActivityStat::class, 'createFromDiscriminatorValue'])),
            'itemActivityStats' => fn(ParseNode $n) => $o->setItemActivityStats($n->getCollectionOfObjectValues([ItemActivityStat::class, 'createFromDiscriminatorValue'])),
            'lastSevenDays' => fn(ParseNode $n) => $o->setLastSevenDays($n->getObjectValue([ItemActivityStat::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the itemActivityStats property value. The itemActivityStats property
     * @return array<ItemActivityStat>|null
    */
    public function getItemActivityStats(): ?array {
        return $this->getBackingStore()->get('itemActivityStats');
    }

    /**
     * Gets the lastSevenDays property value. The lastSevenDays property
     * @return ItemActivityStat|null
    */
    public function getLastSevenDays(): ?ItemActivityStat {
        return $this->getBackingStore()->get('lastSevenDays');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('allTime', $this->getAllTime());
        $writer->writeCollectionOfObjectValues('itemActivityStats', $this->getItemActivityStats());
        $writer->writeObjectValue('lastSevenDays', $this->getLastSevenDays());
    }

    /**
     * Sets the allTime property value. The allTime property
     * @param ItemActivityStat|null $value Value to set for the allTime property.
    */
    public function setAllTime(?ItemActivityStat $value): void {
        $this->getBackingStore()->set('allTime', $value);
    }

    /**
     * Sets the itemActivityStats property value. The itemActivityStats property
     * @param array<ItemActivityStat>|null $value Value to set for the itemActivityStats property.
    */
    public function setItemActivityStats(?array $value): void {
        $this->getBackingStore()->set('itemActivityStats', $value);
    }

    /**
     * Sets the lastSevenDays property value. The lastSevenDays property
     * @param ItemActivityStat|null $value Value to set for the lastSevenDays property.
    */
    public function setLastSevenDays(?ItemActivityStat $value): void {
        $this->getBackingStore()->set('lastSevenDays', $value);
    }

}
