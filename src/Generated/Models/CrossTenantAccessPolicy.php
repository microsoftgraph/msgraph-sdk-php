<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CrossTenantAccessPolicy extends PolicyBase implements Parsable 
{
    /**
     * Instantiates a new CrossTenantAccessPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.crossTenantAccessPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CrossTenantAccessPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CrossTenantAccessPolicy {
        return new CrossTenantAccessPolicy();
    }

    /**
     * Gets the allowedCloudEndpoints property value. Used to specify which Microsoft clouds an organization would like to collaborate with. By default, this value is empty. Supported values for this field are: microsoftonline.com, microsoftonline.us, and partner.microsoftonline.cn.
     * @return array<string>|null
    */
    public function getAllowedCloudEndpoints(): ?array {
        $val = $this->getBackingStore()->get('allowedCloudEndpoints');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedCloudEndpoints'");
    }

    /**
     * Gets the default property value. Defines the default configuration for how your organization interacts with external Microsoft Entra organizations.
     * @return CrossTenantAccessPolicyConfigurationDefault|null
    */
    public function getEscapedDefault(): ?CrossTenantAccessPolicyConfigurationDefault {
        $val = $this->getBackingStore()->get('escapedDefault');
        if (is_null($val) || $val instanceof CrossTenantAccessPolicyConfigurationDefault) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'escapedDefault'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedCloudEndpoints' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAllowedCloudEndpoints($val);
            },
            'default' => fn(ParseNode $n) => $o->setEscapedDefault($n->getObjectValue([CrossTenantAccessPolicyConfigurationDefault::class, 'createFromDiscriminatorValue'])),
            'partners' => fn(ParseNode $n) => $o->setPartners($n->getCollectionOfObjectValues([CrossTenantAccessPolicyConfigurationPartner::class, 'createFromDiscriminatorValue'])),
            'templates' => fn(ParseNode $n) => $o->setTemplates($n->getObjectValue([PolicyTemplate::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the partners property value. Defines partner-specific configurations for external Microsoft Entra organizations.
     * @return array<CrossTenantAccessPolicyConfigurationPartner>|null
    */
    public function getPartners(): ?array {
        $val = $this->getBackingStore()->get('partners');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CrossTenantAccessPolicyConfigurationPartner::class);
            /** @var array<CrossTenantAccessPolicyConfigurationPartner>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'partners'");
    }

    /**
     * Gets the templates property value. Represents the base policy in the directory for multitenant organization settings.
     * @return PolicyTemplate|null
    */
    public function getTemplates(): ?PolicyTemplate {
        $val = $this->getBackingStore()->get('templates');
        if (is_null($val) || $val instanceof PolicyTemplate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'templates'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('allowedCloudEndpoints', $this->getAllowedCloudEndpoints());
        $writer->writeObjectValue('default', $this->getEscapedDefault());
        $writer->writeCollectionOfObjectValues('partners', $this->getPartners());
        $writer->writeObjectValue('templates', $this->getTemplates());
    }

    /**
     * Sets the allowedCloudEndpoints property value. Used to specify which Microsoft clouds an organization would like to collaborate with. By default, this value is empty. Supported values for this field are: microsoftonline.com, microsoftonline.us, and partner.microsoftonline.cn.
     * @param array<string>|null $value Value to set for the allowedCloudEndpoints property.
    */
    public function setAllowedCloudEndpoints(?array $value): void {
        $this->getBackingStore()->set('allowedCloudEndpoints', $value);
    }

    /**
     * Sets the default property value. Defines the default configuration for how your organization interacts with external Microsoft Entra organizations.
     * @param CrossTenantAccessPolicyConfigurationDefault|null $value Value to set for the default property.
    */
    public function setEscapedDefault(?CrossTenantAccessPolicyConfigurationDefault $value): void {
        $this->getBackingStore()->set('escapedDefault', $value);
    }

    /**
     * Sets the partners property value. Defines partner-specific configurations for external Microsoft Entra organizations.
     * @param array<CrossTenantAccessPolicyConfigurationPartner>|null $value Value to set for the partners property.
    */
    public function setPartners(?array $value): void {
        $this->getBackingStore()->set('partners', $value);
    }

    /**
     * Sets the templates property value. Represents the base policy in the directory for multitenant organization settings.
     * @param PolicyTemplate|null $value Value to set for the templates property.
    */
    public function setTemplates(?PolicyTemplate $value): void {
        $this->getBackingStore()->set('templates', $value);
    }

}
