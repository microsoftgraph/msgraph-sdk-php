<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SubjectRightsRequestEnumeratedMailboxLocation extends SubjectRightsRequestMailboxLocation implements Parsable 
{
    /**
     * Instantiates a new SubjectRightsRequestEnumeratedMailboxLocation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.subjectRightsRequestEnumeratedMailboxLocation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubjectRightsRequestEnumeratedMailboxLocation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubjectRightsRequestEnumeratedMailboxLocation {
        return new SubjectRightsRequestEnumeratedMailboxLocation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'userPrincipalNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setUserPrincipalNames($val);
            },
        ]);
    }

    /**
     * Gets the userPrincipalNames property value. Collection of mailboxes that should be included in the search. Includes the user principal name (UPN) of each mailbox, for example, Monica.Thompson@contoso.com.
     * @return array<string>|null
    */
    public function getUserPrincipalNames(): ?array {
        $val = $this->getBackingStore()->get('userPrincipalNames');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalNames'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('userPrincipalNames', $this->getUserPrincipalNames());
    }

    /**
     * Sets the userPrincipalNames property value. Collection of mailboxes that should be included in the search. Includes the user principal name (UPN) of each mailbox, for example, Monica.Thompson@contoso.com.
     * @param array<string>|null $value Value to set for the userPrincipalNames property.
    */
    public function setUserPrincipalNames(?array $value): void {
        $this->getBackingStore()->set('userPrincipalNames', $value);
    }

}
