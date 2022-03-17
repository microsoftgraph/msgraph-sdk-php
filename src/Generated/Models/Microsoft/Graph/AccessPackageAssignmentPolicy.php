<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageAssignmentPolicy extends Entity 
{
    /** @var AccessPackage|null $accessPackage The access package with this policy. Read-only. Nullable. Supports $expand. */
    private ?AccessPackage $accessPackage = null;
    
    /** @var AllowedTargetScope|null $allowedTargetScope  */
    private ?AllowedTargetScope $allowedTargetScope = null;
    
    /** @var AccessPackageCatalog|null $catalog  */
    private ?AccessPackageCatalog $catalog = null;
    
    /** @var DateTime|null $createdDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    private ?DateTime $createdDateTime = null;
    
    /** @var string|null $description The description of the policy. */
    private ?string $description = null;
    
    /** @var string|null $displayName The display name of the policy. Supports $filter (eq). */
    private ?string $displayName = null;
    
    /** @var ExpirationPattern|null $expiration  */
    private ?ExpirationPattern $expiration = null;
    
    /** @var DateTime|null $modifiedDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    private ?DateTime $modifiedDateTime = null;
    
    /** @var AccessPackageAssignmentApprovalSettings|null $requestApprovalSettings Who must approve requests for access package in this policy. */
    private ?AccessPackageAssignmentApprovalSettings $requestApprovalSettings = null;
    
    /** @var AccessPackageAssignmentRequestorSettings|null $requestorSettings Who can request this access package from this policy. */
    private ?AccessPackageAssignmentRequestorSettings $requestorSettings = null;
    
    /** @var AccessPackageAssignmentReviewSettings|null $reviewSettings  */
    private ?AccessPackageAssignmentReviewSettings $reviewSettings = null;
    
    /** @var array<SubjectSet>|null $specificAllowedTargets  */
    private ?array $specificAllowedTargets = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAssignmentPolicy {
        return new AccessPackageAssignmentPolicy();
    }

    /**
     * Gets the accessPackage property value. The access package with this policy. Read-only. Nullable. Supports $expand.
     * @return AccessPackage|null
    */
    public function getAccessPackage(): ?AccessPackage {
        return $this->accessPackage;
    }

    /**
     * Gets the allowedTargetScope property value. 
     * @return AllowedTargetScope|null
    */
    public function getAllowedTargetScope(): ?AllowedTargetScope {
        return $this->allowedTargetScope;
    }

    /**
     * Gets the catalog property value. 
     * @return AccessPackageCatalog|null
    */
    public function getCatalog(): ?AccessPackageCatalog {
        return $this->catalog;
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. The description of the policy.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name of the policy. Supports $filter (eq).
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the expiration property value. 
     * @return ExpirationPattern|null
    */
    public function getExpiration(): ?ExpirationPattern {
        return $this->expiration;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackage' => function (self $o, ParseNode $n) { $o->setAccessPackage($n->getObjectValue(AccessPackage::class)); },
            'allowedTargetScope' => function (self $o, ParseNode $n) { $o->setAllowedTargetScope($n->getEnumValue(AllowedTargetScope::class)); },
            'catalog' => function (self $o, ParseNode $n) { $o->setCatalog($n->getObjectValue(AccessPackageCatalog::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'expiration' => function (self $o, ParseNode $n) { $o->setExpiration($n->getObjectValue(ExpirationPattern::class)); },
            'modifiedDateTime' => function (self $o, ParseNode $n) { $o->setModifiedDateTime($n->getDateTimeValue()); },
            'requestApprovalSettings' => function (self $o, ParseNode $n) { $o->setRequestApprovalSettings($n->getObjectValue(AccessPackageAssignmentApprovalSettings::class)); },
            'requestorSettings' => function (self $o, ParseNode $n) { $o->setRequestorSettings($n->getObjectValue(AccessPackageAssignmentRequestorSettings::class)); },
            'reviewSettings' => function (self $o, ParseNode $n) { $o->setReviewSettings($n->getObjectValue(AccessPackageAssignmentReviewSettings::class)); },
            'specificAllowedTargets' => function (self $o, ParseNode $n) { $o->setSpecificAllowedTargets($n->getCollectionOfObjectValues(SubjectSet::class)); },
        ]);
    }

    /**
     * Gets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->modifiedDateTime;
    }

    /**
     * Gets the requestApprovalSettings property value. Who must approve requests for access package in this policy.
     * @return AccessPackageAssignmentApprovalSettings|null
    */
    public function getRequestApprovalSettings(): ?AccessPackageAssignmentApprovalSettings {
        return $this->requestApprovalSettings;
    }

    /**
     * Gets the requestorSettings property value. Who can request this access package from this policy.
     * @return AccessPackageAssignmentRequestorSettings|null
    */
    public function getRequestorSettings(): ?AccessPackageAssignmentRequestorSettings {
        return $this->requestorSettings;
    }

    /**
     * Gets the reviewSettings property value. 
     * @return AccessPackageAssignmentReviewSettings|null
    */
    public function getReviewSettings(): ?AccessPackageAssignmentReviewSettings {
        return $this->reviewSettings;
    }

    /**
     * Gets the specificAllowedTargets property value. 
     * @return array<SubjectSet>|null
    */
    public function getSpecificAllowedTargets(): ?array {
        return $this->specificAllowedTargets;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accessPackage', $this->accessPackage);
        $writer->writeEnumValue('allowedTargetScope', $this->allowedTargetScope);
        $writer->writeObjectValue('catalog', $this->catalog);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeObjectValue('expiration', $this->expiration);
        $writer->writeDateTimeValue('modifiedDateTime', $this->modifiedDateTime);
        $writer->writeObjectValue('requestApprovalSettings', $this->requestApprovalSettings);
        $writer->writeObjectValue('requestorSettings', $this->requestorSettings);
        $writer->writeObjectValue('reviewSettings', $this->reviewSettings);
        $writer->writeCollectionOfObjectValues('specificAllowedTargets', $this->specificAllowedTargets);
    }

    /**
     * Sets the accessPackage property value. The access package with this policy. Read-only. Nullable. Supports $expand.
     *  @param AccessPackage|null $value Value to set for the accessPackage property.
    */
    public function setAccessPackage(?AccessPackage $value ): void {
        $this->accessPackage = $value;
    }

    /**
     * Sets the allowedTargetScope property value. 
     *  @param AllowedTargetScope|null $value Value to set for the allowedTargetScope property.
    */
    public function setAllowedTargetScope(?AllowedTargetScope $value ): void {
        $this->allowedTargetScope = $value;
    }

    /**
     * Sets the catalog property value. 
     *  @param AccessPackageCatalog|null $value Value to set for the catalog property.
    */
    public function setCatalog(?AccessPackageCatalog $value ): void {
        $this->catalog = $value;
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. The description of the policy.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name of the policy. Supports $filter (eq).
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the expiration property value. 
     *  @param ExpirationPattern|null $value Value to set for the expiration property.
    */
    public function setExpiration(?ExpirationPattern $value ): void {
        $this->expiration = $value;
    }

    /**
     * Sets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value ): void {
        $this->modifiedDateTime = $value;
    }

    /**
     * Sets the requestApprovalSettings property value. Who must approve requests for access package in this policy.
     *  @param AccessPackageAssignmentApprovalSettings|null $value Value to set for the requestApprovalSettings property.
    */
    public function setRequestApprovalSettings(?AccessPackageAssignmentApprovalSettings $value ): void {
        $this->requestApprovalSettings = $value;
    }

    /**
     * Sets the requestorSettings property value. Who can request this access package from this policy.
     *  @param AccessPackageAssignmentRequestorSettings|null $value Value to set for the requestorSettings property.
    */
    public function setRequestorSettings(?AccessPackageAssignmentRequestorSettings $value ): void {
        $this->requestorSettings = $value;
    }

    /**
     * Sets the reviewSettings property value. 
     *  @param AccessPackageAssignmentReviewSettings|null $value Value to set for the reviewSettings property.
    */
    public function setReviewSettings(?AccessPackageAssignmentReviewSettings $value ): void {
        $this->reviewSettings = $value;
    }

    /**
     * Sets the specificAllowedTargets property value. 
     *  @param array<SubjectSet>|null $value Value to set for the specificAllowedTargets property.
    */
    public function setSpecificAllowedTargets(?array $value ): void {
        $this->specificAllowedTargets = $value;
    }

}
