<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SmsAuthenticationMethodConfiguration extends AuthenticationMethodConfiguration implements Parsable 
{
    /**
     * Instantiates a new SmsAuthenticationMethodConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.smsAuthenticationMethodConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SmsAuthenticationMethodConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SmsAuthenticationMethodConfiguration {
        return new SmsAuthenticationMethodConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'includeTargets' => fn(ParseNode $n) => $o->setIncludeTargets($n->getCollectionOfObjectValues([SmsAuthenticationMethodTarget::class, 'createFromDiscriminatorValue'])),
            'telecomProviderSettings' => fn(ParseNode $n) => $o->setTelecomProviderSettings($n->getObjectValue([TelecomProviderSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the includeTargets property value. A collection of groups that are enabled to use the authentication method.
     * @return array<SmsAuthenticationMethodTarget>|null
    */
    public function getIncludeTargets(): ?array {
        $val = $this->getBackingStore()->get('includeTargets');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SmsAuthenticationMethodTarget::class);
            /** @var array<SmsAuthenticationMethodTarget>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includeTargets'");
    }

    /**
     * Gets the telecomProviderSettings property value. Settings for routing SMS authentication traffic through a telecom provider integration.
     * @return TelecomProviderSettings|null
    */
    public function getTelecomProviderSettings(): ?TelecomProviderSettings {
        $val = $this->getBackingStore()->get('telecomProviderSettings');
        if (is_null($val) || $val instanceof TelecomProviderSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'telecomProviderSettings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('includeTargets', $this->getIncludeTargets());
        $writer->writeObjectValue('telecomProviderSettings', $this->getTelecomProviderSettings());
    }

    /**
     * Sets the includeTargets property value. A collection of groups that are enabled to use the authentication method.
     * @param array<SmsAuthenticationMethodTarget>|null $value Value to set for the includeTargets property.
    */
    public function setIncludeTargets(?array $value): void {
        $this->getBackingStore()->set('includeTargets', $value);
    }

    /**
     * Sets the telecomProviderSettings property value. Settings for routing SMS authentication traffic through a telecom provider integration.
     * @param TelecomProviderSettings|null $value Value to set for the telecomProviderSettings property.
    */
    public function setTelecomProviderSettings(?TelecomProviderSettings $value): void {
        $this->getBackingStore()->set('telecomProviderSettings', $value);
    }

}
