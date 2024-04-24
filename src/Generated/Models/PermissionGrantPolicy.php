<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PermissionGrantPolicy extends PolicyBase implements Parsable 
{
    /**
     * Instantiates a new PermissionGrantPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.permissionGrantPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PermissionGrantPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PermissionGrantPolicy {
        return new PermissionGrantPolicy();
    }

    /**
     * Gets the excludes property value. Condition sets that are excluded in this permission grant policy. Automatically expanded on GET.
     * @return array<PermissionGrantConditionSet>|null
    */
    public function getExcludes(): ?array {
        $val = $this->getBackingStore()->get('excludes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PermissionGrantConditionSet::class);
            /** @var array<PermissionGrantConditionSet>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'excludes'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'excludes' => fn(ParseNode $n) => $o->setExcludes($n->getCollectionOfObjectValues([PermissionGrantConditionSet::class, 'createFromDiscriminatorValue'])),
            'includes' => fn(ParseNode $n) => $o->setIncludes($n->getCollectionOfObjectValues([PermissionGrantConditionSet::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the includes property value. Condition sets that are included in this permission grant policy. Automatically expanded on GET.
     * @return array<PermissionGrantConditionSet>|null
    */
    public function getIncludes(): ?array {
        $val = $this->getBackingStore()->get('includes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PermissionGrantConditionSet::class);
            /** @var array<PermissionGrantConditionSet>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includes'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('excludes', $this->getExcludes());
        $writer->writeCollectionOfObjectValues('includes', $this->getIncludes());
    }

    /**
     * Sets the excludes property value. Condition sets that are excluded in this permission grant policy. Automatically expanded on GET.
     * @param array<PermissionGrantConditionSet>|null $value Value to set for the excludes property.
    */
    public function setExcludes(?array $value): void {
        $this->getBackingStore()->set('excludes', $value);
    }

    /**
     * Sets the includes property value. Condition sets that are included in this permission grant policy. Automatically expanded on GET.
     * @param array<PermissionGrantConditionSet>|null $value Value to set for the includes property.
    */
    public function setIncludes(?array $value): void {
        $this->getBackingStore()->set('includes', $value);
    }

}
