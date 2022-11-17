<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TemporaryAccessPassAuthenticationMethodConfiguration extends AuthenticationMethodConfiguration implements Parsable 
{
    /**
     * Instantiates a new TemporaryAccessPassAuthenticationMethodConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.temporaryAccessPassAuthenticationMethodConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TemporaryAccessPassAuthenticationMethodConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TemporaryAccessPassAuthenticationMethodConfiguration {
        return new TemporaryAccessPassAuthenticationMethodConfiguration();
    }

    /**
     * Gets the defaultLength property value. Default length in characters of a Temporary Access Pass object. Must be between 8 and 48 characters.
     * @return int|null
    */
    public function getDefaultLength(): ?int {
        return $this->getBackingStore()->get('defaultLength');
    }

    /**
     * Gets the defaultLifetimeInMinutes property value. Default lifetime in minutes for a Temporary Access Pass. Value can be any integer between the minimumLifetimeInMinutes and maximumLifetimeInMinutes.
     * @return int|null
    */
    public function getDefaultLifetimeInMinutes(): ?int {
        return $this->getBackingStore()->get('defaultLifetimeInMinutes');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultLength' => fn(ParseNode $n) => $o->setDefaultLength($n->getIntegerValue()),
            'defaultLifetimeInMinutes' => fn(ParseNode $n) => $o->setDefaultLifetimeInMinutes($n->getIntegerValue()),
            'includeTargets' => fn(ParseNode $n) => $o->setIncludeTargets($n->getCollectionOfObjectValues([AuthenticationMethodTarget::class, 'createFromDiscriminatorValue'])),
            'isUsableOnce' => fn(ParseNode $n) => $o->setIsUsableOnce($n->getBooleanValue()),
            'maximumLifetimeInMinutes' => fn(ParseNode $n) => $o->setMaximumLifetimeInMinutes($n->getIntegerValue()),
            'minimumLifetimeInMinutes' => fn(ParseNode $n) => $o->setMinimumLifetimeInMinutes($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the includeTargets property value. A collection of users or groups who are enabled to use the authentication method.
     * @return array<AuthenticationMethodTarget>|null
    */
    public function getIncludeTargets(): ?array {
        return $this->getBackingStore()->get('includeTargets');
    }

    /**
     * Gets the isUsableOnce property value. If true, all the passes in the tenant will be restricted to one-time use. If false, passes in the tenant can be created to be either one-time use or reusable.
     * @return bool|null
    */
    public function getIsUsableOnce(): ?bool {
        return $this->getBackingStore()->get('isUsableOnce');
    }

    /**
     * Gets the maximumLifetimeInMinutes property value. Maximum lifetime in minutes for any Temporary Access Pass created in the tenant. Value can be between 10 and 43200 minutes (equivalent to 30 days).
     * @return int|null
    */
    public function getMaximumLifetimeInMinutes(): ?int {
        return $this->getBackingStore()->get('maximumLifetimeInMinutes');
    }

    /**
     * Gets the minimumLifetimeInMinutes property value. Minimum lifetime in minutes for any Temporary Access Pass created in the tenant. Value can be between 10 and 43200 minutes (equivalent to 30 days).
     * @return int|null
    */
    public function getMinimumLifetimeInMinutes(): ?int {
        return $this->getBackingStore()->get('minimumLifetimeInMinutes');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('defaultLength', $this->getDefaultLength());
        $writer->writeIntegerValue('defaultLifetimeInMinutes', $this->getDefaultLifetimeInMinutes());
        $writer->writeCollectionOfObjectValues('includeTargets', $this->getIncludeTargets());
        $writer->writeBooleanValue('isUsableOnce', $this->getIsUsableOnce());
        $writer->writeIntegerValue('maximumLifetimeInMinutes', $this->getMaximumLifetimeInMinutes());
        $writer->writeIntegerValue('minimumLifetimeInMinutes', $this->getMinimumLifetimeInMinutes());
    }

    /**
     * Sets the defaultLength property value. Default length in characters of a Temporary Access Pass object. Must be between 8 and 48 characters.
     *  @param int|null $value Value to set for the defaultLength property.
    */
    public function setDefaultLength(?int $value): void {
        $this->getBackingStore()->set('defaultLength', $value);
    }

    /**
     * Sets the defaultLifetimeInMinutes property value. Default lifetime in minutes for a Temporary Access Pass. Value can be any integer between the minimumLifetimeInMinutes and maximumLifetimeInMinutes.
     *  @param int|null $value Value to set for the defaultLifetimeInMinutes property.
    */
    public function setDefaultLifetimeInMinutes(?int $value): void {
        $this->getBackingStore()->set('defaultLifetimeInMinutes', $value);
    }

    /**
     * Sets the includeTargets property value. A collection of users or groups who are enabled to use the authentication method.
     *  @param array<AuthenticationMethodTarget>|null $value Value to set for the includeTargets property.
    */
    public function setIncludeTargets(?array $value): void {
        $this->getBackingStore()->set('includeTargets', $value);
    }

    /**
     * Sets the isUsableOnce property value. If true, all the passes in the tenant will be restricted to one-time use. If false, passes in the tenant can be created to be either one-time use or reusable.
     *  @param bool|null $value Value to set for the isUsableOnce property.
    */
    public function setIsUsableOnce(?bool $value): void {
        $this->getBackingStore()->set('isUsableOnce', $value);
    }

    /**
     * Sets the maximumLifetimeInMinutes property value. Maximum lifetime in minutes for any Temporary Access Pass created in the tenant. Value can be between 10 and 43200 minutes (equivalent to 30 days).
     *  @param int|null $value Value to set for the maximumLifetimeInMinutes property.
    */
    public function setMaximumLifetimeInMinutes(?int $value): void {
        $this->getBackingStore()->set('maximumLifetimeInMinutes', $value);
    }

    /**
     * Sets the minimumLifetimeInMinutes property value. Minimum lifetime in minutes for any Temporary Access Pass created in the tenant. Value can be between 10 and 43200 minutes (equivalent to 30 days).
     *  @param int|null $value Value to set for the minimumLifetimeInMinutes property.
    */
    public function setMinimumLifetimeInMinutes(?int $value): void {
        $this->getBackingStore()->set('minimumLifetimeInMinutes', $value);
    }

}
