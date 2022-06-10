<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PermissionGrantPolicy extends PolicyBase implements Parsable 
{
    /**
     * @var array<PermissionGrantConditionSet>|null $excludes Condition sets which are excluded in this permission grant policy. Automatically expanded on GET.
    */
    private ?array $excludes = null;
    
    /**
     * @var array<PermissionGrantConditionSet>|null $includes Condition sets which are included in this permission grant policy. Automatically expanded on GET.
    */
    private ?array $includes = null;
    
    /**
     * Instantiates a new PermissionGrantPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * Gets the excludes property value. Condition sets which are excluded in this permission grant policy. Automatically expanded on GET.
     * @return array<PermissionGrantConditionSet>|null
    */
    public function getExcludes(): ?array {
        return $this->excludes;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'excludes' => function (ParseNode $n) use ($o) { $o->setExcludes($n->getCollectionOfObjectValues(array(PermissionGrantConditionSet::class, 'createFromDiscriminatorValue'))); },
            'includes' => function (ParseNode $n) use ($o) { $o->setIncludes($n->getCollectionOfObjectValues(array(PermissionGrantConditionSet::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the includes property value. Condition sets which are included in this permission grant policy. Automatically expanded on GET.
     * @return array<PermissionGrantConditionSet>|null
    */
    public function getIncludes(): ?array {
        return $this->includes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('excludes', $this->excludes);
        $writer->writeCollectionOfObjectValues('includes', $this->includes);
    }

    /**
     * Sets the excludes property value. Condition sets which are excluded in this permission grant policy. Automatically expanded on GET.
     *  @param array<PermissionGrantConditionSet>|null $value Value to set for the excludes property.
    */
    public function setExcludes(?array $value ): void {
        $this->excludes = $value;
    }

    /**
     * Sets the includes property value. Condition sets which are included in this permission grant policy. Automatically expanded on GET.
     *  @param array<PermissionGrantConditionSet>|null $value Value to set for the includes property.
    */
    public function setIncludes(?array $value ): void {
        $this->includes = $value;
    }

}
