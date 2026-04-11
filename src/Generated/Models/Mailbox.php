<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Mailbox extends DirectoryObject implements Parsable 
{
    /**
     * Instantiates a new Mailbox and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.mailbox');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Mailbox
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Mailbox {
        return new Mailbox();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'folders' => fn(ParseNode $n) => $o->setFolders($n->getCollectionOfObjectValues([MailboxFolder::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the folders property value. The folders property
     * @return array<MailboxFolder>|null
    */
    public function getFolders(): ?array {
        $val = $this->getBackingStore()->get('folders');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MailboxFolder::class);
            /** @var array<MailboxFolder>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'folders'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('folders', $this->getFolders());
    }

    /**
     * Sets the folders property value. The folders property
     * @param array<MailboxFolder>|null $value Value to set for the folders property.
    */
    public function setFolders(?array $value): void {
        $this->getBackingStore()->set('folders', $value);
    }

}
