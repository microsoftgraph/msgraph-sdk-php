<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrinterShare extends PrinterBase implements Parsable 
{
    /**
     * @var bool|null $allowAllUsers If true, all users and groups will be granted access to this printer share. This supersedes the allow lists defined by the allowedUsers and allowedGroups navigation properties.
    */
    private ?bool $allowAllUsers = null;
    
    /**
     * @var array<Group>|null $allowedGroups The groups whose users have access to print using the printer.
    */
    private ?array $allowedGroups = null;
    
    /**
     * @var array<User>|null $allowedUsers The users who have access to print using the printer.
    */
    private ?array $allowedUsers = null;
    
    /**
     * @var DateTime|null $createdDateTime The DateTimeOffset when the printer share was created. Read-only.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var Printer|null $printer The printer that this printer share is related to.
    */
    private ?Printer $printer = null;
    
    /**
     * Instantiates a new printerShare and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrinterShare
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrinterShare {
        return new PrinterShare();
    }

    /**
     * Gets the allowAllUsers property value. If true, all users and groups will be granted access to this printer share. This supersedes the allow lists defined by the allowedUsers and allowedGroups navigation properties.
     * @return bool|null
    */
    public function getAllowAllUsers(): ?bool {
        return $this->allowAllUsers;
    }

    /**
     * Gets the allowedGroups property value. The groups whose users have access to print using the printer.
     * @return array<Group>|null
    */
    public function getAllowedGroups(): ?array {
        return $this->allowedGroups;
    }

    /**
     * Gets the allowedUsers property value. The users who have access to print using the printer.
     * @return array<User>|null
    */
    public function getAllowedUsers(): ?array {
        return $this->allowedUsers;
    }

    /**
     * Gets the createdDateTime property value. The DateTimeOffset when the printer share was created. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowAllUsers' => function (ParseNode $n) use ($o) { $o->setAllowAllUsers($n->getBooleanValue()); },
            'allowedGroups' => function (ParseNode $n) use ($o) { $o->setAllowedGroups($n->getCollectionOfObjectValues(array(Group::class, 'createFromDiscriminatorValue'))); },
            'allowedUsers' => function (ParseNode $n) use ($o) { $o->setAllowedUsers($n->getCollectionOfObjectValues(array(User::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'printer' => function (ParseNode $n) use ($o) { $o->setPrinter($n->getObjectValue(array(Printer::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the printer property value. The printer that this printer share is related to.
     * @return Printer|null
    */
    public function getPrinter(): ?Printer {
        return $this->printer;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowAllUsers', $this->allowAllUsers);
        $writer->writeCollectionOfObjectValues('allowedGroups', $this->allowedGroups);
        $writer->writeCollectionOfObjectValues('allowedUsers', $this->allowedUsers);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('printer', $this->printer);
    }

    /**
     * Sets the allowAllUsers property value. If true, all users and groups will be granted access to this printer share. This supersedes the allow lists defined by the allowedUsers and allowedGroups navigation properties.
     *  @param bool|null $value Value to set for the allowAllUsers property.
    */
    public function setAllowAllUsers(?bool $value ): void {
        $this->allowAllUsers = $value;
    }

    /**
     * Sets the allowedGroups property value. The groups whose users have access to print using the printer.
     *  @param array<Group>|null $value Value to set for the allowedGroups property.
    */
    public function setAllowedGroups(?array $value ): void {
        $this->allowedGroups = $value;
    }

    /**
     * Sets the allowedUsers property value. The users who have access to print using the printer.
     *  @param array<User>|null $value Value to set for the allowedUsers property.
    */
    public function setAllowedUsers(?array $value ): void {
        $this->allowedUsers = $value;
    }

    /**
     * Sets the createdDateTime property value. The DateTimeOffset when the printer share was created. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the printer property value. The printer that this printer share is related to.
     *  @param Printer|null $value Value to set for the printer property.
    */
    public function setPrinter(?Printer $value ): void {
        $this->printer = $value;
    }

}
