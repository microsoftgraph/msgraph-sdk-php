<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Windows Firewall Profile Policies.
*/
class WindowsFirewallNetworkProfile implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new WindowsFirewallNetworkProfile and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsFirewallNetworkProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsFirewallNetworkProfile {
        return new WindowsFirewallNetworkProfile();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the authorizedApplicationRulesFromGroupPolicyMerged property value. Configures the firewall to merge authorized application rules from group policy with those from local store instead of ignoring the local store rules. When AuthorizedApplicationRulesFromGroupPolicyNotMerged and AuthorizedApplicationRulesFromGroupPolicyMerged are both true, AuthorizedApplicationRulesFromGroupPolicyMerged takes priority.
     * @return bool|null
    */
    public function getAuthorizedApplicationRulesFromGroupPolicyMerged(): ?bool {
        $val = $this->getBackingStore()->get('authorizedApplicationRulesFromGroupPolicyMerged');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authorizedApplicationRulesFromGroupPolicyMerged'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the connectionSecurityRulesFromGroupPolicyMerged property value. Configures the firewall to merge connection security rules from group policy with those from local store instead of ignoring the local store rules. When ConnectionSecurityRulesFromGroupPolicyNotMerged and ConnectionSecurityRulesFromGroupPolicyMerged are both true, ConnectionSecurityRulesFromGroupPolicyMerged takes priority.
     * @return bool|null
    */
    public function getConnectionSecurityRulesFromGroupPolicyMerged(): ?bool {
        $val = $this->getBackingStore()->get('connectionSecurityRulesFromGroupPolicyMerged');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectionSecurityRulesFromGroupPolicyMerged'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'authorizedApplicationRulesFromGroupPolicyMerged' => fn(ParseNode $n) => $o->setAuthorizedApplicationRulesFromGroupPolicyMerged($n->getBooleanValue()),
            'connectionSecurityRulesFromGroupPolicyMerged' => fn(ParseNode $n) => $o->setConnectionSecurityRulesFromGroupPolicyMerged($n->getBooleanValue()),
            'firewallEnabled' => fn(ParseNode $n) => $o->setFirewallEnabled($n->getEnumValue(StateManagementSetting::class)),
            'globalPortRulesFromGroupPolicyMerged' => fn(ParseNode $n) => $o->setGlobalPortRulesFromGroupPolicyMerged($n->getBooleanValue()),
            'inboundConnectionsBlocked' => fn(ParseNode $n) => $o->setInboundConnectionsBlocked($n->getBooleanValue()),
            'inboundNotificationsBlocked' => fn(ParseNode $n) => $o->setInboundNotificationsBlocked($n->getBooleanValue()),
            'incomingTrafficBlocked' => fn(ParseNode $n) => $o->setIncomingTrafficBlocked($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'outboundConnectionsBlocked' => fn(ParseNode $n) => $o->setOutboundConnectionsBlocked($n->getBooleanValue()),
            'policyRulesFromGroupPolicyMerged' => fn(ParseNode $n) => $o->setPolicyRulesFromGroupPolicyMerged($n->getBooleanValue()),
            'securedPacketExemptionAllowed' => fn(ParseNode $n) => $o->setSecuredPacketExemptionAllowed($n->getBooleanValue()),
            'stealthModeBlocked' => fn(ParseNode $n) => $o->setStealthModeBlocked($n->getBooleanValue()),
            'unicastResponsesToMulticastBroadcastsBlocked' => fn(ParseNode $n) => $o->setUnicastResponsesToMulticastBroadcastsBlocked($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the firewallEnabled property value. State Management Setting.
     * @return StateManagementSetting|null
    */
    public function getFirewallEnabled(): ?StateManagementSetting {
        $val = $this->getBackingStore()->get('firewallEnabled');
        if (is_null($val) || $val instanceof StateManagementSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firewallEnabled'");
    }

    /**
     * Gets the globalPortRulesFromGroupPolicyMerged property value. Configures the firewall to merge global port rules from group policy with those from local store instead of ignoring the local store rules. When GlobalPortRulesFromGroupPolicyNotMerged and GlobalPortRulesFromGroupPolicyMerged are both true, GlobalPortRulesFromGroupPolicyMerged takes priority.
     * @return bool|null
    */
    public function getGlobalPortRulesFromGroupPolicyMerged(): ?bool {
        $val = $this->getBackingStore()->get('globalPortRulesFromGroupPolicyMerged');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'globalPortRulesFromGroupPolicyMerged'");
    }

    /**
     * Gets the inboundConnectionsBlocked property value. Configures the firewall to block all incoming connections by default. When InboundConnectionsRequired and InboundConnectionsBlocked are both true, InboundConnectionsBlocked takes priority.
     * @return bool|null
    */
    public function getInboundConnectionsBlocked(): ?bool {
        $val = $this->getBackingStore()->get('inboundConnectionsBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inboundConnectionsBlocked'");
    }

    /**
     * Gets the inboundNotificationsBlocked property value. Prevents the firewall from displaying notifications when an application is blocked from listening on a port. When InboundNotificationsRequired and InboundNotificationsBlocked are both true, InboundNotificationsBlocked takes priority.
     * @return bool|null
    */
    public function getInboundNotificationsBlocked(): ?bool {
        $val = $this->getBackingStore()->get('inboundNotificationsBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inboundNotificationsBlocked'");
    }

    /**
     * Gets the incomingTrafficBlocked property value. Configures the firewall to block all incoming traffic regardless of other policy settings. When IncomingTrafficRequired and IncomingTrafficBlocked are both true, IncomingTrafficBlocked takes priority.
     * @return bool|null
    */
    public function getIncomingTrafficBlocked(): ?bool {
        $val = $this->getBackingStore()->get('incomingTrafficBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'incomingTrafficBlocked'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the outboundConnectionsBlocked property value. Configures the firewall to block all outgoing connections by default. When OutboundConnectionsRequired and OutboundConnectionsBlocked are both true, OutboundConnectionsBlocked takes priority. This setting will get applied to Windows releases version 1809 and above.
     * @return bool|null
    */
    public function getOutboundConnectionsBlocked(): ?bool {
        $val = $this->getBackingStore()->get('outboundConnectionsBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'outboundConnectionsBlocked'");
    }

    /**
     * Gets the policyRulesFromGroupPolicyMerged property value. Configures the firewall to merge Firewall Rule policies from group policy with those from local store instead of ignoring the local store rules. When PolicyRulesFromGroupPolicyNotMerged and PolicyRulesFromGroupPolicyMerged are both true, PolicyRulesFromGroupPolicyMerged takes priority.
     * @return bool|null
    */
    public function getPolicyRulesFromGroupPolicyMerged(): ?bool {
        $val = $this->getBackingStore()->get('policyRulesFromGroupPolicyMerged');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyRulesFromGroupPolicyMerged'");
    }

    /**
     * Gets the securedPacketExemptionAllowed property value. Configures the firewall to allow the host computer to respond to unsolicited network traffic of that traffic is secured by IPSec even when stealthModeBlocked is set to true. When SecuredPacketExemptionBlocked and SecuredPacketExemptionAllowed are both true, SecuredPacketExemptionAllowed takes priority.
     * @return bool|null
    */
    public function getSecuredPacketExemptionAllowed(): ?bool {
        $val = $this->getBackingStore()->get('securedPacketExemptionAllowed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securedPacketExemptionAllowed'");
    }

    /**
     * Gets the stealthModeBlocked property value. Prevent the server from operating in stealth mode. When StealthModeRequired and StealthModeBlocked are both true, StealthModeBlocked takes priority.
     * @return bool|null
    */
    public function getStealthModeBlocked(): ?bool {
        $val = $this->getBackingStore()->get('stealthModeBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'stealthModeBlocked'");
    }

    /**
     * Gets the unicastResponsesToMulticastBroadcastsBlocked property value. Configures the firewall to block unicast responses to multicast broadcast traffic. When UnicastResponsesToMulticastBroadcastsRequired and UnicastResponsesToMulticastBroadcastsBlocked are both true, UnicastResponsesToMulticastBroadcastsBlocked takes priority.
     * @return bool|null
    */
    public function getUnicastResponsesToMulticastBroadcastsBlocked(): ?bool {
        $val = $this->getBackingStore()->get('unicastResponsesToMulticastBroadcastsBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unicastResponsesToMulticastBroadcastsBlocked'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('authorizedApplicationRulesFromGroupPolicyMerged', $this->getAuthorizedApplicationRulesFromGroupPolicyMerged());
        $writer->writeBooleanValue('connectionSecurityRulesFromGroupPolicyMerged', $this->getConnectionSecurityRulesFromGroupPolicyMerged());
        $writer->writeEnumValue('firewallEnabled', $this->getFirewallEnabled());
        $writer->writeBooleanValue('globalPortRulesFromGroupPolicyMerged', $this->getGlobalPortRulesFromGroupPolicyMerged());
        $writer->writeBooleanValue('inboundConnectionsBlocked', $this->getInboundConnectionsBlocked());
        $writer->writeBooleanValue('inboundNotificationsBlocked', $this->getInboundNotificationsBlocked());
        $writer->writeBooleanValue('incomingTrafficBlocked', $this->getIncomingTrafficBlocked());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('outboundConnectionsBlocked', $this->getOutboundConnectionsBlocked());
        $writer->writeBooleanValue('policyRulesFromGroupPolicyMerged', $this->getPolicyRulesFromGroupPolicyMerged());
        $writer->writeBooleanValue('securedPacketExemptionAllowed', $this->getSecuredPacketExemptionAllowed());
        $writer->writeBooleanValue('stealthModeBlocked', $this->getStealthModeBlocked());
        $writer->writeBooleanValue('unicastResponsesToMulticastBroadcastsBlocked', $this->getUnicastResponsesToMulticastBroadcastsBlocked());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the authorizedApplicationRulesFromGroupPolicyMerged property value. Configures the firewall to merge authorized application rules from group policy with those from local store instead of ignoring the local store rules. When AuthorizedApplicationRulesFromGroupPolicyNotMerged and AuthorizedApplicationRulesFromGroupPolicyMerged are both true, AuthorizedApplicationRulesFromGroupPolicyMerged takes priority.
     * @param bool|null $value Value to set for the authorizedApplicationRulesFromGroupPolicyMerged property.
    */
    public function setAuthorizedApplicationRulesFromGroupPolicyMerged(?bool $value): void {
        $this->getBackingStore()->set('authorizedApplicationRulesFromGroupPolicyMerged', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the connectionSecurityRulesFromGroupPolicyMerged property value. Configures the firewall to merge connection security rules from group policy with those from local store instead of ignoring the local store rules. When ConnectionSecurityRulesFromGroupPolicyNotMerged and ConnectionSecurityRulesFromGroupPolicyMerged are both true, ConnectionSecurityRulesFromGroupPolicyMerged takes priority.
     * @param bool|null $value Value to set for the connectionSecurityRulesFromGroupPolicyMerged property.
    */
    public function setConnectionSecurityRulesFromGroupPolicyMerged(?bool $value): void {
        $this->getBackingStore()->set('connectionSecurityRulesFromGroupPolicyMerged', $value);
    }

    /**
     * Sets the firewallEnabled property value. State Management Setting.
     * @param StateManagementSetting|null $value Value to set for the firewallEnabled property.
    */
    public function setFirewallEnabled(?StateManagementSetting $value): void {
        $this->getBackingStore()->set('firewallEnabled', $value);
    }

    /**
     * Sets the globalPortRulesFromGroupPolicyMerged property value. Configures the firewall to merge global port rules from group policy with those from local store instead of ignoring the local store rules. When GlobalPortRulesFromGroupPolicyNotMerged and GlobalPortRulesFromGroupPolicyMerged are both true, GlobalPortRulesFromGroupPolicyMerged takes priority.
     * @param bool|null $value Value to set for the globalPortRulesFromGroupPolicyMerged property.
    */
    public function setGlobalPortRulesFromGroupPolicyMerged(?bool $value): void {
        $this->getBackingStore()->set('globalPortRulesFromGroupPolicyMerged', $value);
    }

    /**
     * Sets the inboundConnectionsBlocked property value. Configures the firewall to block all incoming connections by default. When InboundConnectionsRequired and InboundConnectionsBlocked are both true, InboundConnectionsBlocked takes priority.
     * @param bool|null $value Value to set for the inboundConnectionsBlocked property.
    */
    public function setInboundConnectionsBlocked(?bool $value): void {
        $this->getBackingStore()->set('inboundConnectionsBlocked', $value);
    }

    /**
     * Sets the inboundNotificationsBlocked property value. Prevents the firewall from displaying notifications when an application is blocked from listening on a port. When InboundNotificationsRequired and InboundNotificationsBlocked are both true, InboundNotificationsBlocked takes priority.
     * @param bool|null $value Value to set for the inboundNotificationsBlocked property.
    */
    public function setInboundNotificationsBlocked(?bool $value): void {
        $this->getBackingStore()->set('inboundNotificationsBlocked', $value);
    }

    /**
     * Sets the incomingTrafficBlocked property value. Configures the firewall to block all incoming traffic regardless of other policy settings. When IncomingTrafficRequired and IncomingTrafficBlocked are both true, IncomingTrafficBlocked takes priority.
     * @param bool|null $value Value to set for the incomingTrafficBlocked property.
    */
    public function setIncomingTrafficBlocked(?bool $value): void {
        $this->getBackingStore()->set('incomingTrafficBlocked', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the outboundConnectionsBlocked property value. Configures the firewall to block all outgoing connections by default. When OutboundConnectionsRequired and OutboundConnectionsBlocked are both true, OutboundConnectionsBlocked takes priority. This setting will get applied to Windows releases version 1809 and above.
     * @param bool|null $value Value to set for the outboundConnectionsBlocked property.
    */
    public function setOutboundConnectionsBlocked(?bool $value): void {
        $this->getBackingStore()->set('outboundConnectionsBlocked', $value);
    }

    /**
     * Sets the policyRulesFromGroupPolicyMerged property value. Configures the firewall to merge Firewall Rule policies from group policy with those from local store instead of ignoring the local store rules. When PolicyRulesFromGroupPolicyNotMerged and PolicyRulesFromGroupPolicyMerged are both true, PolicyRulesFromGroupPolicyMerged takes priority.
     * @param bool|null $value Value to set for the policyRulesFromGroupPolicyMerged property.
    */
    public function setPolicyRulesFromGroupPolicyMerged(?bool $value): void {
        $this->getBackingStore()->set('policyRulesFromGroupPolicyMerged', $value);
    }

    /**
     * Sets the securedPacketExemptionAllowed property value. Configures the firewall to allow the host computer to respond to unsolicited network traffic of that traffic is secured by IPSec even when stealthModeBlocked is set to true. When SecuredPacketExemptionBlocked and SecuredPacketExemptionAllowed are both true, SecuredPacketExemptionAllowed takes priority.
     * @param bool|null $value Value to set for the securedPacketExemptionAllowed property.
    */
    public function setSecuredPacketExemptionAllowed(?bool $value): void {
        $this->getBackingStore()->set('securedPacketExemptionAllowed', $value);
    }

    /**
     * Sets the stealthModeBlocked property value. Prevent the server from operating in stealth mode. When StealthModeRequired and StealthModeBlocked are both true, StealthModeBlocked takes priority.
     * @param bool|null $value Value to set for the stealthModeBlocked property.
    */
    public function setStealthModeBlocked(?bool $value): void {
        $this->getBackingStore()->set('stealthModeBlocked', $value);
    }

    /**
     * Sets the unicastResponsesToMulticastBroadcastsBlocked property value. Configures the firewall to block unicast responses to multicast broadcast traffic. When UnicastResponsesToMulticastBroadcastsRequired and UnicastResponsesToMulticastBroadcastsBlocked are both true, UnicastResponsesToMulticastBroadcastsBlocked takes priority.
     * @param bool|null $value Value to set for the unicastResponsesToMulticastBroadcastsBlocked property.
    */
    public function setUnicastResponsesToMulticastBroadcastsBlocked(?bool $value): void {
        $this->getBackingStore()->set('unicastResponsesToMulticastBroadcastsBlocked', $value);
    }

}
