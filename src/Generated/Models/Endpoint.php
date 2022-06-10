<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Endpoint extends DirectoryObject implements Parsable 
{
    /**
     * @var string|null $capability Describes the capability that is associated with this resource. (e.g. Messages, Conversations, etc.) Not nullable. Read-only.
    */
    private ?string $capability = null;
    
    /**
     * @var string|null $providerId Application id of the publishing underlying service. Not nullable. Read-only.
    */
    private ?string $providerId = null;
    
    /**
     * @var string|null $providerName Name of the publishing underlying service. Read-only.
    */
    private ?string $providerName = null;
    
    /**
     * @var string|null $providerResourceId For Microsoft 365 groups, this is set to a well-known name for the resource (e.g. Yammer.FeedURL etc.). Not nullable. Read-only.
    */
    private ?string $providerResourceId = null;
    
    /**
     * @var string|null $uri URL of the published resource. Not nullable. Read-only.
    */
    private ?string $uri = null;
    
    /**
     * Instantiates a new endpoint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Endpoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Endpoint {
        return new Endpoint();
    }

    /**
     * Gets the capability property value. Describes the capability that is associated with this resource. (e.g. Messages, Conversations, etc.) Not nullable. Read-only.
     * @return string|null
    */
    public function getCapability(): ?string {
        return $this->capability;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'capability' => function (ParseNode $n) use ($o) { $o->setCapability($n->getStringValue()); },
            'providerId' => function (ParseNode $n) use ($o) { $o->setProviderId($n->getStringValue()); },
            'providerName' => function (ParseNode $n) use ($o) { $o->setProviderName($n->getStringValue()); },
            'providerResourceId' => function (ParseNode $n) use ($o) { $o->setProviderResourceId($n->getStringValue()); },
            'uri' => function (ParseNode $n) use ($o) { $o->setUri($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the providerId property value. Application id of the publishing underlying service. Not nullable. Read-only.
     * @return string|null
    */
    public function getProviderId(): ?string {
        return $this->providerId;
    }

    /**
     * Gets the providerName property value. Name of the publishing underlying service. Read-only.
     * @return string|null
    */
    public function getProviderName(): ?string {
        return $this->providerName;
    }

    /**
     * Gets the providerResourceId property value. For Microsoft 365 groups, this is set to a well-known name for the resource (e.g. Yammer.FeedURL etc.). Not nullable. Read-only.
     * @return string|null
    */
    public function getProviderResourceId(): ?string {
        return $this->providerResourceId;
    }

    /**
     * Gets the uri property value. URL of the published resource. Not nullable. Read-only.
     * @return string|null
    */
    public function getUri(): ?string {
        return $this->uri;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('capability', $this->capability);
        $writer->writeStringValue('providerId', $this->providerId);
        $writer->writeStringValue('providerName', $this->providerName);
        $writer->writeStringValue('providerResourceId', $this->providerResourceId);
        $writer->writeStringValue('uri', $this->uri);
    }

    /**
     * Sets the capability property value. Describes the capability that is associated with this resource. (e.g. Messages, Conversations, etc.) Not nullable. Read-only.
     *  @param string|null $value Value to set for the capability property.
    */
    public function setCapability(?string $value ): void {
        $this->capability = $value;
    }

    /**
     * Sets the providerId property value. Application id of the publishing underlying service. Not nullable. Read-only.
     *  @param string|null $value Value to set for the providerId property.
    */
    public function setProviderId(?string $value ): void {
        $this->providerId = $value;
    }

    /**
     * Sets the providerName property value. Name of the publishing underlying service. Read-only.
     *  @param string|null $value Value to set for the providerName property.
    */
    public function setProviderName(?string $value ): void {
        $this->providerName = $value;
    }

    /**
     * Sets the providerResourceId property value. For Microsoft 365 groups, this is set to a well-known name for the resource (e.g. Yammer.FeedURL etc.). Not nullable. Read-only.
     *  @param string|null $value Value to set for the providerResourceId property.
    */
    public function setProviderResourceId(?string $value ): void {
        $this->providerResourceId = $value;
    }

    /**
     * Sets the uri property value. URL of the published resource. Not nullable. Read-only.
     *  @param string|null $value Value to set for the uri property.
    */
    public function setUri(?string $value ): void {
        $this->uri = $value;
    }

}
