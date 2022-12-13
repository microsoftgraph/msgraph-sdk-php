<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudApplicationEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new CloudApplicationEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudApplicationEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudApplicationEvidence {
        return new CloudApplicationEvidence();
    }

    /**
     * Gets the appId property value. The appId property
     * @return int|null
    */
    public function getAppId(): ?int {
        return $this->getBackingStore()->get('appId');
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getIntegerValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'instanceId' => fn(ParseNode $n) => $o->setInstanceId($n->getIntegerValue()),
            'instanceName' => fn(ParseNode $n) => $o->setInstanceName($n->getStringValue()),
            'saasAppId' => fn(ParseNode $n) => $o->setSaasAppId($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the instanceId property value. The instanceId property
     * @return int|null
    */
    public function getInstanceId(): ?int {
        return $this->getBackingStore()->get('instanceId');
    }

    /**
     * Gets the instanceName property value. The instanceName property
     * @return string|null
    */
    public function getInstanceName(): ?string {
        return $this->getBackingStore()->get('instanceName');
    }

    /**
     * Gets the saasAppId property value. The saasAppId property
     * @return int|null
    */
    public function getSaasAppId(): ?int {
        return $this->getBackingStore()->get('saasAppId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('appId', $this->getAppId());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeIntegerValue('instanceId', $this->getInstanceId());
        $writer->writeStringValue('instanceName', $this->getInstanceName());
        $writer->writeIntegerValue('saasAppId', $this->getSaasAppId());
    }

    /**
     * Sets the appId property value. The appId property
     *  @param int|null $value Value to set for the appId property.
    */
    public function setAppId(?int $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the instanceId property value. The instanceId property
     *  @param int|null $value Value to set for the instanceId property.
    */
    public function setInstanceId(?int $value): void {
        $this->getBackingStore()->set('instanceId', $value);
    }

    /**
     * Sets the instanceName property value. The instanceName property
     *  @param string|null $value Value to set for the instanceName property.
    */
    public function setInstanceName(?string $value): void {
        $this->getBackingStore()->set('instanceName', $value);
    }

    /**
     * Sets the saasAppId property value. The saasAppId property
     *  @param int|null $value Value to set for the saasAppId property.
    */
    public function setSaasAppId(?int $value): void {
        $this->getBackingStore()->set('saasAppId', $value);
    }

}
