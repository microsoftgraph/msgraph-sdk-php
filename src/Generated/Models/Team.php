<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Team extends Entity implements Parsable 
{
    /**
     * Instantiates a new team and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.team');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Team
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Team {
        return new Team();
    }

    /**
     * Gets the allChannels property value. List of channels either hosted in or shared with the team (incoming channels).
     * @return array<Channel>|null
    */
    public function getAllChannels(): ?array {
        return $this->getBackingStore()->get('allChannels');
    }

    /**
     * Gets the channels property value. The collection of channels and messages associated with the team.
     * @return array<Channel>|null
    */
    public function getChannels(): ?array {
        return $this->getBackingStore()->get('channels');
    }

    /**
     * Gets the classification property value. An optional label. Typically describes the data or business sensitivity of the team. Must match one of a pre-configured set in the tenant's directory.
     * @return string|null
    */
    public function getClassification(): ?string {
        return $this->getBackingStore()->get('classification');
    }

    /**
     * Gets the createdDateTime property value. Timestamp at which the team was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the description property value. An optional description for the team. Maximum length: 1024 characters.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The name of the team.
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
            'allChannels' => fn(ParseNode $n) => $o->setAllChannels($n->getCollectionOfObjectValues([Channel::class, 'createFromDiscriminatorValue'])),
            'channels' => fn(ParseNode $n) => $o->setChannels($n->getCollectionOfObjectValues([Channel::class, 'createFromDiscriminatorValue'])),
            'classification' => fn(ParseNode $n) => $o->setClassification($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'funSettings' => fn(ParseNode $n) => $o->setFunSettings($n->getObjectValue([TeamFunSettings::class, 'createFromDiscriminatorValue'])),
            'group' => fn(ParseNode $n) => $o->setGroup($n->getObjectValue([Group::class, 'createFromDiscriminatorValue'])),
            'guestSettings' => fn(ParseNode $n) => $o->setGuestSettings($n->getObjectValue([TeamGuestSettings::class, 'createFromDiscriminatorValue'])),
            'incomingChannels' => fn(ParseNode $n) => $o->setIncomingChannels($n->getCollectionOfObjectValues([Channel::class, 'createFromDiscriminatorValue'])),
            'installedApps' => fn(ParseNode $n) => $o->setInstalledApps($n->getCollectionOfObjectValues([TeamsAppInstallation::class, 'createFromDiscriminatorValue'])),
            'internalId' => fn(ParseNode $n) => $o->setInternalId($n->getStringValue()),
            'isArchived' => fn(ParseNode $n) => $o->setIsArchived($n->getBooleanValue()),
            'members' => fn(ParseNode $n) => $o->setMembers($n->getCollectionOfObjectValues([ConversationMember::class, 'createFromDiscriminatorValue'])),
            'memberSettings' => fn(ParseNode $n) => $o->setMemberSettings($n->getObjectValue([TeamMemberSettings::class, 'createFromDiscriminatorValue'])),
            'messagingSettings' => fn(ParseNode $n) => $o->setMessagingSettings($n->getObjectValue([TeamMessagingSettings::class, 'createFromDiscriminatorValue'])),
            'operations' => fn(ParseNode $n) => $o->setOperations($n->getCollectionOfObjectValues([TeamsAsyncOperation::class, 'createFromDiscriminatorValue'])),
            'photo' => fn(ParseNode $n) => $o->setPhoto($n->getObjectValue([ProfilePhoto::class, 'createFromDiscriminatorValue'])),
            'primaryChannel' => fn(ParseNode $n) => $o->setPrimaryChannel($n->getObjectValue([Channel::class, 'createFromDiscriminatorValue'])),
            'schedule' => fn(ParseNode $n) => $o->setSchedule($n->getObjectValue([Schedule::class, 'createFromDiscriminatorValue'])),
            'specialization' => fn(ParseNode $n) => $o->setSpecialization($n->getEnumValue(TeamSpecialization::class)),
            'summary' => fn(ParseNode $n) => $o->setSummary($n->getObjectValue([TeamSummary::class, 'createFromDiscriminatorValue'])),
            'tags' => fn(ParseNode $n) => $o->setTags($n->getCollectionOfObjectValues([TeamworkTag::class, 'createFromDiscriminatorValue'])),
            'template' => fn(ParseNode $n) => $o->setTemplate($n->getObjectValue([TeamsTemplate::class, 'createFromDiscriminatorValue'])),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'visibility' => fn(ParseNode $n) => $o->setVisibility($n->getEnumValue(TeamVisibilityType::class)),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the funSettings property value. Settings to configure use of Giphy, memes, and stickers in the team.
     * @return TeamFunSettings|null
    */
    public function getFunSettings(): ?TeamFunSettings {
        return $this->getBackingStore()->get('funSettings');
    }

    /**
     * Gets the group property value. The group property
     * @return Group|null
    */
    public function getGroup(): ?Group {
        return $this->getBackingStore()->get('group');
    }

    /**
     * Gets the guestSettings property value. Settings to configure whether guests can create, update, or delete channels in the team.
     * @return TeamGuestSettings|null
    */
    public function getGuestSettings(): ?TeamGuestSettings {
        return $this->getBackingStore()->get('guestSettings');
    }

    /**
     * Gets the incomingChannels property value. List of channels shared with the team.
     * @return array<Channel>|null
    */
    public function getIncomingChannels(): ?array {
        return $this->getBackingStore()->get('incomingChannels');
    }

    /**
     * Gets the installedApps property value. The apps installed in this team.
     * @return array<TeamsAppInstallation>|null
    */
    public function getInstalledApps(): ?array {
        return $this->getBackingStore()->get('installedApps');
    }

    /**
     * Gets the internalId property value. A unique ID for the team that has been used in a few places such as the audit log/Office 365 Management Activity API.
     * @return string|null
    */
    public function getInternalId(): ?string {
        return $this->getBackingStore()->get('internalId');
    }

    /**
     * Gets the isArchived property value. Whether this team is in read-only mode.
     * @return bool|null
    */
    public function getIsArchived(): ?bool {
        return $this->getBackingStore()->get('isArchived');
    }

    /**
     * Gets the members property value. Members and owners of the team.
     * @return array<ConversationMember>|null
    */
    public function getMembers(): ?array {
        return $this->getBackingStore()->get('members');
    }

    /**
     * Gets the memberSettings property value. Settings to configure whether members can perform certain actions, for example, create channels and add bots, in the team.
     * @return TeamMemberSettings|null
    */
    public function getMemberSettings(): ?TeamMemberSettings {
        return $this->getBackingStore()->get('memberSettings');
    }

    /**
     * Gets the messagingSettings property value. Settings to configure messaging and mentions in the team.
     * @return TeamMessagingSettings|null
    */
    public function getMessagingSettings(): ?TeamMessagingSettings {
        return $this->getBackingStore()->get('messagingSettings');
    }

    /**
     * Gets the operations property value. The async operations that ran or are running on this team.
     * @return array<TeamsAsyncOperation>|null
    */
    public function getOperations(): ?array {
        return $this->getBackingStore()->get('operations');
    }

    /**
     * Gets the photo property value. The profile photo for the team.
     * @return ProfilePhoto|null
    */
    public function getPhoto(): ?ProfilePhoto {
        return $this->getBackingStore()->get('photo');
    }

    /**
     * Gets the primaryChannel property value. The general channel for the team.
     * @return Channel|null
    */
    public function getPrimaryChannel(): ?Channel {
        return $this->getBackingStore()->get('primaryChannel');
    }

    /**
     * Gets the schedule property value. The schedule of shifts for this team.
     * @return Schedule|null
    */
    public function getSchedule(): ?Schedule {
        return $this->getBackingStore()->get('schedule');
    }

    /**
     * Gets the specialization property value. Optional. Indicates whether the team is intended for a particular use case.  Each team specialization has access to unique behaviors and experiences targeted to its use case.
     * @return TeamSpecialization|null
    */
    public function getSpecialization(): ?TeamSpecialization {
        return $this->getBackingStore()->get('specialization');
    }

    /**
     * Gets the summary property value. The summary property
     * @return TeamSummary|null
    */
    public function getSummary(): ?TeamSummary {
        return $this->getBackingStore()->get('summary');
    }

    /**
     * Gets the tags property value. The tags associated with the team.
     * @return array<TeamworkTag>|null
    */
    public function getTags(): ?array {
        return $this->getBackingStore()->get('tags');
    }

    /**
     * Gets the template property value. The template this team was created from. See available templates.
     * @return TeamsTemplate|null
    */
    public function getTemplate(): ?TeamsTemplate {
        return $this->getBackingStore()->get('template');
    }

    /**
     * Gets the tenantId property value. The ID of the Azure Active Directory tenant.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->getBackingStore()->get('tenantId');
    }

    /**
     * Gets the visibility property value. The visibility of the group and team. Defaults to Public.
     * @return TeamVisibilityType|null
    */
    public function getVisibility(): ?TeamVisibilityType {
        return $this->getBackingStore()->get('visibility');
    }

    /**
     * Gets the webUrl property value. A hyperlink that will go to the team in the Microsoft Teams client. This is the URL that you get when you right-click a team in the Microsoft Teams client and select Get link to team. This URL should be treated as an opaque blob, and not parsed.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->getBackingStore()->get('webUrl');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('allChannels', $this->getAllChannels());
        $writer->writeCollectionOfObjectValues('channels', $this->getChannels());
        $writer->writeStringValue('classification', $this->getClassification());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('funSettings', $this->getFunSettings());
        $writer->writeObjectValue('group', $this->getGroup());
        $writer->writeObjectValue('guestSettings', $this->getGuestSettings());
        $writer->writeCollectionOfObjectValues('incomingChannels', $this->getIncomingChannels());
        $writer->writeCollectionOfObjectValues('installedApps', $this->getInstalledApps());
        $writer->writeStringValue('internalId', $this->getInternalId());
        $writer->writeBooleanValue('isArchived', $this->getIsArchived());
        $writer->writeCollectionOfObjectValues('members', $this->getMembers());
        $writer->writeObjectValue('memberSettings', $this->getMemberSettings());
        $writer->writeObjectValue('messagingSettings', $this->getMessagingSettings());
        $writer->writeCollectionOfObjectValues('operations', $this->getOperations());
        $writer->writeObjectValue('photo', $this->getPhoto());
        $writer->writeObjectValue('primaryChannel', $this->getPrimaryChannel());
        $writer->writeObjectValue('schedule', $this->getSchedule());
        $writer->writeEnumValue('specialization', $this->getSpecialization());
        $writer->writeObjectValue('summary', $this->getSummary());
        $writer->writeCollectionOfObjectValues('tags', $this->getTags());
        $writer->writeObjectValue('template', $this->getTemplate());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeEnumValue('visibility', $this->getVisibility());
        $writer->writeStringValue('webUrl', $this->getWebUrl());
    }

    /**
     * Sets the allChannels property value. List of channels either hosted in or shared with the team (incoming channels).
     *  @param array<Channel>|null $value Value to set for the allChannels property.
    */
    public function setAllChannels(?array $value): void {
        $this->getBackingStore()->set('allChannels', $value);
    }

    /**
     * Sets the channels property value. The collection of channels and messages associated with the team.
     *  @param array<Channel>|null $value Value to set for the channels property.
    */
    public function setChannels(?array $value): void {
        $this->getBackingStore()->set('channels', $value);
    }

    /**
     * Sets the classification property value. An optional label. Typically describes the data or business sensitivity of the team. Must match one of a pre-configured set in the tenant's directory.
     *  @param string|null $value Value to set for the classification property.
    */
    public function setClassification(?string $value): void {
        $this->getBackingStore()->set('classification', $value);
    }

    /**
     * Sets the createdDateTime property value. Timestamp at which the team was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. An optional description for the team. Maximum length: 1024 characters.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The name of the team.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the funSettings property value. Settings to configure use of Giphy, memes, and stickers in the team.
     *  @param TeamFunSettings|null $value Value to set for the funSettings property.
    */
    public function setFunSettings(?TeamFunSettings $value): void {
        $this->getBackingStore()->set('funSettings', $value);
    }

    /**
     * Sets the group property value. The group property
     *  @param Group|null $value Value to set for the group property.
    */
    public function setGroup(?Group $value): void {
        $this->getBackingStore()->set('group', $value);
    }

    /**
     * Sets the guestSettings property value. Settings to configure whether guests can create, update, or delete channels in the team.
     *  @param TeamGuestSettings|null $value Value to set for the guestSettings property.
    */
    public function setGuestSettings(?TeamGuestSettings $value): void {
        $this->getBackingStore()->set('guestSettings', $value);
    }

    /**
     * Sets the incomingChannels property value. List of channels shared with the team.
     *  @param array<Channel>|null $value Value to set for the incomingChannels property.
    */
    public function setIncomingChannels(?array $value): void {
        $this->getBackingStore()->set('incomingChannels', $value);
    }

    /**
     * Sets the installedApps property value. The apps installed in this team.
     *  @param array<TeamsAppInstallation>|null $value Value to set for the installedApps property.
    */
    public function setInstalledApps(?array $value): void {
        $this->getBackingStore()->set('installedApps', $value);
    }

    /**
     * Sets the internalId property value. A unique ID for the team that has been used in a few places such as the audit log/Office 365 Management Activity API.
     *  @param string|null $value Value to set for the internalId property.
    */
    public function setInternalId(?string $value): void {
        $this->getBackingStore()->set('internalId', $value);
    }

    /**
     * Sets the isArchived property value. Whether this team is in read-only mode.
     *  @param bool|null $value Value to set for the isArchived property.
    */
    public function setIsArchived(?bool $value): void {
        $this->getBackingStore()->set('isArchived', $value);
    }

    /**
     * Sets the members property value. Members and owners of the team.
     *  @param array<ConversationMember>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value): void {
        $this->getBackingStore()->set('members', $value);
    }

    /**
     * Sets the memberSettings property value. Settings to configure whether members can perform certain actions, for example, create channels and add bots, in the team.
     *  @param TeamMemberSettings|null $value Value to set for the memberSettings property.
    */
    public function setMemberSettings(?TeamMemberSettings $value): void {
        $this->getBackingStore()->set('memberSettings', $value);
    }

    /**
     * Sets the messagingSettings property value. Settings to configure messaging and mentions in the team.
     *  @param TeamMessagingSettings|null $value Value to set for the messagingSettings property.
    */
    public function setMessagingSettings(?TeamMessagingSettings $value): void {
        $this->getBackingStore()->set('messagingSettings', $value);
    }

    /**
     * Sets the operations property value. The async operations that ran or are running on this team.
     *  @param array<TeamsAsyncOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value): void {
        $this->getBackingStore()->set('operations', $value);
    }

    /**
     * Sets the photo property value. The profile photo for the team.
     *  @param ProfilePhoto|null $value Value to set for the photo property.
    */
    public function setPhoto(?ProfilePhoto $value): void {
        $this->getBackingStore()->set('photo', $value);
    }

    /**
     * Sets the primaryChannel property value. The general channel for the team.
     *  @param Channel|null $value Value to set for the primaryChannel property.
    */
    public function setPrimaryChannel(?Channel $value): void {
        $this->getBackingStore()->set('primaryChannel', $value);
    }

    /**
     * Sets the schedule property value. The schedule of shifts for this team.
     *  @param Schedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?Schedule $value): void {
        $this->getBackingStore()->set('schedule', $value);
    }

    /**
     * Sets the specialization property value. Optional. Indicates whether the team is intended for a particular use case.  Each team specialization has access to unique behaviors and experiences targeted to its use case.
     *  @param TeamSpecialization|null $value Value to set for the specialization property.
    */
    public function setSpecialization(?TeamSpecialization $value): void {
        $this->getBackingStore()->set('specialization', $value);
    }

    /**
     * Sets the summary property value. The summary property
     *  @param TeamSummary|null $value Value to set for the summary property.
    */
    public function setSummary(?TeamSummary $value): void {
        $this->getBackingStore()->set('summary', $value);
    }

    /**
     * Sets the tags property value. The tags associated with the team.
     *  @param array<TeamworkTag>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value): void {
        $this->getBackingStore()->set('tags', $value);
    }

    /**
     * Sets the template property value. The template this team was created from. See available templates.
     *  @param TeamsTemplate|null $value Value to set for the template property.
    */
    public function setTemplate(?TeamsTemplate $value): void {
        $this->getBackingStore()->set('template', $value);
    }

    /**
     * Sets the tenantId property value. The ID of the Azure Active Directory tenant.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the visibility property value. The visibility of the group and team. Defaults to Public.
     *  @param TeamVisibilityType|null $value Value to set for the visibility property.
    */
    public function setVisibility(?TeamVisibilityType $value): void {
        $this->getBackingStore()->set('visibility', $value);
    }

    /**
     * Sets the webUrl property value. A hyperlink that will go to the team in the Microsoft Teams client. This is the URL that you get when you right-click a team in the Microsoft Teams client and select Get link to team. This URL should be treated as an opaque blob, and not parsed.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
