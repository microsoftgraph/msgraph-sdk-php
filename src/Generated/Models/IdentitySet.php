<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IdentitySet implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Identity|null $application Optional. The application associated with this action.
    */
    private ?Identity $application = null;
    
    /**
     * @var Identity|null $device Optional. The device associated with this action.
    */
    private ?Identity $device = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var Identity|null $user Optional. The user associated with this action.
    */
    private ?Identity $user = null;
    
    /**
     * Instantiates a new identitySet and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.identitySet');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentitySet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentitySet {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.chatMessageFromIdentitySet': return new ChatMessageFromIdentitySet();
                case '#microsoft.graph.chatMessageMentionedIdentitySet': return new ChatMessageMentionedIdentitySet();
                case '#microsoft.graph.chatMessageReactionIdentitySet': return new ChatMessageReactionIdentitySet();
                case '#microsoft.graph.sharePointIdentitySet': return new SharePointIdentitySet();
            }
        }
        return new IdentitySet();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the application property value. Optional. The application associated with this action.
     * @return Identity|null
    */
    public function getApplication(): ?Identity {
        return $this->application;
    }

    /**
     * Gets the device property value. Optional. The device associated with this action.
     * @return Identity|null
    */
    public function getDevice(): ?Identity {
        return $this->device;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'application' => fn(ParseNode $n) => $o->setApplication($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            'device' => fn(ParseNode $n) => $o->setDevice($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'user' => fn(ParseNode $n) => $o->setUser($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the user property value. Optional. The user associated with this action.
     * @return Identity|null
    */
    public function getUser(): ?Identity {
        return $this->user;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('application', $this->application);
        $writer->writeObjectValue('device', $this->device);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('user', $this->user);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the application property value. Optional. The application associated with this action.
     *  @param Identity|null $value Value to set for the application property.
    */
    public function setApplication(?Identity $value ): void {
        $this->application = $value;
    }

    /**
     * Sets the device property value. Optional. The device associated with this action.
     *  @param Identity|null $value Value to set for the device property.
    */
    public function setDevice(?Identity $value ): void {
        $this->device = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the user property value. Optional. The user associated with this action.
     *  @param Identity|null $value Value to set for the user property.
    */
    public function setUser(?Identity $value ): void {
        $this->user = $value;
    }

}
