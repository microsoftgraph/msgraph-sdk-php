<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemAnalytics extends Entity 
{
    /** @var ItemActivityStat|null $allTime  */
    private ?ItemActivityStat $allTime = null;
    
    /** @var array<ItemActivityStat>|null $itemActivityStats  */
    private ?array $itemActivityStats = null;
    
    /** @var ItemActivityStat|null $lastSevenDays  */
    private ?ItemActivityStat $lastSevenDays = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): ItemAnalytics {
        return new ItemAnalytics();
    }

    /**
     * Gets the allTime property value. 
     * @return ItemActivityStat|null
    */
    public function getAllTime(): ?ItemActivityStat {
        return $this->allTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'allTime' => function (self $o, ParseNode $n) { $o->setAllTime($n->getObjectValue(ItemActivityStat::class)); },
            'itemActivityStats' => function (self $o, ParseNode $n) { $o->setItemActivityStats($n->getCollectionOfObjectValues(ItemActivityStat::class)); },
            'lastSevenDays' => function (self $o, ParseNode $n) { $o->setLastSevenDays($n->getObjectValue(ItemActivityStat::class)); },
        ]);
    }

    /**
     * Gets the itemActivityStats property value. 
     * @return array<ItemActivityStat>|null
    */
    public function getItemActivityStats(): ?array {
        return $this->itemActivityStats;
    }

    /**
     * Gets the lastSevenDays property value. 
     * @return ItemActivityStat|null
    */
    public function getLastSevenDays(): ?ItemActivityStat {
        return $this->lastSevenDays;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('allTime', $this->allTime);
        $writer->writeCollectionOfObjectValues('itemActivityStats', $this->itemActivityStats);
        $writer->writeObjectValue('lastSevenDays', $this->lastSevenDays);
    }

    /**
     * Sets the allTime property value. 
     *  @param ItemActivityStat|null $value Value to set for the allTime property.
    */
    public function setAllTime(?ItemActivityStat $value ): void {
        $this->allTime = $value;
    }

    /**
     * Sets the itemActivityStats property value. 
     *  @param array<ItemActivityStat>|null $value Value to set for the itemActivityStats property.
    */
    public function setItemActivityStats(?array $value ): void {
        $this->itemActivityStats = $value;
    }

    /**
     * Sets the lastSevenDays property value. 
     *  @param ItemActivityStat|null $value Value to set for the lastSevenDays property.
    */
    public function setLastSevenDays(?ItemActivityStat $value ): void {
        $this->lastSevenDays = $value;
    }

}
