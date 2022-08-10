<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OfficeGraphInsights extends Entity implements Parsable 
{
    /**
     * @var array<SharedInsight>|null $shared Access this property from the derived type itemInsights.
    */
    private ?array $shared = null;
    
    /**
     * @var array<Trending>|null $trending Access this property from the derived type itemInsights.
    */
    private ?array $trending = null;
    
    /**
     * @var array<UsedInsight>|null $used Access this property from the derived type itemInsights.
    */
    private ?array $used = null;
    
    /**
     * Instantiates a new officeGraphInsights and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.officeGraphInsights');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OfficeGraphInsights
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OfficeGraphInsights {
        return new OfficeGraphInsights();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'shared' => function (ParseNode $n) use ($o) { $o->setShared($n->getCollectionOfObjectValues(array(SharedInsight::class, 'createFromDiscriminatorValue'))); },
            'trending' => function (ParseNode $n) use ($o) { $o->setTrending($n->getCollectionOfObjectValues(array(Trending::class, 'createFromDiscriminatorValue'))); },
            'used' => function (ParseNode $n) use ($o) { $o->setUsed($n->getCollectionOfObjectValues(array(UsedInsight::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the shared property value. Access this property from the derived type itemInsights.
     * @return array<SharedInsight>|null
    */
    public function getShared(): ?array {
        return $this->shared;
    }

    /**
     * Gets the trending property value. Access this property from the derived type itemInsights.
     * @return array<Trending>|null
    */
    public function getTrending(): ?array {
        return $this->trending;
    }

    /**
     * Gets the used property value. Access this property from the derived type itemInsights.
     * @return array<UsedInsight>|null
    */
    public function getUsed(): ?array {
        return $this->used;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('shared', $this->shared);
        $writer->writeCollectionOfObjectValues('trending', $this->trending);
        $writer->writeCollectionOfObjectValues('used', $this->used);
    }

    /**
     * Sets the shared property value. Access this property from the derived type itemInsights.
     *  @param array<SharedInsight>|null $value Value to set for the shared property.
    */
    public function setShared(?array $value ): void {
        $this->shared = $value;
    }

    /**
     * Sets the trending property value. Access this property from the derived type itemInsights.
     *  @param array<Trending>|null $value Value to set for the trending property.
    */
    public function setTrending(?array $value ): void {
        $this->trending = $value;
    }

    /**
     * Sets the used property value. Access this property from the derived type itemInsights.
     *  @param array<UsedInsight>|null $value Value to set for the used property.
    */
    public function setUsed(?array $value ): void {
        $this->used = $value;
    }

}
