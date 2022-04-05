<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewScheduleDefinition extends Entity 
{
    /** @var array<AccessReviewNotificationRecipientItem>|null $additionalNotificationRecipients Defines the list of additional users or group members to be notified of the access review progress. */
    private ?array $additionalNotificationRecipients = null;
    
    /** @var UserIdentity|null $createdBy User who created this review. Read-only. */
    private ?UserIdentity $createdBy = null;
    
    /** @var DateTime|null $createdDateTime Timestamp when the access review series was created. Supports $select and $orderBy. Read-only. */
    private ?DateTime $createdDateTime = null;
    
    /** @var string|null $descriptionForAdmins Description provided by review creators to provide more context of the review to admins. Supports $select. */
    private ?string $descriptionForAdmins = null;
    
    /** @var string|null $descriptionForReviewers Description provided  by review creators to provide more context of the review to reviewers. Reviewers will see this description in the email sent to them requesting their review. Email notifications support up to 256 characters. Supports $select. */
    private ?string $descriptionForReviewers = null;
    
    /** @var string|null $displayName Name of the access review series. Supports $select and $orderBy. Required on create. */
    private ?string $displayName = null;
    
    /** @var array<AccessReviewReviewerScope>|null $fallbackReviewers This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers will be notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner does not exist, or manager is specified as reviewer but a user's manager does not exist. See accessReviewReviewerScope. Replaces backupReviewers. Supports $select. */
    private ?array $fallbackReviewers = null;
    
    /** @var AccessReviewScope|null $instanceEnumerationScope This property is required when scoping a review to guest users' access across all Microsoft 365 groups and determines which Microsoft 365 groups are reviewed. Each group will become a unique accessReviewInstance of the access review series.  For supported scopes, see accessReviewScope. Supports $select. For examples of options for configuring instanceEnumerationScope, see Configure the scope of your access review definition using the Microsoft Graph API. */
    private ?AccessReviewScope $instanceEnumerationScope = null;
    
    /** @var array<AccessReviewInstance>|null $instances If the accessReviewScheduleDefinition is a recurring access review, instances represent each recurrence. A review that does not recur will have exactly one instance. Instances also represent each unique resource under review in the accessReviewScheduleDefinition. If a review has multiple resources and multiple instances, each resource will have a unique instance for each recurrence. */
    private ?array $instances = null;
    
    /** @var DateTime|null $lastModifiedDateTime Timestamp when the access review series was last modified. Supports $select. Read-only. */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var array<AccessReviewReviewerScope>|null $reviewers This collection of access review scopes is used to define who are the reviewers. The reviewers property is only updatable if individual users are assigned as reviewers. Required on create. Supports $select. For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API. */
    private ?array $reviewers = null;
    
    /** @var AccessReviewScope|null $scope Defines the entities whose access is reviewed.  For supported scopes, see accessReviewScope. Required on create. Supports $select and $filter (contains only). For examples of options for configuring scope, see Configure the scope of your access review definition using the Microsoft Graph API. */
    private ?AccessReviewScope $scope = null;
    
    /** @var AccessReviewScheduleSettings|null $settings The settings for an access review series, see type definition below. Supports $select. Required on create. */
    private ?AccessReviewScheduleSettings $settings = null;
    
    /** @var string|null $status This read-only field specifies the status of an access review. The typical states include Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed.  Supports $select, $orderby, and $filter (eq only). Read-only. */
    private ?string $status = null;
    
    /**
     * Instantiates a new accessReviewScheduleDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewScheduleDefinition
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewScheduleDefinition {
        return new AccessReviewScheduleDefinition();
    }

    /**
     * Gets the additionalNotificationRecipients property value. Defines the list of additional users or group members to be notified of the access review progress.
     * @return array<AccessReviewNotificationRecipientItem>|null
    */
    public function getAdditionalNotificationRecipients(): ?array {
        return $this->additionalNotificationRecipients;
    }

    /**
     * Gets the createdBy property value. User who created this review. Read-only.
     * @return UserIdentity|null
    */
    public function getCreatedBy(): ?UserIdentity {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. Timestamp when the access review series was created. Supports $select and $orderBy. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the descriptionForAdmins property value. Description provided by review creators to provide more context of the review to admins. Supports $select.
     * @return string|null
    */
    public function getDescriptionForAdmins(): ?string {
        return $this->descriptionForAdmins;
    }

    /**
     * Gets the descriptionForReviewers property value. Description provided  by review creators to provide more context of the review to reviewers. Reviewers will see this description in the email sent to them requesting their review. Email notifications support up to 256 characters. Supports $select.
     * @return string|null
    */
    public function getDescriptionForReviewers(): ?string {
        return $this->descriptionForReviewers;
    }

    /**
     * Gets the displayName property value. Name of the access review series. Supports $select and $orderBy. Required on create.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the fallbackReviewers property value. This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers will be notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner does not exist, or manager is specified as reviewer but a user's manager does not exist. See accessReviewReviewerScope. Replaces backupReviewers. Supports $select.
     * @return array<AccessReviewReviewerScope>|null
    */
    public function getFallbackReviewers(): ?array {
        return $this->fallbackReviewers;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'additionalNotificationRecipients' => function (self $o, ParseNode $n) { $o->setAdditionalNotificationRecipients($n->getCollectionOfObjectValues(AccessReviewNotificationRecipientItem::class)); },
            'createdBy' => function (self $o, ParseNode $n) { $o->setCreatedBy($n->getObjectValue(UserIdentity::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'descriptionForAdmins' => function (self $o, ParseNode $n) { $o->setDescriptionForAdmins($n->getStringValue()); },
            'descriptionForReviewers' => function (self $o, ParseNode $n) { $o->setDescriptionForReviewers($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'fallbackReviewers' => function (self $o, ParseNode $n) { $o->setFallbackReviewers($n->getCollectionOfObjectValues(AccessReviewReviewerScope::class)); },
            'instanceEnumerationScope' => function (self $o, ParseNode $n) { $o->setInstanceEnumerationScope($n->getObjectValue(AccessReviewScope::class)); },
            'instances' => function (self $o, ParseNode $n) { $o->setInstances($n->getCollectionOfObjectValues(AccessReviewInstance::class)); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'reviewers' => function (self $o, ParseNode $n) { $o->setReviewers($n->getCollectionOfObjectValues(AccessReviewReviewerScope::class)); },
            'scope' => function (self $o, ParseNode $n) { $o->setScope($n->getObjectValue(AccessReviewScope::class)); },
            'settings' => function (self $o, ParseNode $n) { $o->setSettings($n->getObjectValue(AccessReviewScheduleSettings::class)); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the instanceEnumerationScope property value. This property is required when scoping a review to guest users' access across all Microsoft 365 groups and determines which Microsoft 365 groups are reviewed. Each group will become a unique accessReviewInstance of the access review series.  For supported scopes, see accessReviewScope. Supports $select. For examples of options for configuring instanceEnumerationScope, see Configure the scope of your access review definition using the Microsoft Graph API.
     * @return AccessReviewScope|null
    */
    public function getInstanceEnumerationScope(): ?AccessReviewScope {
        return $this->instanceEnumerationScope;
    }

    /**
     * Gets the instances property value. If the accessReviewScheduleDefinition is a recurring access review, instances represent each recurrence. A review that does not recur will have exactly one instance. Instances also represent each unique resource under review in the accessReviewScheduleDefinition. If a review has multiple resources and multiple instances, each resource will have a unique instance for each recurrence.
     * @return array<AccessReviewInstance>|null
    */
    public function getInstances(): ?array {
        return $this->instances;
    }

    /**
     * Gets the lastModifiedDateTime property value. Timestamp when the access review series was last modified. Supports $select. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the reviewers property value. This collection of access review scopes is used to define who are the reviewers. The reviewers property is only updatable if individual users are assigned as reviewers. Required on create. Supports $select. For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API.
     * @return array<AccessReviewReviewerScope>|null
    */
    public function getReviewers(): ?array {
        return $this->reviewers;
    }

    /**
     * Gets the scope property value. Defines the entities whose access is reviewed.  For supported scopes, see accessReviewScope. Required on create. Supports $select and $filter (contains only). For examples of options for configuring scope, see Configure the scope of your access review definition using the Microsoft Graph API.
     * @return AccessReviewScope|null
    */
    public function getScope(): ?AccessReviewScope {
        return $this->scope;
    }

    /**
     * Gets the settings property value. The settings for an access review series, see type definition below. Supports $select. Required on create.
     * @return AccessReviewScheduleSettings|null
    */
    public function getSettings(): ?AccessReviewScheduleSettings {
        return $this->settings;
    }

    /**
     * Gets the status property value. This read-only field specifies the status of an access review. The typical states include Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed.  Supports $select, $orderby, and $filter (eq only). Read-only.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('additionalNotificationRecipients', $this->additionalNotificationRecipients);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('descriptionForAdmins', $this->descriptionForAdmins);
        $writer->writeStringValue('descriptionForReviewers', $this->descriptionForReviewers);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('fallbackReviewers', $this->fallbackReviewers);
        $writer->writeObjectValue('instanceEnumerationScope', $this->instanceEnumerationScope);
        $writer->writeCollectionOfObjectValues('instances', $this->instances);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeCollectionOfObjectValues('reviewers', $this->reviewers);
        $writer->writeObjectValue('scope', $this->scope);
        $writer->writeObjectValue('settings', $this->settings);
        $writer->writeStringValue('status', $this->status);
    }

    /**
     * Sets the additionalNotificationRecipients property value. Defines the list of additional users or group members to be notified of the access review progress.
     *  @param array<AccessReviewNotificationRecipientItem>|null $value Value to set for the additionalNotificationRecipients property.
    */
    public function setAdditionalNotificationRecipients(?array $value ): void {
        $this->additionalNotificationRecipients = $value;
    }

    /**
     * Sets the createdBy property value. User who created this review. Read-only.
     *  @param UserIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?UserIdentity $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. Timestamp when the access review series was created. Supports $select and $orderBy. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the descriptionForAdmins property value. Description provided by review creators to provide more context of the review to admins. Supports $select.
     *  @param string|null $value Value to set for the descriptionForAdmins property.
    */
    public function setDescriptionForAdmins(?string $value ): void {
        $this->descriptionForAdmins = $value;
    }

    /**
     * Sets the descriptionForReviewers property value. Description provided  by review creators to provide more context of the review to reviewers. Reviewers will see this description in the email sent to them requesting their review. Email notifications support up to 256 characters. Supports $select.
     *  @param string|null $value Value to set for the descriptionForReviewers property.
    */
    public function setDescriptionForReviewers(?string $value ): void {
        $this->descriptionForReviewers = $value;
    }

    /**
     * Sets the displayName property value. Name of the access review series. Supports $select and $orderBy. Required on create.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the fallbackReviewers property value. This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers will be notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner does not exist, or manager is specified as reviewer but a user's manager does not exist. See accessReviewReviewerScope. Replaces backupReviewers. Supports $select.
     *  @param array<AccessReviewReviewerScope>|null $value Value to set for the fallbackReviewers property.
    */
    public function setFallbackReviewers(?array $value ): void {
        $this->fallbackReviewers = $value;
    }

    /**
     * Sets the instanceEnumerationScope property value. This property is required when scoping a review to guest users' access across all Microsoft 365 groups and determines which Microsoft 365 groups are reviewed. Each group will become a unique accessReviewInstance of the access review series.  For supported scopes, see accessReviewScope. Supports $select. For examples of options for configuring instanceEnumerationScope, see Configure the scope of your access review definition using the Microsoft Graph API.
     *  @param AccessReviewScope|null $value Value to set for the instanceEnumerationScope property.
    */
    public function setInstanceEnumerationScope(?AccessReviewScope $value ): void {
        $this->instanceEnumerationScope = $value;
    }

    /**
     * Sets the instances property value. If the accessReviewScheduleDefinition is a recurring access review, instances represent each recurrence. A review that does not recur will have exactly one instance. Instances also represent each unique resource under review in the accessReviewScheduleDefinition. If a review has multiple resources and multiple instances, each resource will have a unique instance for each recurrence.
     *  @param array<AccessReviewInstance>|null $value Value to set for the instances property.
    */
    public function setInstances(?array $value ): void {
        $this->instances = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Timestamp when the access review series was last modified. Supports $select. Read-only.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the reviewers property value. This collection of access review scopes is used to define who are the reviewers. The reviewers property is only updatable if individual users are assigned as reviewers. Required on create. Supports $select. For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API.
     *  @param array<AccessReviewReviewerScope>|null $value Value to set for the reviewers property.
    */
    public function setReviewers(?array $value ): void {
        $this->reviewers = $value;
    }

    /**
     * Sets the scope property value. Defines the entities whose access is reviewed.  For supported scopes, see accessReviewScope. Required on create. Supports $select and $filter (contains only). For examples of options for configuring scope, see Configure the scope of your access review definition using the Microsoft Graph API.
     *  @param AccessReviewScope|null $value Value to set for the scope property.
    */
    public function setScope(?AccessReviewScope $value ): void {
        $this->scope = $value;
    }

    /**
     * Sets the settings property value. The settings for an access review series, see type definition below. Supports $select. Required on create.
     *  @param AccessReviewScheduleSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?AccessReviewScheduleSettings $value ): void {
        $this->settings = $value;
    }

    /**
     * Sets the status property value. This read-only field specifies the status of an access review. The typical states include Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed.  Supports $select, $orderby, and $filter (eq only). Read-only.
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

}
