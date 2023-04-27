<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrinterShare extends PrinterBase implements Parsable 
{
    /**
     * Instantiates a new PrinterShare and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.printerShare');
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
        return $this->getBackingStore()->get('allowAllUsers');
    }

    /**
     * Gets the allowedGroups property value. The groups whose users have access to print using the printer.
     * @return array<Group>|null
    */
    public function getAllowedGroups(): ?array {
        return $this->getBackingStore()->get('allowedGroups');
    }

    /**
     * Gets the allowedUsers property value. The users who have access to print using the printer.
     * @return array<User>|null
    */
    public function getAllowedUsers(): ?array {
        return $this->getBackingStore()->get('allowedUsers');
    }

    /**
     * Gets the createdDateTime property value. The DateTimeOffset when the printer share was created. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowAllUsers' => fn(ParseNode $n) => $o->setAllowAllUsers($n->getBooleanValue()),
            'allowedGroups' => fn(ParseNode $n) => $o->setAllowedGroups($n->getCollectionOfObjectValues([Group::class, 'createFromDiscriminatorValue'])),
            'allowedUsers' => fn(ParseNode $n) => $o->setAllowedUsers($n->getCollectionOfObjectValues([User::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'printer' => fn(ParseNode $n) => $o->setPrinter($n->getObjectValue([Printer::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the printer property value. The printer that this printer share is related to.
     * @return Printer|null
    */
    public function getPrinter(): ?Printer {
        return $this->getBackingStore()->get('printer');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowAllUsers', $this->getAllowAllUsers());
        $writer->writeCollectionOfObjectValues('allowedGroups', $this->getAllowedGroups());
        $writer->writeCollectionOfObjectValues('allowedUsers', $this->getAllowedUsers());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('printer', $this->getPrinter());
    }

    /**
     * Sets the allowAllUsers property value. If true, all users and groups will be granted access to this printer share. This supersedes the allow lists defined by the allowedUsers and allowedGroups navigation properties.
     * @param bool|null $value Value to set for the allowAllUsers property.
    */
    public function setAllowAllUsers(?bool $value): void {
        $this->getBackingStore()->set('allowAllUsers', $value);
    }

    /**
     * Sets the allowedGroups property value. The groups whose users have access to print using the printer.
     * @param array<Group>|null $value Value to set for the allowedGroups property.
    */
    public function setAllowedGroups(?array $value): void {
        $this->getBackingStore()->set('allowedGroups', $value);
    }

    /**
     * Sets the allowedUsers property value. The users who have access to print using the printer.
     * @param array<User>|null $value Value to set for the allowedUsers property.
    */
    public function setAllowedUsers(?array $value): void {
        $this->getBackingStore()->set('allowedUsers', $value);
    }

    /**
     * Sets the createdDateTime property value. The DateTimeOffset when the printer share was created. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the printer property value. The printer that this printer share is related to.
     * @param Printer|null $value Value to set for the printer property.
    */
    public function setPrinter(?Printer $value): void {
        $this->getBackingStore()->set('printer', $value);
    }

}
