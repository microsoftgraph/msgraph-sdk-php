<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessReviewScheduleDefinition extends Entity implements Parsable 
{
    /**
     * Instantiates a new AccessReviewScheduleDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessReviewScheduleDefinition');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewScheduleDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewScheduleDefinition {
        return new AccessReviewScheduleDefinition();
    }

    /**
     * Gets the additionalNotificationRecipients property value. Defines the list of additional users or group members to be notified of the access review progress.
     * @return array<AccessReviewNotificationRecipientItem>|null
    */
    public function getAdditionalNotificationRecipients(): ?array {
        return $this->getBackingStore()->get('additionalNotificationRecipients');
    }

    /**
     * Gets the createdBy property value. User who created this review. Read-only.
     * @return UserIdentity|null
    */
    public function getCreatedBy(): ?UserIdentity {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the createdDateTime property value. Timestamp when the access review series was created. Supports $select. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the descriptionForAdmins property value. Description provided by review creators to provide more context of the review to admins. Supports $select.
     * @return string|null
    */
    public function getDescriptionForAdmins(): ?string {
        return $this->getBackingStore()->get('descriptionForAdmins');
    }

    /**
     * Gets the descriptionForReviewers property value. Description provided  by review creators to provide more context of the review to reviewers. Reviewers will see this description in the email sent to them requesting their review. Email notifications support up to 256 characters. Supports $select.
     * @return string|null
    */
    public function getDescriptionForReviewers(): ?string {
        return $this->getBackingStore()->get('descriptionForReviewers');
    }

    /**
     * Gets the displayName property value. Name of the access review series. Supports $select and $orderBy. Required on create.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the fallbackReviewers property value. This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers will be notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner does not exist, or manager is specified as reviewer but a user's manager does not exist. See accessReviewReviewerScope. Replaces backupReviewers. Supports $select. NOTE: The value of this property will be ignored if fallback reviewers are assigned through the stageSettings property.
     * @return array<AccessReviewReviewerScope>|null
    */
    public function getFallbackReviewers(): ?array {
        return $this->getBackingStore()->get('fallbackReviewers');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'additionalNotificationRecipients' => fn(ParseNode $n) => $o->setAdditionalNotificationRecipients($n->getCollectionOfObjectValues([AccessReviewNotificationRecipientItem::class, 'createFromDiscriminatorValue'])),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([UserIdentity::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'descriptionForAdmins' => fn(ParseNode $n) => $o->setDescriptionForAdmins($n->getStringValue()),
            'descriptionForReviewers' => fn(ParseNode $n) => $o->setDescriptionForReviewers($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'fallbackReviewers' => fn(ParseNode $n) => $o->setFallbackReviewers($n->getCollectionOfObjectValues([AccessReviewReviewerScope::class, 'createFromDiscriminatorValue'])),
            'instanceEnumerationScope' => fn(ParseNode $n) => $o->setInstanceEnumerationScope($n->getObjectValue([AccessReviewScope::class, 'createFromDiscriminatorValue'])),
            'instances' => fn(ParseNode $n) => $o->setInstances($n->getCollectionOfObjectValues([AccessReviewInstance::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'reviewers' => fn(ParseNode $n) => $o->setReviewers($n->getCollectionOfObjectValues([AccessReviewReviewerScope::class, 'createFromDiscriminatorValue'])),
            'scope' => fn(ParseNode $n) => $o->setScope($n->getObjectValue([AccessReviewScope::class, 'createFromDiscriminatorValue'])),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([AccessReviewScheduleSettings::class, 'createFromDiscriminatorValue'])),
            'stageSettings' => fn(ParseNode $n) => $o->setStageSettings($n->getCollectionOfObjectValues([AccessReviewStageSettings::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
        ]);
    }

    /**
     * Gets the instanceEnumerationScope property value. This property is required when scoping a review to guest users' access across all Microsoft 365 groups and determines which Microsoft 365 groups are reviewed. Each group will become a unique accessReviewInstance of the access review series.  For supported scopes, see accessReviewScope. Supports $select. For examples of options for configuring instanceEnumerationScope, see Configure the scope of your access review definition using the Microsoft Graph API.
     * @return AccessReviewScope|null
    */
    public function getInstanceEnumerationScope(): ?AccessReviewScope {
        return $this->getBackingStore()->get('instanceEnumerationScope');
    }

    /**
     * Gets the instances property value. If the accessReviewScheduleDefinition is a recurring access review, instances represent each recurrence. A review that does not recur will have exactly one instance. Instances also represent each unique resource under review in the accessReviewScheduleDefinition. If a review has multiple resources and multiple instances, each resource will have a unique instance for each recurrence.
     * @return array<AccessReviewInstance>|null
    */
    public function getInstances(): ?array {
        return $this->getBackingStore()->get('instances');
    }

    /**
     * Gets the lastModifiedDateTime property value. Timestamp when the access review series was last modified. Supports $select. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the reviewers property value. This collection of access review scopes is used to define who are the reviewers. The reviewers property is only updatable if individual users are assigned as reviewers. Required on create. Supports $select. For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API. NOTE: The value of this property will be ignored if reviewers are assigned through the stageSettings property.
     * @return array<AccessReviewReviewerScope>|null
    */
    public function getReviewers(): ?array {
        return $this->getBackingStore()->get('reviewers');
    }

    /**
     * Gets the scope property value. Defines the entities whose access is reviewed. For supported scopes, see accessReviewScope. Required on create. Supports $select and $filter (contains only). For examples of options for configuring scope, see Configure the scope of your access review definition using the Microsoft Graph API.
     * @return AccessReviewScope|null
    */
    public function getScope(): ?AccessReviewScope {
        return $this->getBackingStore()->get('scope');
    }

    /**
     * Gets the settings property value. The settings for an access review series, see type definition below. Supports $select. Required on create.
     * @return AccessReviewScheduleSettings|null
    */
    public function getSettings(): ?AccessReviewScheduleSettings {
        return $this->getBackingStore()->get('settings');
    }

    /**
     * Gets the stageSettings property value. Required only for a multi-stage access review to define the stages and their settings. You can break down each review instance into up to three sequential stages, where each stage can have a different set of reviewers, fallback reviewers, and settings. Stages will be created sequentially based on the dependsOn property. Optional.  When this property is defined, its settings are used instead of the corresponding settings in the accessReviewScheduleDefinition object and its settings, reviewers, and fallbackReviewers properties.
     * @return array<AccessReviewStageSettings>|null
    */
    public function getStageSettings(): ?array {
        return $this->getBackingStore()->get('stageSettings');
    }

    /**
     * Gets the status property value. This read-only field specifies the status of an access review. The typical states include Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed.  Supports $select, $orderby, and $filter (eq only). Read-only.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('additionalNotificationRecipients', $this->getAdditionalNotificationRecipients());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('descriptionForAdmins', $this->getDescriptionForAdmins());
        $writer->writeStringValue('descriptionForReviewers', $this->getDescriptionForReviewers());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('fallbackReviewers', $this->getFallbackReviewers());
        $writer->writeObjectValue('instanceEnumerationScope', $this->getInstanceEnumerationScope());
        $writer->writeCollectionOfObjectValues('instances', $this->getInstances());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfObjectValues('reviewers', $this->getReviewers());
        $writer->writeObjectValue('scope', $this->getScope());
        $writer->writeObjectValue('settings', $this->getSettings());
        $writer->writeCollectionOfObjectValues('stageSettings', $this->getStageSettings());
        $writer->writeStringValue('status', $this->getStatus());
    }

    /**
     * Sets the additionalNotificationRecipients property value. Defines the list of additional users or group members to be notified of the access review progress.
     *  @param array<AccessReviewNotificationRecipientItem>|null $value Value to set for the additionalNotificationRecipients property.
    */
    public function setAdditionalNotificationRecipients(?array $value): void {
        $this->getBackingStore()->set('additionalNotificationRecipients', $value);
    }

    /**
     * Sets the createdBy property value. User who created this review. Read-only.
     *  @param UserIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?UserIdentity $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. Timestamp when the access review series was created. Supports $select. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the descriptionForAdmins property value. Description provided by review creators to provide more context of the review to admins. Supports $select.
     *  @param string|null $value Value to set for the descriptionForAdmins property.
    */
    public function setDescriptionForAdmins(?string $value): void {
        $this->getBackingStore()->set('descriptionForAdmins', $value);
    }

    /**
     * Sets the descriptionForReviewers property value. Description provided  by review creators to provide more context of the review to reviewers. Reviewers will see this description in the email sent to them requesting their review. Email notifications support up to 256 characters. Supports $select.
     *  @param string|null $value Value to set for the descriptionForReviewers property.
    */
    public function setDescriptionForReviewers(?string $value): void {
        $this->getBackingStore()->set('descriptionForReviewers', $value);
    }

    /**
     * Sets the displayName property value. Name of the access review series. Supports $select and $orderBy. Required on create.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the fallbackReviewers property value. This collection of reviewer scopes is used to define the list of fallback reviewers. These fallback reviewers will be notified to take action if no users are found from the list of reviewers specified. This could occur when either the group owner is specified as the reviewer but the group owner does not exist, or manager is specified as reviewer but a user's manager does not exist. See accessReviewReviewerScope. Replaces backupReviewers. Supports $select. NOTE: The value of this property will be ignored if fallback reviewers are assigned through the stageSettings property.
     *  @param array<AccessReviewReviewerScope>|null $value Value to set for the fallbackReviewers property.
    */
    public function setFallbackReviewers(?array $value): void {
        $this->getBackingStore()->set('fallbackReviewers', $value);
    }

    /**
     * Sets the instanceEnumerationScope property value. This property is required when scoping a review to guest users' access across all Microsoft 365 groups and determines which Microsoft 365 groups are reviewed. Each group will become a unique accessReviewInstance of the access review series.  For supported scopes, see accessReviewScope. Supports $select. For examples of options for configuring instanceEnumerationScope, see Configure the scope of your access review definition using the Microsoft Graph API.
     *  @param AccessReviewScope|null $value Value to set for the instanceEnumerationScope property.
    */
    public function setInstanceEnumerationScope(?AccessReviewScope $value): void {
        $this->getBackingStore()->set('instanceEnumerationScope', $value);
    }

    /**
     * Sets the instances property value. If the accessReviewScheduleDefinition is a recurring access review, instances represent each recurrence. A review that does not recur will have exactly one instance. Instances also represent each unique resource under review in the accessReviewScheduleDefinition. If a review has multiple resources and multiple instances, each resource will have a unique instance for each recurrence.
     *  @param array<AccessReviewInstance>|null $value Value to set for the instances property.
    */
    public function setInstances(?array $value): void {
        $this->getBackingStore()->set('instances', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Timestamp when the access review series was last modified. Supports $select. Read-only.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the reviewers property value. This collection of access review scopes is used to define who are the reviewers. The reviewers property is only updatable if individual users are assigned as reviewers. Required on create. Supports $select. For examples of options for assigning reviewers, see Assign reviewers to your access review definition using the Microsoft Graph API. NOTE: The value of this property will be ignored if reviewers are assigned through the stageSettings property.
     *  @param array<AccessReviewReviewerScope>|null $value Value to set for the reviewers property.
    */
    public function setReviewers(?array $value): void {
        $this->getBackingStore()->set('reviewers', $value);
    }

    /**
     * Sets the scope property value. Defines the entities whose access is reviewed. For supported scopes, see accessReviewScope. Required on create. Supports $select and $filter (contains only). For examples of options for configuring scope, see Configure the scope of your access review definition using the Microsoft Graph API.
     *  @param AccessReviewScope|null $value Value to set for the scope property.
    */
    public function setScope(?AccessReviewScope $value): void {
        $this->getBackingStore()->set('scope', $value);
    }

    /**
     * Sets the settings property value. The settings for an access review series, see type definition below. Supports $select. Required on create.
     *  @param AccessReviewScheduleSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?AccessReviewScheduleSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the stageSettings property value. Required only for a multi-stage access review to define the stages and their settings. You can break down each review instance into up to three sequential stages, where each stage can have a different set of reviewers, fallback reviewers, and settings. Stages will be created sequentially based on the dependsOn property. Optional.  When this property is defined, its settings are used instead of the corresponding settings in the accessReviewScheduleDefinition object and its settings, reviewers, and fallbackReviewers properties.
     *  @param array<AccessReviewStageSettings>|null $value Value to set for the stageSettings property.
    */
    public function setStageSettings(?array $value): void {
        $this->getBackingStore()->set('stageSettings', $value);
    }

    /**
     * Sets the status property value. This read-only field specifies the status of an access review. The typical states include Initializing, NotStarted, Starting, InProgress, Completing, Completed, AutoReviewing, and AutoReviewed.  Supports $select, $orderby, and $filter (eq only). Read-only.
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
