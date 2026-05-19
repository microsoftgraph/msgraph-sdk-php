<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class VerifiableCredentialAuthenticationMethodTarget extends AuthenticationMethodTarget implements Parsable 
{
    /**
     * Instantiates a new VerifiableCredentialAuthenticationMethodTarget and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VerifiableCredentialAuthenticationMethodTarget
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VerifiableCredentialAuthenticationMethodTarget {
        return new VerifiableCredentialAuthenticationMethodTarget();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'verifiedIdProfiles' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setVerifiedIdProfiles($val);
            },
        ]);
    }

    /**
     * Gets the verifiedIdProfiles property value. A collection of Verified ID profile IDs. The profiles define the credentials that users can present to prove their id when signing in, onboarding, or recovering. Verified ID profiles are managed through the Verified ID APIs.
     * @return array<string>|null
    */
    public function getVerifiedIdProfiles(): ?array {
        $val = $this->getBackingStore()->get('verifiedIdProfiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'verifiedIdProfiles'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('verifiedIdProfiles', $this->getVerifiedIdProfiles());
    }

    /**
     * Sets the verifiedIdProfiles property value. A collection of Verified ID profile IDs. The profiles define the credentials that users can present to prove their id when signing in, onboarding, or recovering. Verified ID profiles are managed through the Verified ID APIs.
     * @param array<string>|null $value Value to set for the verifiedIdProfiles property.
    */
    public function setVerifiedIdProfiles(?array $value): void {
        $this->getBackingStore()->set('verifiedIdProfiles', $value);
    }

}
