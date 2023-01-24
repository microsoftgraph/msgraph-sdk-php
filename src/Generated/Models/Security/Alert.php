<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Alert extends Entity implements Parsable 
{
    /**
     * Instantiates a new alert and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Alert
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Alert {
        return new Alert();
    }

    /**
     * Gets the actorDisplayName property value. The adversary or activity group that is associated with this alert.
     * @return string|null
    */
    public function getActorDisplayName(): ?string {
        return $this->getBackingStore()->get('actorDisplayName');
    }

    /**
     * Gets the alertWebUrl property value. URL for the alert page in the Microsoft 365 Defender portal.
     * @return string|null
    */
    public function getAlertWebUrl(): ?string {
        return $this->getBackingStore()->get('alertWebUrl');
    }

    /**
     * Gets the assignedTo property value. Owner of the alert, or null if no owner is assigned.
     * @return string|null
    */
    public function getAssignedTo(): ?string {
        return $this->getBackingStore()->get('assignedTo');
    }

    /**
     * Gets the category property value. The attack kill-chain category that the alert belongs to. Aligned with the MITRE ATT&CK framework.
     * @return string|null
    */
    public function getCategory(): ?string {
        return $this->getBackingStore()->get('category');
    }

    /**
     * Gets the classification property value. Specifies whether the alert represents a true threat. Possible values are: unknown, falsePositive, truePositive, benignPositive, unknownFutureValue.
     * @return AlertClassification|null
    */
    public function getClassification(): ?AlertClassification {
        return $this->getBackingStore()->get('classification');
    }

    /**
     * Gets the comments property value. Array of comments created by the Security Operations (SecOps) team during the alert management process.
     * @return array<AlertComment>|null
    */
    public function getComments(): ?array {
        return $this->getBackingStore()->get('comments');
    }

    /**
     * Gets the createdDateTime property value. Time when Microsoft 365 Defender created the alert.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the description property value. String value describing each alert.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the detectionSource property value. Detection technology or sensor that identified the notable component or activity.
     * @return DetectionSource|null
    */
    public function getDetectionSource(): ?DetectionSource {
        return $this->getBackingStore()->get('detectionSource');
    }

    /**
     * Gets the detectorId property value. The ID of the detector that triggered the alert.
     * @return string|null
    */
    public function getDetectorId(): ?string {
        return $this->getBackingStore()->get('detectorId');
    }

    /**
     * Gets the determination property value. Specifies the result of the investigation, whether the alert represents a true attack and if so, the nature of the attack. Possible values are: unknown, apt, malware, securityPersonnel, securityTesting, unwantedSoftware, other, multiStagedAttack, compromisedUser, phishing, maliciousUserActivity, clean, insufficientData, confirmedUserActivity, lineOfBusinessApplication, unknownFutureValue.
     * @return AlertDetermination|null
    */
    public function getDetermination(): ?AlertDetermination {
        return $this->getBackingStore()->get('determination');
    }

    /**
     * Gets the evidence property value. Collection of evidence related to the alert.
     * @return array<AlertEvidence>|null
    */
    public function getEvidence(): ?array {
        return $this->getBackingStore()->get('evidence');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'actorDisplayName' => fn(ParseNode $n) => $o->setActorDisplayName($n->getStringValue()),
            'alertWebUrl' => fn(ParseNode $n) => $o->setAlertWebUrl($n->getStringValue()),
            'assignedTo' => fn(ParseNode $n) => $o->setAssignedTo($n->getStringValue()),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getStringValue()),
            'classification' => fn(ParseNode $n) => $o->setClassification($n->getEnumValue(AlertClassification::class)),
            'comments' => fn(ParseNode $n) => $o->setComments($n->getCollectionOfObjectValues([AlertComment::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'detectionSource' => fn(ParseNode $n) => $o->setDetectionSource($n->getEnumValue(DetectionSource::class)),
            'detectorId' => fn(ParseNode $n) => $o->setDetectorId($n->getStringValue()),
            'determination' => fn(ParseNode $n) => $o->setDetermination($n->getEnumValue(AlertDetermination::class)),
            'evidence' => fn(ParseNode $n) => $o->setEvidence($n->getCollectionOfObjectValues([AlertEvidence::class, 'createFromDiscriminatorValue'])),
            'firstActivityDateTime' => fn(ParseNode $n) => $o->setFirstActivityDateTime($n->getDateTimeValue()),
            'incidentId' => fn(ParseNode $n) => $o->setIncidentId($n->getStringValue()),
            'incidentWebUrl' => fn(ParseNode $n) => $o->setIncidentWebUrl($n->getStringValue()),
            'lastActivityDateTime' => fn(ParseNode $n) => $o->setLastActivityDateTime($n->getDateTimeValue()),
            'lastUpdateDateTime' => fn(ParseNode $n) => $o->setLastUpdateDateTime($n->getDateTimeValue()),
            'mitreTechniques' => fn(ParseNode $n) => $o->setMitreTechniques($n->getCollectionOfPrimitiveValues()),
            'providerAlertId' => fn(ParseNode $n) => $o->setProviderAlertId($n->getStringValue()),
            'recommendedActions' => fn(ParseNode $n) => $o->setRecommendedActions($n->getStringValue()),
            'resolvedDateTime' => fn(ParseNode $n) => $o->setResolvedDateTime($n->getDateTimeValue()),
            'serviceSource' => fn(ParseNode $n) => $o->setServiceSource($n->getEnumValue(ServiceSource::class)),
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getEnumValue(AlertSeverity::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(AlertStatus::class)),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'threatDisplayName' => fn(ParseNode $n) => $o->setThreatDisplayName($n->getStringValue()),
            'threatFamilyName' => fn(ParseNode $n) => $o->setThreatFamilyName($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ]);
    }

    /**
     * Gets the firstActivityDateTime property value. The earliest activity associated with the alert.
     * @return DateTime|null
    */
    public function getFirstActivityDateTime(): ?DateTime {
        return $this->getBackingStore()->get('firstActivityDateTime');
    }

    /**
     * Gets the incidentId property value. Unique identifier to represent the incident this alert resource is associated with.
     * @return string|null
    */
    public function getIncidentId(): ?string {
        return $this->getBackingStore()->get('incidentId');
    }

    /**
     * Gets the incidentWebUrl property value. URL for the incident page in the Microsoft 365 Defender portal.
     * @return string|null
    */
    public function getIncidentWebUrl(): ?string {
        return $this->getBackingStore()->get('incidentWebUrl');
    }

    /**
     * Gets the lastActivityDateTime property value. The oldest activity associated with the alert.
     * @return DateTime|null
    */
    public function getLastActivityDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastActivityDateTime');
    }

    /**
     * Gets the lastUpdateDateTime property value. Time when the alert was last updated at Microsoft 365 Defender.
     * @return DateTime|null
    */
    public function getLastUpdateDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastUpdateDateTime');
    }

    /**
     * Gets the mitreTechniques property value. The attack techniques, as aligned with the MITRE ATT&CK framework.
     * @return array<string>|null
    */
    public function getMitreTechniques(): ?array {
        return $this->getBackingStore()->get('mitreTechniques');
    }

    /**
     * Gets the providerAlertId property value. The ID of the alert as it appears in the security provider product that generated the alert.
     * @return string|null
    */
    public function getProviderAlertId(): ?string {
        return $this->getBackingStore()->get('providerAlertId');
    }

    /**
     * Gets the recommendedActions property value. Recommended response and remediation actions to take in the event this alert was generated.
     * @return string|null
    */
    public function getRecommendedActions(): ?string {
        return $this->getBackingStore()->get('recommendedActions');
    }

    /**
     * Gets the resolvedDateTime property value. Time when the alert was resolved.
     * @return DateTime|null
    */
    public function getResolvedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('resolvedDateTime');
    }

    /**
     * Gets the serviceSource property value. The serviceSource property
     * @return ServiceSource|null
    */
    public function getServiceSource(): ?ServiceSource {
        return $this->getBackingStore()->get('serviceSource');
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
     * @return AlertStatus|null
    */
    public function getStatus(): ?AlertStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the tenantId property value. The Azure Active Directory tenant the alert was created in.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->getBackingStore()->get('tenantId');
    }

    /**
     * Gets the threatDisplayName property value. The threat associated with this alert.
     * @return string|null
    */
    public function getThreatDisplayName(): ?string {
        return $this->getBackingStore()->get('threatDisplayName');
    }

    /**
     * Gets the threatFamilyName property value. Threat family associated with this alert.
     * @return string|null
    */
    public function getThreatFamilyName(): ?string {
        return $this->getBackingStore()->get('threatFamilyName');
    }

    /**
     * Gets the title property value. Brief identifying string value describing the alert.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->getBackingStore()->get('title');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('actorDisplayName', $this->getActorDisplayName());
        $writer->writeStringValue('alertWebUrl', $this->getAlertWebUrl());
        $writer->writeStringValue('assignedTo', $this->getAssignedTo());
        $writer->writeStringValue('category', $this->getCategory());
        $writer->writeEnumValue('classification', $this->getClassification());
        $writer->writeCollectionOfObjectValues('comments', $this->getComments());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeEnumValue('detectionSource', $this->getDetectionSource());
        $writer->writeStringValue('detectorId', $this->getDetectorId());
        $writer->writeEnumValue('determination', $this->getDetermination());
        $writer->writeCollectionOfObjectValues('evidence', $this->getEvidence());
        $writer->writeDateTimeValue('firstActivityDateTime', $this->getFirstActivityDateTime());
        $writer->writeStringValue('incidentId', $this->getIncidentId());
        $writer->writeStringValue('incidentWebUrl', $this->getIncidentWebUrl());
        $writer->writeDateTimeValue('lastActivityDateTime', $this->getLastActivityDateTime());
        $writer->writeDateTimeValue('lastUpdateDateTime', $this->getLastUpdateDateTime());
        $writer->writeCollectionOfPrimitiveValues('mitreTechniques', $this->getMitreTechniques());
        $writer->writeStringValue('providerAlertId', $this->getProviderAlertId());
        $writer->writeStringValue('recommendedActions', $this->getRecommendedActions());
        $writer->writeDateTimeValue('resolvedDateTime', $this->getResolvedDateTime());
        $writer->writeEnumValue('serviceSource', $this->getServiceSource());
        $writer->writeEnumValue('severity', $this->getSeverity());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeStringValue('threatDisplayName', $this->getThreatDisplayName());
        $writer->writeStringValue('threatFamilyName', $this->getThreatFamilyName());
        $writer->writeStringValue('title', $this->getTitle());
    }

    /**
     * Sets the actorDisplayName property value. The adversary or activity group that is associated with this alert.
     * @param string|null $value Value to set for the actorDisplayName property.
    */
    public function setActorDisplayName(?string $value): void {
        $this->getBackingStore()->set('actorDisplayName', $value);
    }

    /**
     * Sets the alertWebUrl property value. URL for the alert page in the Microsoft 365 Defender portal.
     * @param string|null $value Value to set for the alertWebUrl property.
    */
    public function setAlertWebUrl(?string $value): void {
        $this->getBackingStore()->set('alertWebUrl', $value);
    }

    /**
     * Sets the assignedTo property value. Owner of the alert, or null if no owner is assigned.
     * @param string|null $value Value to set for the assignedTo property.
    */
    public function setAssignedTo(?string $value): void {
        $this->getBackingStore()->set('assignedTo', $value);
    }

    /**
     * Sets the category property value. The attack kill-chain category that the alert belongs to. Aligned with the MITRE ATT&CK framework.
     * @param string|null $value Value to set for the category property.
    */
    public function setCategory(?string $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the classification property value. Specifies whether the alert represents a true threat. Possible values are: unknown, falsePositive, truePositive, benignPositive, unknownFutureValue.
     * @param AlertClassification|null $value Value to set for the classification property.
    */
    public function setClassification(?AlertClassification $value): void {
        $this->getBackingStore()->set('classification', $value);
    }

    /**
     * Sets the comments property value. Array of comments created by the Security Operations (SecOps) team during the alert management process.
     * @param array<AlertComment>|null $value Value to set for the comments property.
    */
    public function setComments(?array $value): void {
        $this->getBackingStore()->set('comments', $value);
    }

    /**
     * Sets the createdDateTime property value. Time when Microsoft 365 Defender created the alert.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. String value describing each alert.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the detectionSource property value. Detection technology or sensor that identified the notable component or activity.
     * @param DetectionSource|null $value Value to set for the detectionSource property.
    */
    public function setDetectionSource(?DetectionSource $value): void {
        $this->getBackingStore()->set('detectionSource', $value);
    }

    /**
     * Sets the detectorId property value. The ID of the detector that triggered the alert.
     * @param string|null $value Value to set for the detectorId property.
    */
    public function setDetectorId(?string $value): void {
        $this->getBackingStore()->set('detectorId', $value);
    }

    /**
     * Sets the determination property value. Specifies the result of the investigation, whether the alert represents a true attack and if so, the nature of the attack. Possible values are: unknown, apt, malware, securityPersonnel, securityTesting, unwantedSoftware, other, multiStagedAttack, compromisedUser, phishing, maliciousUserActivity, clean, insufficientData, confirmedUserActivity, lineOfBusinessApplication, unknownFutureValue.
     * @param AlertDetermination|null $value Value to set for the determination property.
    */
    public function setDetermination(?AlertDetermination $value): void {
        $this->getBackingStore()->set('determination', $value);
    }

    /**
     * Sets the evidence property value. Collection of evidence related to the alert.
     * @param array<AlertEvidence>|null $value Value to set for the evidence property.
    */
    public function setEvidence(?array $value): void {
        $this->getBackingStore()->set('evidence', $value);
    }

    /**
     * Sets the firstActivityDateTime property value. The earliest activity associated with the alert.
     * @param DateTime|null $value Value to set for the firstActivityDateTime property.
    */
    public function setFirstActivityDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('firstActivityDateTime', $value);
    }

    /**
     * Sets the incidentId property value. Unique identifier to represent the incident this alert resource is associated with.
     * @param string|null $value Value to set for the incidentId property.
    */
    public function setIncidentId(?string $value): void {
        $this->getBackingStore()->set('incidentId', $value);
    }

    /**
     * Sets the incidentWebUrl property value. URL for the incident page in the Microsoft 365 Defender portal.
     * @param string|null $value Value to set for the incidentWebUrl property.
    */
    public function setIncidentWebUrl(?string $value): void {
        $this->getBackingStore()->set('incidentWebUrl', $value);
    }

    /**
     * Sets the lastActivityDateTime property value. The oldest activity associated with the alert.
     * @param DateTime|null $value Value to set for the lastActivityDateTime property.
    */
    public function setLastActivityDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastActivityDateTime', $value);
    }

    /**
     * Sets the lastUpdateDateTime property value. Time when the alert was last updated at Microsoft 365 Defender.
     * @param DateTime|null $value Value to set for the lastUpdateDateTime property.
    */
    public function setLastUpdateDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdateDateTime', $value);
    }

    /**
     * Sets the mitreTechniques property value. The attack techniques, as aligned with the MITRE ATT&CK framework.
     * @param array<string>|null $value Value to set for the mitreTechniques property.
    */
    public function setMitreTechniques(?array $value): void {
        $this->getBackingStore()->set('mitreTechniques', $value);
    }

    /**
     * Sets the providerAlertId property value. The ID of the alert as it appears in the security provider product that generated the alert.
     * @param string|null $value Value to set for the providerAlertId property.
    */
    public function setProviderAlertId(?string $value): void {
        $this->getBackingStore()->set('providerAlertId', $value);
    }

    /**
     * Sets the recommendedActions property value. Recommended response and remediation actions to take in the event this alert was generated.
     * @param string|null $value Value to set for the recommendedActions property.
    */
    public function setRecommendedActions(?string $value): void {
        $this->getBackingStore()->set('recommendedActions', $value);
    }

    /**
     * Sets the resolvedDateTime property value. Time when the alert was resolved.
     * @param DateTime|null $value Value to set for the resolvedDateTime property.
    */
    public function setResolvedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('resolvedDateTime', $value);
    }

    /**
     * Sets the serviceSource property value. The serviceSource property
     * @param ServiceSource|null $value Value to set for the serviceSource property.
    */
    public function setServiceSource(?ServiceSource $value): void {
        $this->getBackingStore()->set('serviceSource', $value);
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
     * @param AlertStatus|null $value Value to set for the status property.
    */
    public function setStatus(?AlertStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the tenantId property value. The Azure Active Directory tenant the alert was created in.
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the threatDisplayName property value. The threat associated with this alert.
     * @param string|null $value Value to set for the threatDisplayName property.
    */
    public function setThreatDisplayName(?string $value): void {
        $this->getBackingStore()->set('threatDisplayName', $value);
    }

    /**
     * Sets the threatFamilyName property value. Threat family associated with this alert.
     * @param string|null $value Value to set for the threatFamilyName property.
    */
    public function setThreatFamilyName(?string $value): void {
        $this->getBackingStore()->set('threatFamilyName', $value);
    }

    /**
     * Sets the title property value. Brief identifying string value describing the alert.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

}
