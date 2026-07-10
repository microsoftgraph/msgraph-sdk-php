<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CollaborationRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new CollaborationRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CollaborationRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CollaborationRoot {
        return new CollaborationRoot();
    }

    /**
     * Gets the analyzedEmails property value. Contains metadata for analyzed emails.
     * @return array<AnalyzedEmail>|null
    */
    public function getAnalyzedEmails(): ?array {
        $val = $this->getBackingStore()->get('analyzedEmails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AnalyzedEmail::class);
            /** @var array<AnalyzedEmail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'analyzedEmails'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'analyzedEmails' => fn(ParseNode $n) => $o->setAnalyzedEmails($n->getCollectionOfObjectValues([AnalyzedEmail::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('analyzedEmails', $this->getAnalyzedEmails());
    }

    /**
     * Sets the analyzedEmails property value. Contains metadata for analyzed emails.
     * @param array<AnalyzedEmail>|null $value Value to set for the analyzedEmails property.
    */
    public function setAnalyzedEmails(?array $value): void {
        $this->getBackingStore()->set('analyzedEmails', $value);
    }

}
