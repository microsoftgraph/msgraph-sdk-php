<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Calendar extends Entity implements Parsable 
{
    /**
     * @var array<string>|null $allowedOnlineMeetingProviders Represent the online meeting service providers that can be used to create online meetings in this calendar. Possible values are: unknown, skypeForBusiness, skypeForConsumer, teamsForBusiness.
    */
    private ?array $allowedOnlineMeetingProviders = null;
    
    /**
     * @var array<CalendarPermission>|null $calendarPermissions The permissions of the users with whom the calendar is shared.
    */
    private ?array $calendarPermissions = null;
    
    /**
     * @var array<Event>|null $calendarView The calendar view for the calendar. Navigation property. Read-only.
    */
    private ?array $calendarView = null;
    
    /**
     * @var bool|null $canEdit true if the user can write to the calendar, false otherwise. This property is true for the user who created the calendar. This property is also true for a user who has been shared a calendar and granted write access, through an Outlook client or the corresponding calendarPermission resource. Read-only.
    */
    private ?bool $canEdit = null;
    
    /**
     * @var bool|null $canShare true if the user has the permission to share the calendar, false otherwise. Only the user who created the calendar can share it. Read-only.
    */
    private ?bool $canShare = null;
    
    /**
     * @var bool|null $canViewPrivateItems true if the user can read calendar items that have been marked private, false otherwise. This property is set through an Outlook client or the corresponding calendarPermission resource. Read-only.
    */
    private ?bool $canViewPrivateItems = null;
    
    /**
     * @var string|null $changeKey Identifies the version of the calendar object. Every time the calendar is changed, changeKey changes as well. This allows Exchange to apply changes to the correct version of the object. Read-only.
    */
    private ?string $changeKey = null;
    
    /**
     * @var CalendarColor|null $color Specifies the color theme to distinguish the calendar from other calendars in a UI. The property values are: auto, lightBlue, lightGreen, lightOrange, lightGray, lightYellow, lightTeal, lightPink, lightBrown, lightRed, maxColor.
    */
    private ?CalendarColor $color = null;
    
    /**
     * @var OnlineMeetingProviderType|null $defaultOnlineMeetingProvider The default online meeting provider for meetings sent from this calendar. Possible values are: unknown, skypeForBusiness, skypeForConsumer, teamsForBusiness.
    */
    private ?OnlineMeetingProviderType $defaultOnlineMeetingProvider = null;
    
    /**
     * @var array<Event>|null $events The events in the calendar. Navigation property. Read-only.
    */
    private ?array $events = null;
    
    /**
     * @var string|null $hexColor The calendar color, expressed in a hex color code of three hexadecimal values, each ranging from 00 to FF and representing the red, green, or blue components of the color in the RGB color space. If the user has never explicitly set a color for the calendar, this property is  empty.
    */
    private ?string $hexColor = null;
    
    /**
     * @var bool|null $isDefaultCalendar true if this is the default calendar where new events are created by default, false otherwise.
    */
    private ?bool $isDefaultCalendar = null;
    
    /**
     * @var bool|null $isRemovable Indicates whether this user calendar can be deleted from the user mailbox.
    */
    private ?bool $isRemovable = null;
    
    /**
     * @var bool|null $isTallyingResponses Indicates whether this user calendar supports tracking of meeting responses. Only meeting invites sent from users' primary calendars support tracking of meeting responses.
    */
    private ?bool $isTallyingResponses = null;
    
    /**
     * @var array<MultiValueLegacyExtendedProperty>|null $multiValueExtendedProperties The collection of multi-value extended properties defined for the calendar. Read-only. Nullable.
    */
    private ?array $multiValueExtendedProperties = null;
    
    /**
     * @var string|null $name The calendar name.
    */
    private ?string $name = null;
    
    /**
     * @var EmailAddress|null $owner If set, this represents the user who created or added the calendar. For a calendar that the user created or added, the owner property is set to the user. For a calendar shared with the user, the owner property is set to the person who shared that calendar with the user. Read-only.
    */
    private ?EmailAddress $owner = null;
    
    /**
     * @var array<SingleValueLegacyExtendedProperty>|null $singleValueExtendedProperties The collection of single-value extended properties defined for the calendar. Read-only. Nullable.
    */
    private ?array $singleValueExtendedProperties = null;
    
    /**
     * Instantiates a new calendar and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Calendar
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Calendar {
        return new Calendar();
    }

    /**
     * Gets the allowedOnlineMeetingProviders property value. Represent the online meeting service providers that can be used to create online meetings in this calendar. Possible values are: unknown, skypeForBusiness, skypeForConsumer, teamsForBusiness.
     * @return array<string>|null
    */
    public function getAllowedOnlineMeetingProviders(): ?array {
        return $this->allowedOnlineMeetingProviders;
    }

    /**
     * Gets the calendarPermissions property value. The permissions of the users with whom the calendar is shared.
     * @return array<CalendarPermission>|null
    */
    public function getCalendarPermissions(): ?array {
        return $this->calendarPermissions;
    }

    /**
     * Gets the calendarView property value. The calendar view for the calendar. Navigation property. Read-only.
     * @return array<Event>|null
    */
    public function getCalendarView(): ?array {
        return $this->calendarView;
    }

    /**
     * Gets the canEdit property value. true if the user can write to the calendar, false otherwise. This property is true for the user who created the calendar. This property is also true for a user who has been shared a calendar and granted write access, through an Outlook client or the corresponding calendarPermission resource. Read-only.
     * @return bool|null
    */
    public function getCanEdit(): ?bool {
        return $this->canEdit;
    }

    /**
     * Gets the canShare property value. true if the user has the permission to share the calendar, false otherwise. Only the user who created the calendar can share it. Read-only.
     * @return bool|null
    */
    public function getCanShare(): ?bool {
        return $this->canShare;
    }

    /**
     * Gets the canViewPrivateItems property value. true if the user can read calendar items that have been marked private, false otherwise. This property is set through an Outlook client or the corresponding calendarPermission resource. Read-only.
     * @return bool|null
    */
    public function getCanViewPrivateItems(): ?bool {
        return $this->canViewPrivateItems;
    }

    /**
     * Gets the changeKey property value. Identifies the version of the calendar object. Every time the calendar is changed, changeKey changes as well. This allows Exchange to apply changes to the correct version of the object. Read-only.
     * @return string|null
    */
    public function getChangeKey(): ?string {
        return $this->changeKey;
    }

    /**
     * Gets the color property value. Specifies the color theme to distinguish the calendar from other calendars in a UI. The property values are: auto, lightBlue, lightGreen, lightOrange, lightGray, lightYellow, lightTeal, lightPink, lightBrown, lightRed, maxColor.
     * @return CalendarColor|null
    */
    public function getColor(): ?CalendarColor {
        return $this->color;
    }

    /**
     * Gets the defaultOnlineMeetingProvider property value. The default online meeting provider for meetings sent from this calendar. Possible values are: unknown, skypeForBusiness, skypeForConsumer, teamsForBusiness.
     * @return OnlineMeetingProviderType|null
    */
    public function getDefaultOnlineMeetingProvider(): ?OnlineMeetingProviderType {
        return $this->defaultOnlineMeetingProvider;
    }

    /**
     * Gets the events property value. The events in the calendar. Navigation property. Read-only.
     * @return array<Event>|null
    */
    public function getEvents(): ?array {
        return $this->events;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedOnlineMeetingProviders' => function (ParseNode $n) use ($o) { $o->setAllowedOnlineMeetingProviders($n->getCollectionOfPrimitiveValues()); },
            'calendarPermissions' => function (ParseNode $n) use ($o) { $o->setCalendarPermissions($n->getCollectionOfObjectValues(array(CalendarPermission::class, 'createFromDiscriminatorValue'))); },
            'calendarView' => function (ParseNode $n) use ($o) { $o->setCalendarView($n->getCollectionOfObjectValues(array(Event::class, 'createFromDiscriminatorValue'))); },
            'canEdit' => function (ParseNode $n) use ($o) { $o->setCanEdit($n->getBooleanValue()); },
            'canShare' => function (ParseNode $n) use ($o) { $o->setCanShare($n->getBooleanValue()); },
            'canViewPrivateItems' => function (ParseNode $n) use ($o) { $o->setCanViewPrivateItems($n->getBooleanValue()); },
            'changeKey' => function (ParseNode $n) use ($o) { $o->setChangeKey($n->getStringValue()); },
            'color' => function (ParseNode $n) use ($o) { $o->setColor($n->getEnumValue(CalendarColor::class)); },
            'defaultOnlineMeetingProvider' => function (ParseNode $n) use ($o) { $o->setDefaultOnlineMeetingProvider($n->getEnumValue(OnlineMeetingProviderType::class)); },
            'events' => function (ParseNode $n) use ($o) { $o->setEvents($n->getCollectionOfObjectValues(array(Event::class, 'createFromDiscriminatorValue'))); },
            'hexColor' => function (ParseNode $n) use ($o) { $o->setHexColor($n->getStringValue()); },
            'isDefaultCalendar' => function (ParseNode $n) use ($o) { $o->setIsDefaultCalendar($n->getBooleanValue()); },
            'isRemovable' => function (ParseNode $n) use ($o) { $o->setIsRemovable($n->getBooleanValue()); },
            'isTallyingResponses' => function (ParseNode $n) use ($o) { $o->setIsTallyingResponses($n->getBooleanValue()); },
            'multiValueExtendedProperties' => function (ParseNode $n) use ($o) { $o->setMultiValueExtendedProperties($n->getCollectionOfObjectValues(array(MultiValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'))); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'owner' => function (ParseNode $n) use ($o) { $o->setOwner($n->getObjectValue(array(EmailAddress::class, 'createFromDiscriminatorValue'))); },
            'singleValueExtendedProperties' => function (ParseNode $n) use ($o) { $o->setSingleValueExtendedProperties($n->getCollectionOfObjectValues(array(SingleValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the hexColor property value. The calendar color, expressed in a hex color code of three hexadecimal values, each ranging from 00 to FF and representing the red, green, or blue components of the color in the RGB color space. If the user has never explicitly set a color for the calendar, this property is  empty.
     * @return string|null
    */
    public function getHexColor(): ?string {
        return $this->hexColor;
    }

    /**
     * Gets the isDefaultCalendar property value. true if this is the default calendar where new events are created by default, false otherwise.
     * @return bool|null
    */
    public function getIsDefaultCalendar(): ?bool {
        return $this->isDefaultCalendar;
    }

    /**
     * Gets the isRemovable property value. Indicates whether this user calendar can be deleted from the user mailbox.
     * @return bool|null
    */
    public function getIsRemovable(): ?bool {
        return $this->isRemovable;
    }

    /**
     * Gets the isTallyingResponses property value. Indicates whether this user calendar supports tracking of meeting responses. Only meeting invites sent from users' primary calendars support tracking of meeting responses.
     * @return bool|null
    */
    public function getIsTallyingResponses(): ?bool {
        return $this->isTallyingResponses;
    }

    /**
     * Gets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the calendar. Read-only. Nullable.
     * @return array<MultiValueLegacyExtendedProperty>|null
    */
    public function getMultiValueExtendedProperties(): ?array {
        return $this->multiValueExtendedProperties;
    }

    /**
     * Gets the name property value. The calendar name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the owner property value. If set, this represents the user who created or added the calendar. For a calendar that the user created or added, the owner property is set to the user. For a calendar shared with the user, the owner property is set to the person who shared that calendar with the user. Read-only.
     * @return EmailAddress|null
    */
    public function getOwner(): ?EmailAddress {
        return $this->owner;
    }

    /**
     * Gets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the calendar. Read-only. Nullable.
     * @return array<SingleValueLegacyExtendedProperty>|null
    */
    public function getSingleValueExtendedProperties(): ?array {
        return $this->singleValueExtendedProperties;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('allowedOnlineMeetingProviders', $this->allowedOnlineMeetingProviders);
        $writer->writeCollectionOfObjectValues('calendarPermissions', $this->calendarPermissions);
        $writer->writeCollectionOfObjectValues('calendarView', $this->calendarView);
        $writer->writeBooleanValue('canEdit', $this->canEdit);
        $writer->writeBooleanValue('canShare', $this->canShare);
        $writer->writeBooleanValue('canViewPrivateItems', $this->canViewPrivateItems);
        $writer->writeStringValue('changeKey', $this->changeKey);
        $writer->writeEnumValue('color', $this->color);
        $writer->writeEnumValue('defaultOnlineMeetingProvider', $this->defaultOnlineMeetingProvider);
        $writer->writeCollectionOfObjectValues('events', $this->events);
        $writer->writeStringValue('hexColor', $this->hexColor);
        $writer->writeBooleanValue('isDefaultCalendar', $this->isDefaultCalendar);
        $writer->writeBooleanValue('isRemovable', $this->isRemovable);
        $writer->writeBooleanValue('isTallyingResponses', $this->isTallyingResponses);
        $writer->writeCollectionOfObjectValues('multiValueExtendedProperties', $this->multiValueExtendedProperties);
        $writer->writeStringValue('name', $this->name);
        $writer->writeObjectValue('owner', $this->owner);
        $writer->writeCollectionOfObjectValues('singleValueExtendedProperties', $this->singleValueExtendedProperties);
    }

    /**
     * Sets the allowedOnlineMeetingProviders property value. Represent the online meeting service providers that can be used to create online meetings in this calendar. Possible values are: unknown, skypeForBusiness, skypeForConsumer, teamsForBusiness.
     *  @param array<string>|null $value Value to set for the allowedOnlineMeetingProviders property.
    */
    public function setAllowedOnlineMeetingProviders(?array $value ): void {
        $this->allowedOnlineMeetingProviders = $value;
    }

    /**
     * Sets the calendarPermissions property value. The permissions of the users with whom the calendar is shared.
     *  @param array<CalendarPermission>|null $value Value to set for the calendarPermissions property.
    */
    public function setCalendarPermissions(?array $value ): void {
        $this->calendarPermissions = $value;
    }

    /**
     * Sets the calendarView property value. The calendar view for the calendar. Navigation property. Read-only.
     *  @param array<Event>|null $value Value to set for the calendarView property.
    */
    public function setCalendarView(?array $value ): void {
        $this->calendarView = $value;
    }

    /**
     * Sets the canEdit property value. true if the user can write to the calendar, false otherwise. This property is true for the user who created the calendar. This property is also true for a user who has been shared a calendar and granted write access, through an Outlook client or the corresponding calendarPermission resource. Read-only.
     *  @param bool|null $value Value to set for the canEdit property.
    */
    public function setCanEdit(?bool $value ): void {
        $this->canEdit = $value;
    }

    /**
     * Sets the canShare property value. true if the user has the permission to share the calendar, false otherwise. Only the user who created the calendar can share it. Read-only.
     *  @param bool|null $value Value to set for the canShare property.
    */
    public function setCanShare(?bool $value ): void {
        $this->canShare = $value;
    }

    /**
     * Sets the canViewPrivateItems property value. true if the user can read calendar items that have been marked private, false otherwise. This property is set through an Outlook client or the corresponding calendarPermission resource. Read-only.
     *  @param bool|null $value Value to set for the canViewPrivateItems property.
    */
    public function setCanViewPrivateItems(?bool $value ): void {
        $this->canViewPrivateItems = $value;
    }

    /**
     * Sets the changeKey property value. Identifies the version of the calendar object. Every time the calendar is changed, changeKey changes as well. This allows Exchange to apply changes to the correct version of the object. Read-only.
     *  @param string|null $value Value to set for the changeKey property.
    */
    public function setChangeKey(?string $value ): void {
        $this->changeKey = $value;
    }

    /**
     * Sets the color property value. Specifies the color theme to distinguish the calendar from other calendars in a UI. The property values are: auto, lightBlue, lightGreen, lightOrange, lightGray, lightYellow, lightTeal, lightPink, lightBrown, lightRed, maxColor.
     *  @param CalendarColor|null $value Value to set for the color property.
    */
    public function setColor(?CalendarColor $value ): void {
        $this->color = $value;
    }

    /**
     * Sets the defaultOnlineMeetingProvider property value. The default online meeting provider for meetings sent from this calendar. Possible values are: unknown, skypeForBusiness, skypeForConsumer, teamsForBusiness.
     *  @param OnlineMeetingProviderType|null $value Value to set for the defaultOnlineMeetingProvider property.
    */
    public function setDefaultOnlineMeetingProvider(?OnlineMeetingProviderType $value ): void {
        $this->defaultOnlineMeetingProvider = $value;
    }

    /**
     * Sets the events property value. The events in the calendar. Navigation property. Read-only.
     *  @param array<Event>|null $value Value to set for the events property.
    */
    public function setEvents(?array $value ): void {
        $this->events = $value;
    }

    /**
     * Sets the hexColor property value. The calendar color, expressed in a hex color code of three hexadecimal values, each ranging from 00 to FF and representing the red, green, or blue components of the color in the RGB color space. If the user has never explicitly set a color for the calendar, this property is  empty.
     *  @param string|null $value Value to set for the hexColor property.
    */
    public function setHexColor(?string $value ): void {
        $this->hexColor = $value;
    }

    /**
     * Sets the isDefaultCalendar property value. true if this is the default calendar where new events are created by default, false otherwise.
     *  @param bool|null $value Value to set for the isDefaultCalendar property.
    */
    public function setIsDefaultCalendar(?bool $value ): void {
        $this->isDefaultCalendar = $value;
    }

    /**
     * Sets the isRemovable property value. Indicates whether this user calendar can be deleted from the user mailbox.
     *  @param bool|null $value Value to set for the isRemovable property.
    */
    public function setIsRemovable(?bool $value ): void {
        $this->isRemovable = $value;
    }

    /**
     * Sets the isTallyingResponses property value. Indicates whether this user calendar supports tracking of meeting responses. Only meeting invites sent from users' primary calendars support tracking of meeting responses.
     *  @param bool|null $value Value to set for the isTallyingResponses property.
    */
    public function setIsTallyingResponses(?bool $value ): void {
        $this->isTallyingResponses = $value;
    }

    /**
     * Sets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the calendar. Read-only. Nullable.
     *  @param array<MultiValueLegacyExtendedProperty>|null $value Value to set for the multiValueExtendedProperties property.
    */
    public function setMultiValueExtendedProperties(?array $value ): void {
        $this->multiValueExtendedProperties = $value;
    }

    /**
     * Sets the name property value. The calendar name.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the owner property value. If set, this represents the user who created or added the calendar. For a calendar that the user created or added, the owner property is set to the user. For a calendar shared with the user, the owner property is set to the person who shared that calendar with the user. Read-only.
     *  @param EmailAddress|null $value Value to set for the owner property.
    */
    public function setOwner(?EmailAddress $value ): void {
        $this->owner = $value;
    }

    /**
     * Sets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the calendar. Read-only. Nullable.
     *  @param array<SingleValueLegacyExtendedProperty>|null $value Value to set for the singleValueExtendedProperties property.
    */
    public function setSingleValueExtendedProperties(?array $value ): void {
        $this->singleValueExtendedProperties = $value;
    }

}
