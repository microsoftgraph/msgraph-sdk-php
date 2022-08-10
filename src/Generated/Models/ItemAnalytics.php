<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemAnalytics extends Entity implements Parsable 
{
    /**
     * @var ItemActivityStat|null $allTime The allTime property
    */
    private ?ItemActivityStat $allTime = null;
    
    /**
     * @var array<ItemActivityStat>|null $itemActivityStats The itemActivityStats property
    */
    private ?array $itemActivityStats = null;
    
    /**
     * @var ItemActivityStat|null $lastSevenDays The lastSevenDays property
    */
    private ?ItemActivityStat $lastSevenDays = null;
    
    /**
     * Instantiates a new itemAnalytics and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.itemAnalytics');
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
        return $this->allTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allTime' => function (ParseNode $n) use ($o) { $o->setAllTime($n->getObjectValue(array(ItemActivityStat::class, 'createFromDiscriminatorValue'))); },
            'itemActivityStats' => function (ParseNode $n) use ($o) { $o->setItemActivityStats($n->getCollectionOfObjectValues(array(ItemActivityStat::class, 'createFromDiscriminatorValue'))); },
            'lastSevenDays' => function (ParseNode $n) use ($o) { $o->setLastSevenDays($n->getObjectValue(array(ItemActivityStat::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the itemActivityStats property value. The itemActivityStats property
     * @return array<ItemActivityStat>|null
    */
    public function getItemActivityStats(): ?array {
        return $this->itemActivityStats;
    }

    /**
     * Gets the lastSevenDays property value. The lastSevenDays property
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
     * Sets the allTime property value. The allTime property
     *  @param ItemActivityStat|null $value Value to set for the allTime property.
    */
    public function setAllTime(?ItemActivityStat $value ): void {
        $this->allTime = $value;
    }

    /**
     * Sets the itemActivityStats property value. The itemActivityStats property
     *  @param array<ItemActivityStat>|null $value Value to set for the itemActivityStats property.
    */
    public function setItemActivityStats(?array $value ): void {
        $this->itemActivityStats = $value;
    }

    /**
     * Sets the lastSevenDays property value. The lastSevenDays property
     *  @param ItemActivityStat|null $value Value to set for the lastSevenDays property.
    */
    public function setLastSevenDays(?ItemActivityStat $value ): void {
        $this->lastSevenDays = $value;
    }

}
