<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuditEvent extends Entity implements Parsable 
{
    /**
     * @var string|null $activity Friendly name of the activity.
    */
    private ?string $activity = null;
    
    /**
     * @var DateTime|null $activityDateTime The date time in UTC when the activity was performed.
    */
    private ?DateTime $activityDateTime = null;
    
    /**
     * @var string|null $activityOperationType The HTTP operation type of the activity.
    */
    private ?string $activityOperationType = null;
    
    /**
     * @var string|null $activityResult The result of the activity.
    */
    private ?string $activityResult = null;
    
    /**
     * @var string|null $activityType The type of activity that was being performed.
    */
    private ?string $activityType = null;
    
    /**
     * @var AuditActor|null $actor AAD user and application that are associated with the audit event.
    */
    private ?AuditActor $actor = null;
    
    /**
     * @var string|null $category Audit category.
    */
    private ?string $category = null;
    
    /**
     * @var string|null $componentName Component name.
    */
    private ?string $componentName = null;
    
    /**
     * @var string|null $correlationId The client request Id that is used to correlate activity within the system.
    */
    private ?string $correlationId = null;
    
    /**
     * @var string|null $displayName Event display name.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<AuditResource>|null $resources Resources being modified.
    */
    private ?array $resources = null;
    
    /**
     * Instantiates a new AuditEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.auditEvent');
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
        return $this->activity;
    }

    /**
     * Gets the activityDateTime property value. The date time in UTC when the activity was performed.
     * @return DateTime|null
    */
    public function getActivityDateTime(): ?DateTime {
        return $this->activityDateTime;
    }

    /**
     * Gets the activityOperationType property value. The HTTP operation type of the activity.
     * @return string|null
    */
    public function getActivityOperationType(): ?string {
        return $this->activityOperationType;
    }

    /**
     * Gets the activityResult property value. The result of the activity.
     * @return string|null
    */
    public function getActivityResult(): ?string {
        return $this->activityResult;
    }

    /**
     * Gets the activityType property value. The type of activity that was being performed.
     * @return string|null
    */
    public function getActivityType(): ?string {
        return $this->activityType;
    }

    /**
     * Gets the actor property value. AAD user and application that are associated with the audit event.
     * @return AuditActor|null
    */
    public function getActor(): ?AuditActor {
        return $this->actor;
    }

    /**
     * Gets the category property value. Audit category.
     * @return string|null
    */
    public function getCategory(): ?string {
        return $this->category;
    }

    /**
     * Gets the componentName property value. Component name.
     * @return string|null
    */
    public function getComponentName(): ?string {
        return $this->componentName;
    }

    /**
     * Gets the correlationId property value. The client request Id that is used to correlate activity within the system.
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        return $this->correlationId;
    }

    /**
     * Gets the displayName property value. Event display name.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->resources;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('activity', $this->activity);
        $writer->writeDateTimeValue('activityDateTime', $this->activityDateTime);
        $writer->writeStringValue('activityOperationType', $this->activityOperationType);
        $writer->writeStringValue('activityResult', $this->activityResult);
        $writer->writeStringValue('activityType', $this->activityType);
        $writer->writeObjectValue('actor', $this->actor);
        $writer->writeStringValue('category', $this->category);
        $writer->writeStringValue('componentName', $this->componentName);
        $writer->writeStringValue('correlationId', $this->correlationId);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('resources', $this->resources);
    }

    /**
     * Sets the activity property value. Friendly name of the activity.
     *  @param string|null $value Value to set for the activity property.
    */
    public function setActivity(?string $value ): void {
        $this->activity = $value;
    }

    /**
     * Sets the activityDateTime property value. The date time in UTC when the activity was performed.
     *  @param DateTime|null $value Value to set for the activityDateTime property.
    */
    public function setActivityDateTime(?DateTime $value ): void {
        $this->activityDateTime = $value;
    }

    /**
     * Sets the activityOperationType property value. The HTTP operation type of the activity.
     *  @param string|null $value Value to set for the activityOperationType property.
    */
    public function setActivityOperationType(?string $value ): void {
        $this->activityOperationType = $value;
    }

    /**
     * Sets the activityResult property value. The result of the activity.
     *  @param string|null $value Value to set for the activityResult property.
    */
    public function setActivityResult(?string $value ): void {
        $this->activityResult = $value;
    }

    /**
     * Sets the activityType property value. The type of activity that was being performed.
     *  @param string|null $value Value to set for the activityType property.
    */
    public function setActivityType(?string $value ): void {
        $this->activityType = $value;
    }

    /**
     * Sets the actor property value. AAD user and application that are associated with the audit event.
     *  @param AuditActor|null $value Value to set for the actor property.
    */
    public function setActor(?AuditActor $value ): void {
        $this->actor = $value;
    }

    /**
     * Sets the category property value. Audit category.
     *  @param string|null $value Value to set for the category property.
    */
    public function setCategory(?string $value ): void {
        $this->category = $value;
    }

    /**
     * Sets the componentName property value. Component name.
     *  @param string|null $value Value to set for the componentName property.
    */
    public function setComponentName(?string $value ): void {
        $this->componentName = $value;
    }

    /**
     * Sets the correlationId property value. The client request Id that is used to correlate activity within the system.
     *  @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value ): void {
        $this->correlationId = $value;
    }

    /**
     * Sets the displayName property value. Event display name.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the resources property value. Resources being modified.
     *  @param array<AuditResource>|null $value Value to set for the resources property.
    */
    public function setResources(?array $value ): void {
        $this->resources = $value;
    }

}
