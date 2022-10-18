<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BasicAuthentication extends ApiAuthenticationConfigurationBase implements Parsable 
{
    /**
     * @var string|null $password The password. It is not returned in the responses.
    */
    private ?string $password = null;
    
    /**
     * @var string|null $username The username.
    */
    private ?string $username = null;
    
    /**
     * Instantiates a new BasicAuthentication and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.basicAuthentication');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BasicAuthentication
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BasicAuthentication {
        return new BasicAuthentication();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'password' => fn(ParseNode $n) => $o->setPassword($n->getStringValue()),
            'username' => fn(ParseNode $n) => $o->setUsername($n->getStringValue()),
        ]);
    }

    /**
     * Gets the password property value. The password. It is not returned in the responses.
     * @return string|null
    */
    public function getPassword(): ?string {
        return $this->password;
    }

    /**
     * Gets the username property value. The username.
     * @return string|null
    */
    public function getUsername(): ?string {
        return $this->username;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('password', $this->password);
        $writer->writeStringValue('username', $this->username);
    }

    /**
     * Sets the password property value. The password. It is not returned in the responses.
     *  @param string|null $value Value to set for the password property.
    */
    public function setPassword(?string $value ): void {
        $this->password = $value;
    }

    /**
     * Sets the username property value. The username.
     *  @param string|null $value Value to set for the username property.
    */
    public function setUsername(?string $value ): void {
        $this->username = $value;
    }

}
