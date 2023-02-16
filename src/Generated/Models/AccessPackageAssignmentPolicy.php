<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageAssignmentPolicy extends Entity implements Parsable 
{
    /**
     * Instantiates a new accessPackageAssignmentPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageAssignmentPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAssignmentPolicy {
        return new AccessPackageAssignmentPolicy();
    }

    /**
     * Gets the accessPackage property value. Access package containing this policy. Read-only.
     * @return AccessPackage|null
    */
    public function getAccessPackage(): ?AccessPackage {
        return $this->getBackingStore()->get('accessPackage');
    }

    /**
     * Gets the allowedTargetScope property value. Principals that can be assigned the access package through this policy. The possible values are: notSpecified, specificDirectoryUsers, specificConnectedOrganizationUsers, specificDirectoryServicePrincipals, allMemberUsers, allDirectoryUsers, allDirectoryServicePrincipals, allConfiguredConnectedOrganizationUsers, allExternalUsers, unknownFutureValue.
     * @return AllowedTargetScope|null
    */
    public function getAllowedTargetScope(): ?AllowedTargetScope {
        return $this->getBackingStore()->get('allowedTargetScope');
    }

    /**
     * Gets the automaticRequestSettings property value. This property is only present for an auto assignment policy; if absent, this is a request-based policy.
     * @return AccessPackageAutomaticRequestSettings|null
    */
    public function getAutomaticRequestSettings(): ?AccessPackageAutomaticRequestSettings {
        return $this->getBackingStore()->get('automaticRequestSettings');
    }

    /**
     * Gets the catalog property value. Catalog of the access package containing this policy. Read-only.
     * @return AccessPackageCatalog|null
    */
    public function getCatalog(): ?AccessPackageCatalog {
        return $this->getBackingStore()->get('catalog');
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the description property value. The description of the policy.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The display name of the policy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the expiration property value. The expiration date for assignments created in this policy.
     * @return ExpirationPattern|null
    */
    public function getExpiration(): ?ExpirationPattern {
        return $this->getBackingStore()->get('expiration');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackage' => fn(ParseNode $n) => $o->setAccessPackage($n->getObjectValue([AccessPackage::class, 'createFromDiscriminatorValue'])),
            'allowedTargetScope' => fn(ParseNode $n) => $o->setAllowedTargetScope($n->getEnumValue(AllowedTargetScope::class)),
            'automaticRequestSettings' => fn(ParseNode $n) => $o->setAutomaticRequestSettings($n->getObjectValue([AccessPackageAutomaticRequestSettings::class, 'createFromDiscriminatorValue'])),
            'catalog' => fn(ParseNode $n) => $o->setCatalog($n->getObjectValue([AccessPackageCatalog::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'expiration' => fn(ParseNode $n) => $o->setExpiration($n->getObjectValue([ExpirationPattern::class, 'createFromDiscriminatorValue'])),
            'modifiedDateTime' => fn(ParseNode $n) => $o->setModifiedDateTime($n->getDateTimeValue()),
            'questions' => fn(ParseNode $n) => $o->setQuestions($n->getCollectionOfObjectValues([AccessPackageQuestion::class, 'createFromDiscriminatorValue'])),
            'requestApprovalSettings' => fn(ParseNode $n) => $o->setRequestApprovalSettings($n->getObjectValue([AccessPackageAssignmentApprovalSettings::class, 'createFromDiscriminatorValue'])),
            'requestorSettings' => fn(ParseNode $n) => $o->setRequestorSettings($n->getObjectValue([AccessPackageAssignmentRequestorSettings::class, 'createFromDiscriminatorValue'])),
            'reviewSettings' => fn(ParseNode $n) => $o->setReviewSettings($n->getObjectValue([AccessPackageAssignmentReviewSettings::class, 'createFromDiscriminatorValue'])),
            'specificAllowedTargets' => fn(ParseNode $n) => $o->setSpecificAllowedTargets($n->getCollectionOfObjectValues([SubjectSet::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('modifiedDateTime');
    }

    /**
     * Gets the questions property value. The questions property
     * @return array<AccessPackageQuestion>|null
    */
    public function getQuestions(): ?array {
        return $this->getBackingStore()->get('questions');
    }

    /**
     * Gets the requestApprovalSettings property value. Specifies the settings for approval of requests for an access package assignment through this policy. For example, if approval is required for new requests.
     * @return AccessPackageAssignmentApprovalSettings|null
    */
    public function getRequestApprovalSettings(): ?AccessPackageAssignmentApprovalSettings {
        return $this->getBackingStore()->get('requestApprovalSettings');
    }

    /**
     * Gets the requestorSettings property value. Provides additional settings to select who can create a request for an access package assignment through this policy, and what they can include in their request.
     * @return AccessPackageAssignmentRequestorSettings|null
    */
    public function getRequestorSettings(): ?AccessPackageAssignmentRequestorSettings {
        return $this->getBackingStore()->get('requestorSettings');
    }

    /**
     * Gets the reviewSettings property value. Settings for access reviews of assignments through this policy.
     * @return AccessPackageAssignmentReviewSettings|null
    */
    public function getReviewSettings(): ?AccessPackageAssignmentReviewSettings {
        return $this->getBackingStore()->get('reviewSettings');
    }

    /**
     * Gets the specificAllowedTargets property value. The principals that can be assigned access from an access package through this policy.
     * @return array<SubjectSet>|null
    */
    public function getSpecificAllowedTargets(): ?array {
        return $this->getBackingStore()->get('specificAllowedTargets');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accessPackage', $this->getAccessPackage());
        $writer->writeEnumValue('allowedTargetScope', $this->getAllowedTargetScope());
        $writer->writeObjectValue('automaticRequestSettings', $this->getAutomaticRequestSettings());
        $writer->writeObjectValue('catalog', $this->getCatalog());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('expiration', $this->getExpiration());
        $writer->writeDateTimeValue('modifiedDateTime', $this->getModifiedDateTime());
        $writer->writeCollectionOfObjectValues('questions', $this->getQuestions());
        $writer->writeObjectValue('requestApprovalSettings', $this->getRequestApprovalSettings());
        $writer->writeObjectValue('requestorSettings', $this->getRequestorSettings());
        $writer->writeObjectValue('reviewSettings', $this->getReviewSettings());
        $writer->writeCollectionOfObjectValues('specificAllowedTargets', $this->getSpecificAllowedTargets());
    }

    /**
     * Sets the accessPackage property value. Access package containing this policy. Read-only.
     * @param AccessPackage|null $value Value to set for the accessPackage property.
    */
    public function setAccessPackage(?AccessPackage $value): void {
        $this->getBackingStore()->set('accessPackage', $value);
    }

    /**
     * Sets the allowedTargetScope property value. Principals that can be assigned the access package through this policy. The possible values are: notSpecified, specificDirectoryUsers, specificConnectedOrganizationUsers, specificDirectoryServicePrincipals, allMemberUsers, allDirectoryUsers, allDirectoryServicePrincipals, allConfiguredConnectedOrganizationUsers, allExternalUsers, unknownFutureValue.
     * @param AllowedTargetScope|null $value Value to set for the allowedTargetScope property.
    */
    public function setAllowedTargetScope(?AllowedTargetScope $value): void {
        $this->getBackingStore()->set('allowedTargetScope', $value);
    }

    /**
     * Sets the automaticRequestSettings property value. This property is only present for an auto assignment policy; if absent, this is a request-based policy.
     * @param AccessPackageAutomaticRequestSettings|null $value Value to set for the automaticRequestSettings property.
    */
    public function setAutomaticRequestSettings(?AccessPackageAutomaticRequestSettings $value): void {
        $this->getBackingStore()->set('automaticRequestSettings', $value);
    }

    /**
     * Sets the catalog property value. Catalog of the access package containing this policy. Read-only.
     * @param AccessPackageCatalog|null $value Value to set for the catalog property.
    */
    public function setCatalog(?AccessPackageCatalog $value): void {
        $this->getBackingStore()->set('catalog', $value);
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The description of the policy.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the policy.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the expiration property value. The expiration date for assignments created in this policy.
     * @param ExpirationPattern|null $value Value to set for the expiration property.
    */
    public function setExpiration(?ExpirationPattern $value): void {
        $this->getBackingStore()->set('expiration', $value);
    }

    /**
     * Sets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('modifiedDateTime', $value);
    }

    /**
     * Sets the questions property value. The questions property
     * @param array<AccessPackageQuestion>|null $value Value to set for the questions property.
    */
    public function setQuestions(?array $value): void {
        $this->getBackingStore()->set('questions', $value);
    }

    /**
     * Sets the requestApprovalSettings property value. Specifies the settings for approval of requests for an access package assignment through this policy. For example, if approval is required for new requests.
     * @param AccessPackageAssignmentApprovalSettings|null $value Value to set for the requestApprovalSettings property.
    */
    public function setRequestApprovalSettings(?AccessPackageAssignmentApprovalSettings $value): void {
        $this->getBackingStore()->set('requestApprovalSettings', $value);
    }

    /**
     * Sets the requestorSettings property value. Provides additional settings to select who can create a request for an access package assignment through this policy, and what they can include in their request.
     * @param AccessPackageAssignmentRequestorSettings|null $value Value to set for the requestorSettings property.
    */
    public function setRequestorSettings(?AccessPackageAssignmentRequestorSettings $value): void {
        $this->getBackingStore()->set('requestorSettings', $value);
    }

    /**
     * Sets the reviewSettings property value. Settings for access reviews of assignments through this policy.
     * @param AccessPackageAssignmentReviewSettings|null $value Value to set for the reviewSettings property.
    */
    public function setReviewSettings(?AccessPackageAssignmentReviewSettings $value): void {
        $this->getBackingStore()->set('reviewSettings', $value);
    }

    /**
     * Sets the specificAllowedTargets property value. The principals that can be assigned access from an access package through this policy.
     * @param array<SubjectSet>|null $value Value to set for the specificAllowedTargets property.
    */
    public function setSpecificAllowedTargets(?array $value): void {
        $this->getBackingStore()->set('specificAllowedTargets', $value);
    }

}
