<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CategoryTemplate extends FilePlanDescriptorTemplate implements Parsable 
{
    /**
     * Instantiates a new CategoryTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CategoryTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CategoryTemplate {
        return new CategoryTemplate();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'subcategories' => fn(ParseNode $n) => $o->setSubcategories($n->getCollectionOfObjectValues([SubcategoryTemplate::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the subcategories property value. Represents all subcategories under a particular category.
     * @return array<SubcategoryTemplate>|null
    */
    public function getSubcategories(): ?array {
        $val = $this->getBackingStore()->get('subcategories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SubcategoryTemplate::class);
            /** @var array<SubcategoryTemplate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subcategories'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('subcategories', $this->getSubcategories());
    }

    /**
     * Sets the subcategories property value. Represents all subcategories under a particular category.
     * @param array<SubcategoryTemplate>|null $value Value to set for the subcategories property.
    */
    public function setSubcategories(?array $value): void {
        $this->getBackingStore()->set('subcategories', $value);
    }

}
