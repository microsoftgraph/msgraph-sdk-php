<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationMethodTarget extends Entity implements Parsable 
{
    /**
     * @var bool|null $isRegistrationRequired Determines if the user is enforced to register the authentication method.
    */
    private ?bool $isRegistrationRequired = null;
    
    /**
     * @var AuthenticationMethodTargetType|null $targetType The targetType property
    */
    private ?AuthenticationMethodTargetType $targetType = null;
    
    /**
     * Instantiates a new authenticationMethodTarget and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.authenticationMethodTarget');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationMethodTarget
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationMethodTarget {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.microsoftAuthenticatorAuthenticationMethodTarget': return new MicrosoftAuthenticatorAuthenticationMethodTarget();
            }
        }
        return new AuthenticationMethodTarget();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isRegistrationRequired' => function (ParseNode $n) use ($o) { $o->setIsRegistrationRequired($n->getBooleanValue()); },
            'targetType' => function (ParseNode $n) use ($o) { $o->setTargetType($n->getEnumValue(AuthenticationMethodTargetType::class)); },
        ]);
    }

    /**
     * Gets the isRegistrationRequired property value. Determines if the user is enforced to register the authentication method.
     * @return bool|null
    */
    public function getIsRegistrationRequired(): ?bool {
        return $this->isRegistrationRequired;
    }

    /**
     * Gets the targetType property value. The targetType property
     * @return AuthenticationMethodTargetType|null
    */
    public function getTargetType(): ?AuthenticationMethodTargetType {
        return $this->targetType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isRegistrationRequired', $this->isRegistrationRequired);
        $writer->writeEnumValue('targetType', $this->targetType);
    }

    /**
     * Sets the isRegistrationRequired property value. Determines if the user is enforced to register the authentication method.
     *  @param bool|null $value Value to set for the isRegistrationRequired property.
    */
    public function setIsRegistrationRequired(?bool $value ): void {
        $this->isRegistrationRequired = $value;
    }

    /**
     * Sets the targetType property value. The targetType property
     *  @param AuthenticationMethodTargetType|null $value Value to set for the targetType property.
    */
    public function setTargetType(?AuthenticationMethodTargetType $value ): void {
        $this->targetType = $value;
    }

}
