<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\\Graph\\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TriggerTypesRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new TriggerTypesRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TriggerTypesRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TriggerTypesRoot {
        return new TriggerTypesRoot();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'retentionEventTypes' => fn(ParseNode $n) => $o->setRetentionEventTypes($n->getCollectionOfObjectValues([RetentionEventType::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the retentionEventTypes property value. The retentionEventTypes property
     * @return array<RetentionEventType>|null
    */
    public function getRetentionEventTypes(): ?array {
        $val = $this->getBackingStore()->get('retentionEventTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RetentionEventType::class);
            /** @var array<RetentionEventType>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'retentionEventTypes'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('retentionEventTypes', $this->getRetentionEventTypes());
    }

    /**
     * Sets the retentionEventTypes property value. The retentionEventTypes property
     * @param array<RetentionEventType>|null $value Value to set for the retentionEventTypes property.
    */
    public function setRetentionEventTypes(?array $value): void {
        $this->getBackingStore()->set('retentionEventTypes', $value);
    }

}
