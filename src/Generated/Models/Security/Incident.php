<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Incident extends Entity implements Parsable 
{
    /**
     * Instantiates a new incident and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Incident
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Incident {
        return new Incident();
    }

    /**
     * Gets the alerts property value. The list of related alerts. Supports $expand.
     * @return array<Alert>|null
    */
    public function getAlerts(): ?array {
        return $this->getBackingStore()->get('alerts');
    }

    /**
     * Gets the assignedTo property value. Owner of the incident, or null if no owner is assigned. Free editable text.
     * @return string|null
    */
    public function getAssignedTo(): ?string {
        return $this->getBackingStore()->get('assignedTo');
    }

    /**
     * Gets the classification property value. The specification for the incident. Possible values are: unknown, falsePositive, truePositive, informationalExpectedActivity, unknownFutureValue.
     * @return AlertClassification|null
    */
    public function getClassification(): ?AlertClassification {
        return $this->getBackingStore()->get('classification');
    }

    /**
     * Gets the comments property value. Array of comments created by the Security Operations (SecOps) team when the incident is managed.
     * @return array<AlertComment>|null
    */
    public function getComments(): ?array {
        return $this->getBackingStore()->get('comments');
    }

    /**
     * Gets the createdDateTime property value. Time when the incident was first created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the customTags property value. Array of custom tags associated with an incident.
     * @return array<string>|null
    */
    public function getCustomTags(): ?array {
        return $this->getBackingStore()->get('customTags');
    }

    /**
     * Gets the determination property value. Specifies the determination of the incident. Possible values are: unknown, apt, malware, securityPersonnel, securityTesting, unwantedSoftware, other, multiStagedAttack, compromisedUser, phishing, maliciousUserActivity, clean, insufficientData, confirmedUserActivity, lineOfBusinessApplication, unknownFutureValue.
     * @return AlertDetermination|null
    */
    public function getDetermination(): ?AlertDetermination {
        return $this->getBackingStore()->get('determination');
    }

    /**
     * Gets the displayName property value. The incident name.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alerts' => fn(ParseNode $n) => $o->setAlerts($n->getCollectionOfObjectValues([Alert::class, 'createFromDiscriminatorValue'])),
            'assignedTo' => fn(ParseNode $n) => $o->setAssignedTo($n->getStringValue()),
            'classification' => fn(ParseNode $n) => $o->setClassification($n->getEnumValue(AlertClassification::class)),
            'comments' => fn(ParseNode $n) => $o->setComments($n->getCollectionOfObjectValues([AlertComment::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'customTags' => fn(ParseNode $n) => $o->setCustomTags($n->getCollectionOfPrimitiveValues()),
            'determination' => fn(ParseNode $n) => $o->setDetermination($n->getEnumValue(AlertDetermination::class)),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'incidentWebUrl' => fn(ParseNode $n) => $o->setIncidentWebUrl($n->getStringValue()),
            'lastUpdateDateTime' => fn(ParseNode $n) => $o->setLastUpdateDateTime($n->getDateTimeValue()),
            'redirectIncidentId' => fn(ParseNode $n) => $o->setRedirectIncidentId($n->getStringValue()),
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getEnumValue(AlertSeverity::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(IncidentStatus::class)),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the incidentWebUrl property value. The URL for the incident page in the Microsoft 365 Defender portal.
     * @return string|null
    */
    public function getIncidentWebUrl(): ?string {
        return $this->getBackingStore()->get('incidentWebUrl');
    }

    /**
     * Gets the lastUpdateDateTime property value. Time when the incident was last updated.
     * @return DateTime|null
    */
    public function getLastUpdateDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastUpdateDateTime');
    }

    /**
     * Gets the redirectIncidentId property value. Only populated in case an incident is grouped together with another incident, as part of the logic that processes incidents. In such a case, the status property is redirected.
     * @return string|null
    */
    public function getRedirectIncidentId(): ?string {
        return $this->getBackingStore()->get('redirectIncidentId');
    }

    /**
     * Gets the severity property value. The severity property
     * @return AlertSeverity|null
    */
    public function getSeverity(): ?AlertSeverity {
        return $this->getBackingStore()->get('severity');
    }

    /**
     * Gets the status property value. The status property
     * @return IncidentStatus|null
    */
    public function getStatus(): ?IncidentStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the tenantId property value. The Azure Active Directory tenant in which the alert was created.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->getBackingStore()->get('tenantId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('alerts', $this->getAlerts());
        $writer->writeStringValue('assignedTo', $this->getAssignedTo());
        $writer->writeEnumValue('classification', $this->getClassification());
        $writer->writeCollectionOfObjectValues('comments', $this->getComments());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfPrimitiveValues('customTags', $this->getCustomTags());
        $writer->writeEnumValue('determination', $this->getDetermination());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('incidentWebUrl', $this->getIncidentWebUrl());
        $writer->writeDateTimeValue('lastUpdateDateTime', $this->getLastUpdateDateTime());
        $writer->writeStringValue('redirectIncidentId', $this->getRedirectIncidentId());
        $writer->writeEnumValue('severity', $this->getSeverity());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('tenantId', $this->getTenantId());
    }

    /**
     * Sets the alerts property value. The list of related alerts. Supports $expand.
     * @param array<Alert>|null $value Value to set for the alerts property.
    */
    public function setAlerts(?array $value): void {
        $this->getBackingStore()->set('alerts', $value);
    }

    /**
     * Sets the assignedTo property value. Owner of the incident, or null if no owner is assigned. Free editable text.
     * @param string|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?string $value): void {
        $this->getBackingStore()->set('assignedTo', $value);
    }

    /**
     * Sets the classification property value. The specification for the incident. Possible values are: unknown, falsePositive, truePositive, informationalExpectedActivity, unknownFutureValue.
     * @param AlertClassification|null $value Value to set for the classification property.
    */
    public function setClassification(?AlertClassification $value): void {
        $this->getBackingStore()->set('classification', $value);
    }

    /**
     * Sets the comments property value. Array of comments created by the Security Operations (SecOps) team when the incident is managed.
     * @param array<AlertComment>|null $value Value to set for the comments property.
    */
    public function setComments(?array $value): void {
        $this->getBackingStore()->set('comments', $value);
    }

    /**
     * Sets the createdDateTime property value. Time when the incident was first created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the customTags property value. Array of custom tags associated with an incident.
     * @param array<string>|null $value Value to set for the customTags property.
    */
    public function setCustomTags(?array $value): void {
        $this->getBackingStore()->set('customTags', $value);
    }

    /**
     * Sets the determination property value. Specifies the determination of the incident. Possible values are: unknown, apt, malware, securityPersonnel, securityTesting, unwantedSoftware, other, multiStagedAttack, compromisedUser, phishing, maliciousUserActivity, clean, insufficientData, confirmedUserActivity, lineOfBusinessApplication, unknownFutureValue.
     * @param AlertDetermination|null $value Value to set for the determination property.
    */
    public function setDetermination(?AlertDetermination $value): void {
        $this->getBackingStore()->set('determination', $value);
    }

    /**
     * Sets the displayName property value. The incident name.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the incidentWebUrl property value. The URL for the incident page in the Microsoft 365 Defender portal.
     * @param string|null $value Value to set for the incidentWebUrl property.
    */
    public function setIncidentWebUrl(?string $value): void {
        $this->getBackingStore()->set('incidentWebUrl', $value);
    }

    /**
     * Sets the lastUpdateDateTime property value. Time when the incident was last updated.
     * @param DateTime|null $value Value to set for the lastUpdateDateTime property.
    */
    public function setLastUpdateDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdateDateTime', $value);
    }

    /**
     * Sets the redirectIncidentId property value. Only populated in case an incident is grouped together with another incident, as part of the logic that processes incidents. In such a case, the status property is redirected.
     * @param string|null $value Value to set for the redirectIncidentId property.
    */
    public function setRedirectIncidentId(?string $value): void {
        $this->getBackingStore()->set('redirectIncidentId', $value);
    }

    /**
     * Sets the severity property value. The severity property
     * @param AlertSeverity|null $value Value to set for the severity property.
    */
    public function setSeverity(?AlertSeverity $value): void {
        $this->getBackingStore()->set('severity', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param IncidentStatus|null $value Value to set for the status property.
    */
    public function setStatus(?IncidentStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the tenantId property value. The Azure Active Directory tenant in which the alert was created.
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

}
