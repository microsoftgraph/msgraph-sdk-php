<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class OnAttributeCollectionExternalUsersSelfServiceSignUp extends OnAttributeCollectionHandler implements Parsable 
{
    /**
     * Instantiates a new OnAttributeCollectionExternalUsersSelfServiceSignUp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.onAttributeCollectionExternalUsersSelfServiceSignUp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnAttributeCollectionExternalUsersSelfServiceSignUp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnAttributeCollectionExternalUsersSelfServiceSignUp {
        return new OnAttributeCollectionExternalUsersSelfServiceSignUp();
    }

    /**
     * Gets the attributeCollectionPage property value. Required. The configuration for how attributes are displayed in the sign-up experience defined by a user flow, like the externalUsersSelfServiceSignupEventsFlow, specifically on the attribute collection page.
     * @return AuthenticationAttributeCollectionPage|null
    */
    public function getAttributeCollectionPage(): ?AuthenticationAttributeCollectionPage {
        $val = $this->getBackingStore()->get('attributeCollectionPage');
        if (is_null($val) || $val instanceof AuthenticationAttributeCollectionPage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attributeCollectionPage'");
    }

    /**
     * Gets the attributes property value. The attributes property
     * @return array<IdentityUserFlowAttribute>|null
    */
    public function getAttributes(): ?array {
        $val = $this->getBackingStore()->get('attributes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IdentityUserFlowAttribute::class);
            /** @var array<IdentityUserFlowAttribute>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attributes'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'attributeCollectionPage' => fn(ParseNode $n) => $o->setAttributeCollectionPage($n->getObjectValue([AuthenticationAttributeCollectionPage::class, 'createFromDiscriminatorValue'])),
            'attributes' => fn(ParseNode $n) => $o->setAttributes($n->getCollectionOfObjectValues([IdentityUserFlowAttribute::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('attributeCollectionPage', $this->getAttributeCollectionPage());
        $writer->writeCollectionOfObjectValues('attributes', $this->getAttributes());
    }

    /**
     * Sets the attributeCollectionPage property value. Required. The configuration for how attributes are displayed in the sign-up experience defined by a user flow, like the externalUsersSelfServiceSignupEventsFlow, specifically on the attribute collection page.
     * @param AuthenticationAttributeCollectionPage|null $value Value to set for the attributeCollectionPage property.
    */
    public function setAttributeCollectionPage(?AuthenticationAttributeCollectionPage $value): void {
        $this->getBackingStore()->set('attributeCollectionPage', $value);
    }

    /**
     * Sets the attributes property value. The attributes property
     * @param array<IdentityUserFlowAttribute>|null $value Value to set for the attributes property.
    */
    public function setAttributes(?array $value): void {
        $this->getBackingStore()->set('attributes', $value);
    }

}
