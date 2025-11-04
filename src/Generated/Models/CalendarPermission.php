<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CalendarPermission extends Entity implements Parsable 
{
    /**
     * Instantiates a new CalendarPermission and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CalendarPermission
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CalendarPermission {
        return new CalendarPermission();
    }

    /**
     * Gets the allowedRoles property value. List of allowed sharing or delegating permission levels for the calendar. Possible values are: none, freeBusyRead, limitedRead, read, write, delegateWithoutPrivateEventAccess, delegateWithPrivateEventAccess, custom.
     * @return array<CalendarRoleType>|null
    */
    public function getAllowedRoles(): ?array {
        $val = $this->getBackingStore()->get('allowedRoles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CalendarRoleType::class);
            /** @var array<CalendarRoleType>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedRoles'");
    }

    /**
     * Gets the emailAddress property value. Represents a share recipient or delegate who has access to the calendar. For the 'My Organization' share recipient, the address property is null. Read-only.
     * @return EmailAddress|null
    */
    public function getEmailAddress(): ?EmailAddress {
        $val = $this->getBackingStore()->get('emailAddress');
        if (is_null($val) || $val instanceof EmailAddress) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailAddress'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedRoles' => fn(ParseNode $n) => $o->setAllowedRoles($n->getCollectionOfEnumValues(CalendarRoleType::class)),
            'emailAddress' => fn(ParseNode $n) => $o->setEmailAddress($n->getObjectValue([EmailAddress::class, 'createFromDiscriminatorValue'])),
            'isInsideOrganization' => fn(ParseNode $n) => $o->setIsInsideOrganization($n->getBooleanValue()),
            'isRemovable' => fn(ParseNode $n) => $o->setIsRemovable($n->getBooleanValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(CalendarRoleType::class)),
        ]);
    }

    /**
     * Gets the isInsideOrganization property value. True if the user in context (recipient or delegate) is inside the same organization as the calendar owner.
     * @return bool|null
    */
    public function getIsInsideOrganization(): ?bool {
        $val = $this->getBackingStore()->get('isInsideOrganization');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isInsideOrganization'");
    }

    /**
     * Gets the isRemovable property value. True if the user can be removed from the list of recipients or delegates for the specified calendar, false otherwise. The 'My organization' user determines the permissions other people within your organization have to the given calendar. You can't remove 'My organization' as a share recipient to a calendar.
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
     * Gets the role property value. Current permission level of the calendar share recipient or delegate.
     * @return CalendarRoleType|null
    */
    public function getRole(): ?CalendarRoleType {
        $val = $this->getBackingStore()->get('role');
        if (is_null($val) || $val instanceof CalendarRoleType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'role'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfEnumValues('allowedRoles', $this->getAllowedRoles());
        $writer->writeObjectValue('emailAddress', $this->getEmailAddress());
        $writer->writeBooleanValue('isInsideOrganization', $this->getIsInsideOrganization());
        $writer->writeBooleanValue('isRemovable', $this->getIsRemovable());
        $writer->writeEnumValue('role', $this->getRole());
    }

    /**
     * Sets the allowedRoles property value. List of allowed sharing or delegating permission levels for the calendar. Possible values are: none, freeBusyRead, limitedRead, read, write, delegateWithoutPrivateEventAccess, delegateWithPrivateEventAccess, custom.
     * @param array<CalendarRoleType>|null $value Value to set for the allowedRoles property.
    */
    public function setAllowedRoles(?array $value): void {
        $this->getBackingStore()->set('allowedRoles', $value);
    }

    /**
     * Sets the emailAddress property value. Represents a share recipient or delegate who has access to the calendar. For the 'My Organization' share recipient, the address property is null. Read-only.
     * @param EmailAddress|null $value Value to set for the emailAddress property.
    */
    public function setEmailAddress(?EmailAddress $value): void {
        $this->getBackingStore()->set('emailAddress', $value);
    }

    /**
     * Sets the isInsideOrganization property value. True if the user in context (recipient or delegate) is inside the same organization as the calendar owner.
     * @param bool|null $value Value to set for the isInsideOrganization property.
    */
    public function setIsInsideOrganization(?bool $value): void {
        $this->getBackingStore()->set('isInsideOrganization', $value);
    }

    /**
     * Sets the isRemovable property value. True if the user can be removed from the list of recipients or delegates for the specified calendar, false otherwise. The 'My organization' user determines the permissions other people within your organization have to the given calendar. You can't remove 'My organization' as a share recipient to a calendar.
     * @param bool|null $value Value to set for the isRemovable property.
    */
    public function setIsRemovable(?bool $value): void {
        $this->getBackingStore()->set('isRemovable', $value);
    }

    /**
     * Sets the role property value. Current permission level of the calendar share recipient or delegate.
     * @param CalendarRoleType|null $value Value to set for the role property.
    */
    public function setRole(?CalendarRoleType $value): void {
        $this->getBackingStore()->set('role', $value);
    }

}
