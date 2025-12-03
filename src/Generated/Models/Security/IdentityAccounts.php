<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class IdentityAccounts extends Entity implements Parsable 
{
    /**
     * Instantiates a new IdentityAccounts and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IdentityAccounts
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IdentityAccounts {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.security.user': return new User();
            }
        }
        return new IdentityAccounts();
    }

    /**
     * Gets the accounts property value. Collection of accounts of the identity in different identity providers.
     * @return array<Account>|null
    */
    public function getAccounts(): ?array {
        $val = $this->getBackingStore()->get('accounts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Account::class);
            /** @var array<Account>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accounts'");
    }

    /**
     * Gets the cloudSecurityIdentifier property value. The cloud security identifier of the identityAccount.
     * @return string|null
    */
    public function getCloudSecurityIdentifier(): ?string {
        $val = $this->getBackingStore()->get('cloudSecurityIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudSecurityIdentifier'");
    }

    /**
     * Gets the displayName property value. The  Active Directory display name of the identityAccount.
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
     * Gets the domain property value. The Active Directory domain name of the identityAccount.
     * @return string|null
    */
    public function getDomain(): ?string {
        $val = $this->getBackingStore()->get('domain');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domain'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accounts' => fn(ParseNode $n) => $o->setAccounts($n->getCollectionOfObjectValues([Account::class, 'createFromDiscriminatorValue'])),
            'cloudSecurityIdentifier' => fn(ParseNode $n) => $o->setCloudSecurityIdentifier($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'domain' => fn(ParseNode $n) => $o->setDomain($n->getStringValue()),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'onPremisesSecurityIdentifier' => fn(ParseNode $n) => $o->setOnPremisesSecurityIdentifier($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isEnabled property value. Boolean indicating if the identityAccounts is enabled.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabled'");
    }

    /**
     * Gets the onPremisesSecurityIdentifier property value. The on-premises security identifier of the identityAccount.
     * @return string|null
    */
    public function getOnPremisesSecurityIdentifier(): ?string {
        $val = $this->getBackingStore()->get('onPremisesSecurityIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesSecurityIdentifier'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('accounts', $this->getAccounts());
        $writer->writeStringValue('cloudSecurityIdentifier', $this->getCloudSecurityIdentifier());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('domain', $this->getDomain());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeStringValue('onPremisesSecurityIdentifier', $this->getOnPremisesSecurityIdentifier());
    }

    /**
     * Sets the accounts property value. Collection of accounts of the identity in different identity providers.
     * @param array<Account>|null $value Value to set for the accounts property.
    */
    public function setAccounts(?array $value): void {
        $this->getBackingStore()->set('accounts', $value);
    }

    /**
     * Sets the cloudSecurityIdentifier property value. The cloud security identifier of the identityAccount.
     * @param string|null $value Value to set for the cloudSecurityIdentifier property.
    */
    public function setCloudSecurityIdentifier(?string $value): void {
        $this->getBackingStore()->set('cloudSecurityIdentifier', $value);
    }

    /**
     * Sets the displayName property value. The  Active Directory display name of the identityAccount.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the domain property value. The Active Directory domain name of the identityAccount.
     * @param string|null $value Value to set for the domain property.
    */
    public function setDomain(?string $value): void {
        $this->getBackingStore()->set('domain', $value);
    }

    /**
     * Sets the isEnabled property value. Boolean indicating if the identityAccounts is enabled.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the onPremisesSecurityIdentifier property value. The on-premises security identifier of the identityAccount.
     * @param string|null $value Value to set for the onPremisesSecurityIdentifier property.
    */
    public function setOnPremisesSecurityIdentifier(?string $value): void {
        $this->getBackingStore()->set('onPremisesSecurityIdentifier', $value);
    }

}
