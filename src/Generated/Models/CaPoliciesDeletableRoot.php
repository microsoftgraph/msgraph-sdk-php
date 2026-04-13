<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CaPoliciesDeletableRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new CaPoliciesDeletableRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CaPoliciesDeletableRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CaPoliciesDeletableRoot {
        return new CaPoliciesDeletableRoot();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'namedLocations' => fn(ParseNode $n) => $o->setNamedLocations($n->getCollectionOfObjectValues([NamedLocation::class, 'createFromDiscriminatorValue'])),
            'policies' => fn(ParseNode $n) => $o->setPolicies($n->getCollectionOfObjectValues([ConditionalAccessPolicy::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the namedLocations property value. The namedLocations property
     * @return array<NamedLocation>|null
    */
    public function getNamedLocations(): ?array {
        $val = $this->getBackingStore()->get('namedLocations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, NamedLocation::class);
            /** @var array<NamedLocation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'namedLocations'");
    }

    /**
     * Gets the policies property value. The policies property
     * @return array<ConditionalAccessPolicy>|null
    */
    public function getPolicies(): ?array {
        $val = $this->getBackingStore()->get('policies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ConditionalAccessPolicy::class);
            /** @var array<ConditionalAccessPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policies'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('namedLocations', $this->getNamedLocations());
        $writer->writeCollectionOfObjectValues('policies', $this->getPolicies());
    }

    /**
     * Sets the namedLocations property value. The namedLocations property
     * @param array<NamedLocation>|null $value Value to set for the namedLocations property.
    */
    public function setNamedLocations(?array $value): void {
        $this->getBackingStore()->set('namedLocations', $value);
    }

    /**
     * Sets the policies property value. The policies property
     * @param array<ConditionalAccessPolicy>|null $value Value to set for the policies property.
    */
    public function setPolicies(?array $value): void {
        $this->getBackingStore()->set('policies', $value);
    }

}
