<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Calendar extends Entity implements Parsable 
{
    /**
     * Instantiates a new Calendar and sets the default values.
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
     * Gets the allowedOnlineMeetingProviders property value. Represent the online meeting service providers that can be used to create online meetings in this calendar. The possible values are: unknown, skypeForBusiness, skypeForConsumer, teamsForBusiness.
     * @return array<OnlineMeetingProviderType>|null
    */
    public function getAllowedOnlineMeetingProviders(): ?array {
        $val = $this->getBackingStore()->get('allowedOnlineMeetingProviders');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OnlineMeetingProviderType::class);
            /** @var array<OnlineMeetingProviderType>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedOnlineMeetingProviders'");
    }

    /**
     * Gets the calendarPermissions property value. The permissions of the users with whom the calendar is shared.
     * @return array<CalendarPermission>|null
    */
    public function getCalendarPermissions(): ?array {
        $val = $this->getBackingStore()->get('calendarPermissions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CalendarPermission::class);
            /** @var array<CalendarPermission>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'calendarPermissions'");
    }

    /**
     * Gets the calendarView property value. The calendar view for the calendar. Navigation property. Read-only.
     * @return array<Event>|null
    */
    public function getCalendarView(): ?array {
        $val = $this->getBackingStore()->get('calendarView');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Event::class);
            /** @var array<Event>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'calendarView'");
    }

    /**
     * Gets the canEdit property value. true if the user can write to the calendar, false otherwise. This property is true for the user who created the calendar. This property is also true for a user who shared a calendar and granted write access.
     * @return bool|null
    */
    public function getCanEdit(): ?bool {
        $val = $this->getBackingStore()->get('canEdit');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'canEdit'");
    }

    /**
     * Gets the canShare property value. true if the user has permission to share the calendar, false otherwise. Only the user who created the calendar can share it.
     * @return bool|null
    */
    public function getCanShare(): ?bool {
        $val = $this->getBackingStore()->get('canShare');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'canShare'");
    }

    /**
     * Gets the canViewPrivateItems property value. If true, the user can read calendar items that have been marked private, false otherwise.
     * @return bool|null
    */
    public function getCanViewPrivateItems(): ?bool {
        $val = $this->getBackingStore()->get('canViewPrivateItems');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'canViewPrivateItems'");
    }

    /**
     * Gets the changeKey property value. Identifies the version of the calendar object. Every time the calendar is changed, changeKey changes as well. This allows Exchange to apply changes to the correct version of the object. Read-only.
     * @return string|null
    */
    public function getChangeKey(): ?string {
        $val = $this->getBackingStore()->get('changeKey');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'changeKey'");
    }

    /**
     * Gets the color property value. Specifies the color theme to distinguish the calendar from other calendars in a UI. The property values are: auto, lightBlue, lightGreen, lightOrange, lightGray, lightYellow, lightTeal, lightPink, lightBrown, lightRed, maxColor.
     * @return CalendarColor|null
    */
    public function getColor(): ?CalendarColor {
        $val = $this->getBackingStore()->get('color');
        if (is_null($val) || $val instanceof CalendarColor) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'color'");
    }

    /**
     * Gets the defaultOnlineMeetingProvider property value. The default online meeting provider for meetings sent from this calendar. The possible values are: unknown, skypeForBusiness, skypeForConsumer, teamsForBusiness.
     * @return OnlineMeetingProviderType|null
    */
    public function getDefaultOnlineMeetingProvider(): ?OnlineMeetingProviderType {
        $val = $this->getBackingStore()->get('defaultOnlineMeetingProvider');
        if (is_null($val) || $val instanceof OnlineMeetingProviderType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultOnlineMeetingProvider'");
    }

    /**
     * Gets the events property value. The events in the calendar. Navigation property. Read-only.
     * @return array<Event>|null
    */
    public function getEvents(): ?array {
        $val = $this->getBackingStore()->get('events');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Event::class);
            /** @var array<Event>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'events'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedOnlineMeetingProviders' => fn(ParseNode $n) => $o->setAllowedOnlineMeetingProviders($n->getCollectionOfEnumValues(OnlineMeetingProviderType::class)),
            'calendarPermissions' => fn(ParseNode $n) => $o->setCalendarPermissions($n->getCollectionOfObjectValues([CalendarPermission::class, 'createFromDiscriminatorValue'])),
            'calendarView' => fn(ParseNode $n) => $o->setCalendarView($n->getCollectionOfObjectValues([Event::class, 'createFromDiscriminatorValue'])),
            'canEdit' => fn(ParseNode $n) => $o->setCanEdit($n->getBooleanValue()),
            'canShare' => fn(ParseNode $n) => $o->setCanShare($n->getBooleanValue()),
            'canViewPrivateItems' => fn(ParseNode $n) => $o->setCanViewPrivateItems($n->getBooleanValue()),
            'changeKey' => fn(ParseNode $n) => $o->setChangeKey($n->getStringValue()),
            'color' => fn(ParseNode $n) => $o->setColor($n->getEnumValue(CalendarColor::class)),
            'defaultOnlineMeetingProvider' => fn(ParseNode $n) => $o->setDefaultOnlineMeetingProvider($n->getEnumValue(OnlineMeetingProviderType::class)),
            'events' => fn(ParseNode $n) => $o->setEvents($n->getCollectionOfObjectValues([Event::class, 'createFromDiscriminatorValue'])),
            'hexColor' => fn(ParseNode $n) => $o->setHexColor($n->getStringValue()),
            'isDefaultCalendar' => fn(ParseNode $n) => $o->setIsDefaultCalendar($n->getBooleanValue()),
            'isRemovable' => fn(ParseNode $n) => $o->setIsRemovable($n->getBooleanValue()),
            'isTallyingResponses' => fn(ParseNode $n) => $o->setIsTallyingResponses($n->getBooleanValue()),
            'multiValueExtendedProperties' => fn(ParseNode $n) => $o->setMultiValueExtendedProperties($n->getCollectionOfObjectValues([MultiValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'owner' => fn(ParseNode $n) => $o->setOwner($n->getObjectValue([EmailAddress::class, 'createFromDiscriminatorValue'])),
            'singleValueExtendedProperties' => fn(ParseNode $n) => $o->setSingleValueExtendedProperties($n->getCollectionOfObjectValues([SingleValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the hexColor property value. The calendar color, expressed in a hex color code of three hexadecimal values, each ranging from 00 to FF and representing the red, green, or blue components of the color in the RGB color space. If the user has never explicitly set a color for the calendar, this property is empty. Read-only.
     * @return string|null
    */
    public function getHexColor(): ?string {
        $val = $this->getBackingStore()->get('hexColor');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hexColor'");
    }

    /**
     * Gets the isDefaultCalendar property value. true if this is the default calendar where new events are created by default, false otherwise.
     * @return bool|null
    */
    public function getIsDefaultCalendar(): ?bool {
        $val = $this->getBackingStore()->get('isDefaultCalendar');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDefaultCalendar'");
    }

    /**
     * Gets the isRemovable property value. Indicates whether this user calendar can be deleted from the user mailbox.
     * @return bool|null
    */
    public function getIsRemovable(): ?bool {
        $val = $this->getBackingStore()->get('isRemovable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRemovable'");
    }

    /**
     * Gets the isTallyingResponses property value. Indicates whether this user calendar supports tracking of meeting responses. Only meeting invites sent from users' primary calendars support tracking of meeting responses.
     * @return bool|null
    */
    public function getIsTallyingResponses(): ?bool {
        $val = $this->getBackingStore()->get('isTallyingResponses');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isTallyingResponses'");
    }

    /**
     * Gets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the calendar. Read-only. Nullable.
     * @return array<MultiValueLegacyExtendedProperty>|null
    */
    public function getMultiValueExtendedProperties(): ?array {
        $val = $this->getBackingStore()->get('multiValueExtendedProperties');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MultiValueLegacyExtendedProperty::class);
            /** @var array<MultiValueLegacyExtendedProperty>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'multiValueExtendedProperties'");
    }

    /**
     * Gets the name property value. The calendar name.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the owner property value. If set, this represents the user who created or added the calendar. For a calendar that the user created or added, the owner property is set to the user. For a calendar shared with the user, the owner property is set to the person who shared that calendar with the user.
     * @return EmailAddress|null
    */
    public function getOwner(): ?EmailAddress {
        $val = $this->getBackingStore()->get('owner');
        if (is_null($val) || $val instanceof EmailAddress) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'owner'");
    }

    /**
     * Gets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the calendar. Read-only. Nullable.
     * @return array<SingleValueLegacyExtendedProperty>|null
    */
    public function getSingleValueExtendedProperties(): ?array {
        $val = $this->getBackingStore()->get('singleValueExtendedProperties');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SingleValueLegacyExtendedProperty::class);
            /** @var array<SingleValueLegacyExtendedProperty>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'singleValueExtendedProperties'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfEnumValues('allowedOnlineMeetingProviders', $this->getAllowedOnlineMeetingProviders());
        $writer->writeCollectionOfObjectValues('calendarPermissions', $this->getCalendarPermissions());
        $writer->writeCollectionOfObjectValues('calendarView', $this->getCalendarView());
        $writer->writeBooleanValue('canEdit', $this->getCanEdit());
        $writer->writeBooleanValue('canShare', $this->getCanShare());
        $writer->writeBooleanValue('canViewPrivateItems', $this->getCanViewPrivateItems());
        $writer->writeStringValue('changeKey', $this->getChangeKey());
        $writer->writeEnumValue('color', $this->getColor());
        $writer->writeEnumValue('defaultOnlineMeetingProvider', $this->getDefaultOnlineMeetingProvider());
        $writer->writeCollectionOfObjectValues('events', $this->getEvents());
        $writer->writeStringValue('hexColor', $this->getHexColor());
        $writer->writeBooleanValue('isDefaultCalendar', $this->getIsDefaultCalendar());
        $writer->writeBooleanValue('isRemovable', $this->getIsRemovable());
        $writer->writeBooleanValue('isTallyingResponses', $this->getIsTallyingResponses());
        $writer->writeCollectionOfObjectValues('multiValueExtendedProperties', $this->getMultiValueExtendedProperties());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('owner', $this->getOwner());
        $writer->writeCollectionOfObjectValues('singleValueExtendedProperties', $this->getSingleValueExtendedProperties());
    }

    /**
     * Sets the allowedOnlineMeetingProviders property value. Represent the online meeting service providers that can be used to create online meetings in this calendar. The possible values are: unknown, skypeForBusiness, skypeForConsumer, teamsForBusiness.
     * @param array<OnlineMeetingProviderType>|null $value Value to set for the allowedOnlineMeetingProviders property.
    */
    public function setAllowedOnlineMeetingProviders(?array $value): void {
        $this->getBackingStore()->set('allowedOnlineMeetingProviders', $value);
    }

    /**
     * Sets the calendarPermissions property value. The permissions of the users with whom the calendar is shared.
     * @param array<CalendarPermission>|null $value Value to set for the calendarPermissions property.
    */
    public function setCalendarPermissions(?array $value): void {
        $this->getBackingStore()->set('calendarPermissions', $value);
    }

    /**
     * Sets the calendarView property value. The calendar view for the calendar. Navigation property. Read-only.
     * @param array<Event>|null $value Value to set for the calendarView property.
    */
    public function setCalendarView(?array $value): void {
        $this->getBackingStore()->set('calendarView', $value);
    }

    /**
     * Sets the canEdit property value. true if the user can write to the calendar, false otherwise. This property is true for the user who created the calendar. This property is also true for a user who shared a calendar and granted write access.
     * @param bool|null $value Value to set for the canEdit property.
    */
    public function setCanEdit(?bool $value): void {
        $this->getBackingStore()->set('canEdit', $value);
    }

    /**
     * Sets the canShare property value. true if the user has permission to share the calendar, false otherwise. Only the user who created the calendar can share it.
     * @param bool|null $value Value to set for the canShare property.
    */
    public function setCanShare(?bool $value): void {
        $this->getBackingStore()->set('canShare', $value);
    }

    /**
     * Sets the canViewPrivateItems property value. If true, the user can read calendar items that have been marked private, false otherwise.
     * @param bool|null $value Value to set for the canViewPrivateItems property.
    */
    public function setCanViewPrivateItems(?bool $value): void {
        $this->getBackingStore()->set('canViewPrivateItems', $value);
    }

    /**
     * Sets the changeKey property value. Identifies the version of the calendar object. Every time the calendar is changed, changeKey changes as well. This allows Exchange to apply changes to the correct version of the object. Read-only.
     * @param string|null $value Value to set for the changeKey property.
    */
    public function setChangeKey(?string $value): void {
        $this->getBackingStore()->set('changeKey', $value);
    }

    /**
     * Sets the color property value. Specifies the color theme to distinguish the calendar from other calendars in a UI. The property values are: auto, lightBlue, lightGreen, lightOrange, lightGray, lightYellow, lightTeal, lightPink, lightBrown, lightRed, maxColor.
     * @param CalendarColor|null $value Value to set for the color property.
    */
    public function setColor(?CalendarColor $value): void {
        $this->getBackingStore()->set('color', $value);
    }

    /**
     * Sets the defaultOnlineMeetingProvider property value. The default online meeting provider for meetings sent from this calendar. The possible values are: unknown, skypeForBusiness, skypeForConsumer, teamsForBusiness.
     * @param OnlineMeetingProviderType|null $value Value to set for the defaultOnlineMeetingProvider property.
    */
    public function setDefaultOnlineMeetingProvider(?OnlineMeetingProviderType $value): void {
        $this->getBackingStore()->set('defaultOnlineMeetingProvider', $value);
    }

    /**
     * Sets the events property value. The events in the calendar. Navigation property. Read-only.
     * @param array<Event>|null $value Value to set for the events property.
    */
    public function setEvents(?array $value): void {
        $this->getBackingStore()->set('events', $value);
    }

    /**
     * Sets the hexColor property value. The calendar color, expressed in a hex color code of three hexadecimal values, each ranging from 00 to FF and representing the red, green, or blue components of the color in the RGB color space. If the user has never explicitly set a color for the calendar, this property is empty. Read-only.
     * @param string|null $value Value to set for the hexColor property.
    */
    public function setHexColor(?string $value): void {
        $this->getBackingStore()->set('hexColor', $value);
    }

    /**
     * Sets the isDefaultCalendar property value. true if this is the default calendar where new events are created by default, false otherwise.
     * @param bool|null $value Value to set for the isDefaultCalendar property.
    */
    public function setIsDefaultCalendar(?bool $value): void {
        $this->getBackingStore()->set('isDefaultCalendar', $value);
    }

    /**
     * Sets the isRemovable property value. Indicates whether this user calendar can be deleted from the user mailbox.
     * @param bool|null $value Value to set for the isRemovable property.
    */
    public function setIsRemovable(?bool $value): void {
        $this->getBackingStore()->set('isRemovable', $value);
    }

    /**
     * Sets the isTallyingResponses property value. Indicates whether this user calendar supports tracking of meeting responses. Only meeting invites sent from users' primary calendars support tracking of meeting responses.
     * @param bool|null $value Value to set for the isTallyingResponses property.
    */
    public function setIsTallyingResponses(?bool $value): void {
        $this->getBackingStore()->set('isTallyingResponses', $value);
    }

    /**
     * Sets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the calendar. Read-only. Nullable.
     * @param array<MultiValueLegacyExtendedProperty>|null $value Value to set for the multiValueExtendedProperties property.
    */
    public function setMultiValueExtendedProperties(?array $value): void {
        $this->getBackingStore()->set('multiValueExtendedProperties', $value);
    }

    /**
     * Sets the name property value. The calendar name.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the owner property value. If set, this represents the user who created or added the calendar. For a calendar that the user created or added, the owner property is set to the user. For a calendar shared with the user, the owner property is set to the person who shared that calendar with the user.
     * @param EmailAddress|null $value Value to set for the owner property.
    */
    public function setOwner(?EmailAddress $value): void {
        $this->getBackingStore()->set('owner', $value);
    }

    /**
     * Sets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the calendar. Read-only. Nullable.
     * @param array<SingleValueLegacyExtendedProperty>|null $value Value to set for the singleValueExtendedProperties property.
    */
    public function setSingleValueExtendedProperties(?array $value): void {
        $this->getBackingStore()->set('singleValueExtendedProperties', $value);
    }

}
