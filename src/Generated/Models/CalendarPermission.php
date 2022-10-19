<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CalendarPermission extends Entity implements Parsable 
{
    /**
     * @var array<CalendarRoleType>|null $allowedRoles List of allowed sharing or delegating permission levels for the calendar. Possible values are: none, freeBusyRead, limitedRead, read, write, delegateWithoutPrivateEventAccess, delegateWithPrivateEventAccess, custom.
    */
    private ?array $allowedRoles = null;
    
    /**
     * @var EmailAddress|null $emailAddress Represents a sharee or delegate who has access to the calendar. For the 'My Organization' sharee, the address property is null. Read-only.
    */
    private ?EmailAddress $emailAddress = null;
    
    /**
     * @var bool|null $isInsideOrganization True if the user in context (sharee or delegate) is inside the same organization as the calendar owner.
    */
    private ?bool $isInsideOrganization = null;
    
    /**
     * @var bool|null $isRemovable True if the user can be removed from the list of sharees or delegates for the specified calendar, false otherwise. The 'My organization' user determines the permissions other people within your organization have to the given calendar. You cannot remove 'My organization' as a sharee to a calendar.
    */
    private ?bool $isRemovable = null;
    
    /**
     * @var CalendarRoleType|null $role Current permission level of the calendar sharee or delegate.
    */
    private ?CalendarRoleType $role = null;
    
    /**
     * Instantiates a new calendarPermission and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.calendarPermission');
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
        return $this->allowedRoles;
    }

    /**
     * Gets the emailAddress property value. Represents a sharee or delegate who has access to the calendar. For the 'My Organization' sharee, the address property is null. Read-only.
     * @return EmailAddress|null
    */
    public function getEmailAddress(): ?EmailAddress {
        return $this->emailAddress;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
     * Gets the isInsideOrganization property value. True if the user in context (sharee or delegate) is inside the same organization as the calendar owner.
     * @return bool|null
    */
    public function getIsInsideOrganization(): ?bool {
        return $this->isInsideOrganization;
    }

    /**
     * Gets the isRemovable property value. True if the user can be removed from the list of sharees or delegates for the specified calendar, false otherwise. The 'My organization' user determines the permissions other people within your organization have to the given calendar. You cannot remove 'My organization' as a sharee to a calendar.
     * @return bool|null
    */
    public function getIsRemovable(): ?bool {
        return $this->isRemovable;
    }

    /**
     * Gets the role property value. Current permission level of the calendar sharee or delegate.
     * @return CalendarRoleType|null
    */
    public function getRole(): ?CalendarRoleType {
        return $this->role;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfEnumValues('allowedRoles', $this->allowedRoles);
        $writer->writeObjectValue('emailAddress', $this->emailAddress);
        $writer->writeBooleanValue('isInsideOrganization', $this->isInsideOrganization);
        $writer->writeBooleanValue('isRemovable', $this->isRemovable);
        $writer->writeEnumValue('role', $this->role);
    }

    /**
     * Sets the allowedRoles property value. List of allowed sharing or delegating permission levels for the calendar. Possible values are: none, freeBusyRead, limitedRead, read, write, delegateWithoutPrivateEventAccess, delegateWithPrivateEventAccess, custom.
     *  @param array<CalendarRoleType>|null $value Value to set for the allowedRoles property.
    */
    public function setAllowedRoles(?array $value ): void {
        $this->allowedRoles = $value;
    }

    /**
     * Sets the emailAddress property value. Represents a sharee or delegate who has access to the calendar. For the 'My Organization' sharee, the address property is null. Read-only.
     *  @param EmailAddress|null $value Value to set for the emailAddress property.
    */
    public function setEmailAddress(?EmailAddress $value ): void {
        $this->emailAddress = $value;
    }

    /**
     * Sets the isInsideOrganization property value. True if the user in context (sharee or delegate) is inside the same organization as the calendar owner.
     *  @param bool|null $value Value to set for the isInsideOrganization property.
    */
    public function setIsInsideOrganization(?bool $value ): void {
        $this->isInsideOrganization = $value;
    }

    /**
     * Sets the isRemovable property value. True if the user can be removed from the list of sharees or delegates for the specified calendar, false otherwise. The 'My organization' user determines the permissions other people within your organization have to the given calendar. You cannot remove 'My organization' as a sharee to a calendar.
     *  @param bool|null $value Value to set for the isRemovable property.
    */
    public function setIsRemovable(?bool $value ): void {
        $this->isRemovable = $value;
    }

    /**
     * Sets the role property value. Current permission level of the calendar sharee or delegate.
     *  @param CalendarRoleType|null $value Value to set for the role property.
    */
    public function setRole(?CalendarRoleType $value ): void {
        $this->role = $value;
    }

}
