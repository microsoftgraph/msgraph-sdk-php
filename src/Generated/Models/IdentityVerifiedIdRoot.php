<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class IdentityVerifiedIdRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new IdentityVerifiedIdRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentityVerifiedIdRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentityVerifiedIdRoot {
        return new IdentityVerifiedIdRoot();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'profiles' => fn(ParseNode $n) => $o->setProfiles($n->getCollectionOfObjectValues([VerifiedIdProfile::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the profiles property value. Profile containing properties about a Verified ID provider and purpose
     * @return array<VerifiedIdProfile>|null
    */
    public function getProfiles(): ?array {
        $val = $this->getBackingStore()->get('profiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, VerifiedIdProfile::class);
            /** @var array<VerifiedIdProfile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'profiles'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('profiles', $this->getProfiles());
    }

    /**
     * Sets the profiles property value. Profile containing properties about a Verified ID provider and purpose
     * @param array<VerifiedIdProfile>|null $value Value to set for the profiles property.
    */
    public function setProfiles(?array $value): void {
        $this->getBackingStore()->set('profiles', $value);
    }

}
