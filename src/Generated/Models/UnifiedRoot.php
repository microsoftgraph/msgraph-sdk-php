<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UnifiedRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new UnifiedRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoot {
        return new UnifiedRoot();
    }

    /**
     * Gets the decisions property value. Represents the unified (vNext) access review decisions on an instance of a review.
     * @return array<AccessReviewInstanceDecisionItem>|null
    */
    public function getDecisions(): ?array {
        $val = $this->getBackingStore()->get('decisions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessReviewInstanceDecisionItem::class);
            /** @var array<AccessReviewInstanceDecisionItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'decisions'");
    }

    /**
     * Gets the definitions property value. Represents the unified (vNext) template and scheduling for an access review.
     * @return array<AccessReviewScheduleDefinition>|null
    */
    public function getDefinitions(): ?array {
        $val = $this->getBackingStore()->get('definitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessReviewScheduleDefinition::class);
            /** @var array<AccessReviewScheduleDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'definitions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'decisions' => fn(ParseNode $n) => $o->setDecisions($n->getCollectionOfObjectValues([AccessReviewInstanceDecisionItem::class, 'createFromDiscriminatorValue'])),
            'definitions' => fn(ParseNode $n) => $o->setDefinitions($n->getCollectionOfObjectValues([AccessReviewScheduleDefinition::class, 'createFromDiscriminatorValue'])),
            'instances' => fn(ParseNode $n) => $o->setInstances($n->getCollectionOfObjectValues([AccessReviewInstance::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the instances property value. Represents the unified (vNext) instance of a review.
     * @return array<AccessReviewInstance>|null
    */
    public function getInstances(): ?array {
        $val = $this->getBackingStore()->get('instances');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessReviewInstance::class);
            /** @var array<AccessReviewInstance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'instances'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('decisions', $this->getDecisions());
        $writer->writeCollectionOfObjectValues('definitions', $this->getDefinitions());
        $writer->writeCollectionOfObjectValues('instances', $this->getInstances());
    }

    /**
     * Sets the decisions property value. Represents the unified (vNext) access review decisions on an instance of a review.
     * @param array<AccessReviewInstanceDecisionItem>|null $value Value to set for the decisions property.
    */
    public function setDecisions(?array $value): void {
        $this->getBackingStore()->set('decisions', $value);
    }

    /**
     * Sets the definitions property value. Represents the unified (vNext) template and scheduling for an access review.
     * @param array<AccessReviewScheduleDefinition>|null $value Value to set for the definitions property.
    */
    public function setDefinitions(?array $value): void {
        $this->getBackingStore()->set('definitions', $value);
    }

    /**
     * Sets the instances property value. Represents the unified (vNext) instance of a review.
     * @param array<AccessReviewInstance>|null $value Value to set for the instances property.
    */
    public function setInstances(?array $value): void {
        $this->getBackingStore()->set('instances', $value);
    }

}
