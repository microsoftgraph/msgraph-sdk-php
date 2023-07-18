<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserScopeTeamsAppInstallation extends TeamsAppInstallation implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new userScopeTeamsAppInstallation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userScopeTeamsAppInstallation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserScopeTeamsAppInstallation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserScopeTeamsAppInstallation {
        return new UserScopeTeamsAppInstallation();
    }

    /**
     * Gets the chat property value. The chat between the user and Teams app.
     * @return Chat|null
    */
    public function getChat(): ?Chat {
        $val = $this->getBackingStore()->get('chat');
        if (is_null($val) || $val instanceof Chat) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'chat'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'chat' => fn(ParseNode $n) => $o->setChat($n->getObjectValue([Chat::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('chat', $this->getChat());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the chat property value. The chat between the user and Teams app.
     * @param Chat|null $value Value to set for the chat property.
    */
    public function setChat(?Chat $value): void {
        $this->getBackingStore()->set('chat', $value);
    }

}
