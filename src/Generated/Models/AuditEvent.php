<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AuditEvent extends Entity implements Parsable 
{
    /**
     * Instantiates a new AuditEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuditEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuditEvent {
        return new AuditEvent();
    }

    /**
     * Gets the activity property value. Friendly name of the activity.
     * @return string|null
    */
    public function getActivity(): ?string {
        $val = $this->getBackingStore()->get('activity');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activity'");
    }

    /**
     * Gets the activityDateTime property value. The date time in UTC when the activity was performed.
     * @return DateTime|null
    */
    public function getActivityDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('activityDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activityDateTime'");
    }

    /**
     * Gets the activityOperationType property value. The HTTP operation type of the activity.
     * @return string|null
    */
    public function getActivityOperationType(): ?string {
        $val = $this->getBackingStore()->get('activityOperationType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activityOperationType'");
    }

    /**
     * Gets the activityResult property value. The result of the activity.
     * @return string|null
    */
    public function getActivityResult(): ?string {
        $val = $this->getBackingStore()->get('activityResult');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activityResult'");
    }

    /**
     * Gets the activityType property value. The type of activity that was being performed.
     * @return string|null
    */
    public function getActivityType(): ?string {
        $val = $this->getBackingStore()->get('activityType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activityType'");
    }

    /**
     * Gets the actor property value. AAD user and application that are associated with the audit event.
     * @return AuditActor|null
    */
    public function getActor(): ?AuditActor {
        $val = $this->getBackingStore()->get('actor');
        if (is_null($val) || $val instanceof AuditActor) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actor'");
    }

    /**
     * Gets the category property value. Audit category.
     * @return string|null
    */
    public function getCategory(): ?string {
        $val = $this->getBackingStore()->get('category');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'category'");
    }

    /**
     * Gets the componentName property value. Component name.
     * @return string|null
    */
    public function getComponentName(): ?string {
        $val = $this->getBackingStore()->get('componentName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'componentName'");
    }

    /**
     * Gets the correlationId property value. The client request Id that is used to correlate activity within the system.
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        $val = $this->getBackingStore()->get('correlationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'correlationId'");
    }

    /**
     * Gets the displayName property value. Event display name.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activity' => fn(ParseNode $n) => $o->setActivity($n->getStringValue()),
            'activityDateTime' => fn(ParseNode $n) => $o->setActivityDateTime($n->getDateTimeValue()),
            'activityOperationType' => fn(ParseNode $n) => $o->setActivityOperationType($n->getStringValue()),
            'activityResult' => fn(ParseNode $n) => $o->setActivityResult($n->getStringValue()),
            'activityType' => fn(ParseNode $n) => $o->setActivityType($n->getStringValue()),
            'actor' => fn(ParseNode $n) => $o->setActor($n->getObjectValue([AuditActor::class, 'createFromDiscriminatorValue'])),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getStringValue()),
            'componentName' => fn(ParseNode $n) => $o->setComponentName($n->getStringValue()),
            'correlationId' => fn(ParseNode $n) => $o->setCorrelationId($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'resources' => fn(ParseNode $n) => $o->setResources($n->getCollectionOfObjectValues([AuditResource::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the resources property value. Resources being modified.
     * @return array<AuditResource>|null
    */
    public function getResources(): ?array {
        $val = $this->getBackingStore()->get('resources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuditResource::class);
            /** @var array<AuditResource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resources'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('activity', $this->getActivity());
        $writer->writeDateTimeValue('activityDateTime', $this->getActivityDateTime());
        $writer->writeStringValue('activityOperationType', $this->getActivityOperationType());
        $writer->writeStringValue('activityResult', $this->getActivityResult());
        $writer->writeStringValue('activityType', $this->getActivityType());
        $writer->writeObjectValue('actor', $this->getActor());
        $writer->writeStringValue('category', $this->getCategory());
        $writer->writeStringValue('componentName', $this->getComponentName());
        $writer->writeStringValue('correlationId', $this->getCorrelationId());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('resources', $this->getResources());
    }

    /**
     * Sets the activity property value. Friendly name of the activity.
     * @param string|null $value Value to set for the activity property.
    */
    public function setActivity(?string $value): void {
        $this->getBackingStore()->set('activity', $value);
    }

    /**
     * Sets the activityDateTime property value. The date time in UTC when the activity was performed.
     * @param DateTime|null $value Value to set for the activityDateTime property.
    */
    public function setActivityDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('activityDateTime', $value);
    }

    /**
     * Sets the activityOperationType property value. The HTTP operation type of the activity.
     * @param string|null $value Value to set for the activityOperationType property.
    */
    public function setActivityOperationType(?string $value): void {
        $this->getBackingStore()->set('activityOperationType', $value);
    }

    /**
     * Sets the activityResult property value. The result of the activity.
     * @param string|null $value Value to set for the activityResult property.
    */
    public function setActivityResult(?string $value): void {
        $this->getBackingStore()->set('activityResult', $value);
    }

    /**
     * Sets the activityType property value. The type of activity that was being performed.
     * @param string|null $value Value to set for the activityType property.
    */
    public function setActivityType(?string $value): void {
        $this->getBackingStore()->set('activityType', $value);
    }

    /**
     * Sets the actor property value. AAD user and application that are associated with the audit event.
     * @param AuditActor|null $value Value to set for the actor property.
    */
    public function setActor(?AuditActor $value): void {
        $this->getBackingStore()->set('actor', $value);
    }

    /**
     * Sets the category property value. Audit category.
     * @param string|null $value Value to set for the category property.
    */
    public function setCategory(?string $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the componentName property value. Component name.
     * @param string|null $value Value to set for the componentName property.
    */
    public function setComponentName(?string $value): void {
        $this->getBackingStore()->set('componentName', $value);
    }

    /**
     * Sets the correlationId property value. The client request Id that is used to correlate activity within the system.
     * @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value): void {
        $this->getBackingStore()->set('correlationId', $value);
    }

    /**
     * Sets the displayName property value. Event display name.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the resources property value. Resources being modified.
     * @param array<AuditResource>|null $value Value to set for the resources property.
    */
    public function setResources(?array $value): void {
        $this->getBackingStore()->set('resources', $value);
    }

}
