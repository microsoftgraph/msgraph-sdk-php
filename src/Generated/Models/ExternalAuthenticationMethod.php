<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExternalAuthenticationMethod extends AuthenticationMethod implements Parsable 
{
    /**
     * Instantiates a new ExternalAuthenticationMethod and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.externalAuthenticationMethod');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExternalAuthenticationMethod
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExternalAuthenticationMethod {
        return new ExternalAuthenticationMethod();
    }

    /**
     * Gets the configurationId property value. A unique identifier used to manage the external auth method within Microsoft Entra ID.
     * @return string|null
    */
    public function getConfigurationId(): ?string {
        $val = $this->getBackingStore()->get('configurationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationId'");
    }

    /**
     * Gets the displayName property value. Custom name given to the registered external authentication method.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'configurationId' => fn(ParseNode $n) => $o->setConfigurationId($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('configurationId', $this->getConfigurationId());
        $writer->writeStringValue('displayName', $this->getDisplayName());
    }

    /**
     * Sets the configurationId property value. A unique identifier used to manage the external auth method within Microsoft Entra ID.
     * @param string|null $value Value to set for the configurationId property.
    */
    public function setConfigurationId(?string $value): void {
        $this->getBackingStore()->set('configurationId', $value);
    }

    /**
     * Sets the displayName property value. Custom name given to the registered external authentication method.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

}
