<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessRoot extends Entity implements Parsable 
{
    /**
     * @var array<NamedLocation>|null $namedLocations Read-only. Nullable. Returns a collection of the specified named locations.
    */
    private ?array $namedLocations = null;
    
    /**
     * @var array<ConditionalAccessPolicy>|null $policies Read-only. Nullable. Returns a collection of the specified Conditional Access policies.
    */
    private ?array $policies = null;
    
    /**
     * Instantiates a new conditionalAccessRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessRoot {
        return new ConditionalAccessRoot();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'namedLocations' => function (ParseNode $n) use ($o) { $o->setNamedLocations($n->getCollectionOfObjectValues(array(NamedLocation::class, 'createFromDiscriminatorValue'))); },
            'policies' => function (ParseNode $n) use ($o) { $o->setPolicies($n->getCollectionOfObjectValues(array(ConditionalAccessPolicy::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the namedLocations property value. Read-only. Nullable. Returns a collection of the specified named locations.
     * @return array<NamedLocation>|null
    */
    public function getNamedLocations(): ?array {
        return $this->namedLocations;
    }

    /**
     * Gets the policies property value. Read-only. Nullable. Returns a collection of the specified Conditional Access policies.
     * @return array<ConditionalAccessPolicy>|null
    */
    public function getPolicies(): ?array {
        return $this->policies;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('namedLocations', $this->namedLocations);
        $writer->writeCollectionOfObjectValues('policies', $this->policies);
    }

    /**
     * Sets the namedLocations property value. Read-only. Nullable. Returns a collection of the specified named locations.
     *  @param array<NamedLocation>|null $value Value to set for the namedLocations property.
    */
    public function setNamedLocations(?array $value ): void {
        $this->namedLocations = $value;
    }

    /**
     * Sets the policies property value. Read-only. Nullable. Returns a collection of the specified Conditional Access policies.
     *  @param array<ConditionalAccessPolicy>|null $value Value to set for the policies property.
    */
    public function setPolicies(?array $value ): void {
        $this->policies = $value;
    }

}
