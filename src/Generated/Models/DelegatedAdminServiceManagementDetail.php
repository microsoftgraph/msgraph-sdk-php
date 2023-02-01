<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DelegatedAdminServiceManagementDetail extends Entity implements Parsable 
{
    /**
     * Instantiates a new delegatedAdminServiceManagementDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DelegatedAdminServiceManagementDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DelegatedAdminServiceManagementDetail {
        return new DelegatedAdminServiceManagementDetail();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'serviceManagementUrl' => fn(ParseNode $n) => $o->setServiceManagementUrl($n->getStringValue()),
            'serviceName' => fn(ParseNode $n) => $o->setServiceName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the serviceManagementUrl property value. The serviceManagementUrl property
     * @return string|null
    */
    public function getServiceManagementUrl(): ?string {
        return $this->getBackingStore()->get('serviceManagementUrl');
    }

    /**
     * Gets the serviceName property value. The serviceName property
     * @return string|null
    */
    public function getServiceName(): ?string {
        return $this->getBackingStore()->get('serviceName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('serviceManagementUrl', $this->getServiceManagementUrl());
        $writer->writeStringValue('serviceName', $this->getServiceName());
    }

    /**
     * Sets the serviceManagementUrl property value. The serviceManagementUrl property
     * @param string|null $value Value to set for the serviceManagementUrl property.
    */
    public function setServiceManagementUrl(?string $value): void {
        $this->getBackingStore()->set('serviceManagementUrl', $value);
    }

    /**
     * Sets the serviceName property value. The serviceName property
     * @param string|null $value Value to set for the serviceName property.
    */
    public function setServiceName(?string $value): void {
        $this->getBackingStore()->set('serviceName', $value);
    }

}
